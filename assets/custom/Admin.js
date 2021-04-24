$(document).ready(function(){
    let EmployeeID='';
    function getformvaluesassociative($dataform){
      $form=$($dataform)
          var inputarray={};
          data=$($dataform).serializeArray();
          $.each(data, function(i, field){
              
              inputarray[field.name]= field.value ;
              inputarray[field.name]= field.value ;
              inputarray[field.name]= field.value ;
  
          
          });
          return inputarray;
          
    }
  
    $( "#ProfileAdd" ).submit(function( event ) {
        event.preventDefault();
        data=getformvaluesassociative("#ProfileAdd");
        $.ajax(
        {   
            url: `${base_url}index.php/School/AddEmployee`,
            dataType: 'json',
            type: 'POST',   
            data: ({'data':JSON.stringify(data)}),
            statusCode: {
            404: function() {
                alert(`Failed` , 'Cannot access the url. Please contact your system administrator',`error`);
            },
            500: function() {
            alert(`Failed` , `
                    500 - Server error kindly contact your system administrator`,`error`);
            }
            },
            success: function(data)
            {   
            
            },
        }) 
        $('#SchoolEmployees-datatable').DataTable().ajax.reload();    
    });
    $( "#PerformanceRating" ).submit(function( event ) {
        event.preventDefault();
        data_filter={};
    data_filter['EmployeeID']=EmployeeID;
        data=getformvaluesassociative("#PerformanceRating");
        data['employeeID']=EmployeeID;
        $.ajax(
          {   
            url: `${base_url}index.php/Employee/AddPerformanceRating`,
            dataType: 'json',
            type: 'POST',   
            data: ({'data':JSON.stringify(data)}),
            statusCode: {
            404: function() {
                alert(`Failed` , 'Cannot access the url. Please contact your system administrator',`error`);
            },
            500: function() {
               alert(`Failed` , `
                    500 - Server error kindly contact your system administrator`,`error`);
            }
            },
            success: function(data)
            {   
                $('#PerformanceRating_datatable').DataTable().ajax.reload();   
            },
        }) 
        
    });
    $(document).on('click',".delete-performancerating",function() {
        event.preventDefault();
        data_filter={};
        data_filter['EmployeeID']=EmployeeID;
        data={};
        data['PerformanceRatingID']=$(this).val();
        $.ajax(
          {   
              url: `${base_url}index.php/Employee/DeletePerformanceRating`,
              dataType: 'json',
              type: 'POST',   
              data: ({'data':JSON.stringify(data)}),
              statusCode: {
              404: function() {
                  alert(`Failed` , 'Cannot access the url. Please contact your system administrator',`error`);
              },
              500: function() {
                 alert(`Failed` , `
                      500 - Server error kindly contact your system administrator`,`error`);
              }
              },
              success: function(data)
              {   
                $('#PerformanceRating_datatable').DataTable().ajax.reload();
              },
          }) 
      });
    $(document).on('click',".show-performance-rating",function() {
        data_filter={};
        EmployeeID=$(this).val();
        data_filter['EmployeeID']=EmployeeID;
        $('#PerformanceRating_datatable').DataTable({
            "order": [[ 1, "desc" ]],
            "autoWidth": false,
            dom: 'l f <"toolbar">rtip',
            processing: true,
            "bProcessing": true,
            responsive:true,
            ajax: {
                url: `${base_url}index.php/Employee/GetEmployeePerformanceRatings`,
                dataType: 'json',
                type: 'POST',
                data:function(d){
                    d.data=JSON.stringify(data_filter);
                },
                dataSrc:""
            },
            
            columns: [
                {"data":null,'title':'Action',render:function(data){
                    return `
                    <button type="button" value="${data.ratingID}" class="btn btn-danger btn-sm delete-performancerating"><i class="fas fa-times"></i></button>`;
                }},
                {"data":'rating','title':'Rating'},
                {"data":null,'title':'Year',
                  render:function(data){
                      return data.year;
                  }
                },
            ],
             'select': 'multi',
              destroy:true
      });
    
      $("#PerformanceRatingModal").modal('show');
    });
    
    $('#SchoolEmployees-datatable').DataTable({
          "order": [[ 1, "desc" ]],
          "autoWidth": false,
          dom: 'l f <"toolbar">rtip',
          processing: true,
          "bProcessing": true,
          responsive:true,
          ajax: {
              url: `${base_url}index.php/School/GetEmployees`,
              dataType: 'json',
              type: 'POST',
              data:function(d){
          d.TypeID=10
          d.IsStock=0
              },
              dataSrc:""
          },
          
          columns: [
            // <th>Action</th>
            // <th>FullName</th>
            // <th>Civil Status</th>
            // <th>Sex</th>
            // <th>Position</th>
            // <th>Highest Education</th>
            // <th>Performance Rating</th>
              {"data":null,'title':'Action',render:function(data){
            return `
            <a href="${base_url}index.php/Employee/Profile/${data.employeeID}"><button class="btn btn-sm btn-info ">View</button></a>	
            <button type="button" value="${data.employeeID}" class="btn btn-primary btn-sm show-edit-systemunit"><i class="fas fa-pencil-alt"></i></button> 
            <button type="button" value="${data.employeeID}" class="btn btn-danger btn-sm delete-systemunit"><i class="fas fa-times"></i></button>`;
            }},
              {"data":'FullName','title':'FullName'},
              {"data":null,'title':'CivilStatus',
                render:function(data){
                    return '';
                }
              },
              {"data":null,'title':'Sex',render:function(data){
                  return data.sex==1 ? "Male":"Female"
              }},
              {"data":null,'title':'Position',render:function(data){
                  return ``;
              }},
              {"data":'HighestEducation','title':'HighestEducation'},
              {"data":null,'title':'PerformanceRating',render:function(data){
                  return `<button type="button" value="${data.employeeID}" class="btn btn-primary btn-sm show-performance-rating"><i class="fas fa-star"></i></button> `;
              }},
          ],
           'select': 'multi',
            destroy:true
    });
    // $(document).on('click',".delete-systemunit",function() {
    //   event.preventDefault();
    //   data={};
    //   data['AssetID']=$(this).val();
    //   $.ajax(
    //     {   
    //         url: `${base_url}index.php/ManageAsset/DeleteAsset`,
    //         dataType: 'json',
    //         type: 'POST',   
    //         data: ({'data':JSON.stringify(data)}),
    //         statusCode: {
    //         404: function() {
    //             alert(`Failed` , 'Cannot access the url. Please contact your system administrator',`error`);
    //         },
    //         500: function() {
    //            alert(`Failed` , `
    //                 500 - Server error kindly contact your system administrator`,`error`);
    //         }
    //         },
    //         success: function(data)
    //         {   
    //           $('#systemunits_datatable').DataTable().ajax.reload();
            
    //         },
    //     }) 
    // });
    // $(document).on('click',".show-edit-systemunit",function() {
    //   AssetID=$(this).val();
    //   data={};
    //   data['AssetID']=AssetID;
    //   $.ajax(
    //     {   
    //         url: `${base_url}index.php/ManageAsset/GetAsset`,
    //         dataType: 'json',
    //         type: 'POST',   
    //         data: ({'data':JSON.stringify(data)}),
    //         statusCode: {
    //         404: function() {
    //             alert(`Failed` , 'Cannot access the url. Please contact your system administrator',`error`);
    //         },
    //         500: function() {
    //            alert(`Failed` , `
    //                 500 - Server error kindly contact your system administrator`,`error`);
    //         }
    //         },
    //         success: function(data)
    //         {  
    //           $("#AssetTag").val(data[0].AssetTag);
    //           $("#HostName").val(data[0].HostName);
    //           $("#SystemModel").val(data[0].SystemModel);
    //           $("#SerialNumber").val(data[0].SerialNumber);
    //           $("#MotherBoard").val(data[0].MotherBoard);
    //           $("#Processor").val(data[0].Processor);
    //           $("#Storage").val(data[0].Storage);
    //           $("#Memory").val(data[0].Memory);
    //           $("#OSID").val(data[0].OSID);
    //           $("#Location").val(data[0].Location);
    //           $("#Casing").val(data[0].Casing);
    //           $("#StatusID").val(data[0].StatusID);
    //         },
    //     }) 
    //   $("#add_system_unit_modal").modal('show');
    // });
    // $(document).on('click',".show-add-systemunit",function() {
    //   AssetID='';
    //   $("#AssetTag").val('');
    //   $("#HostName").val('');
    //   $("#SystemModel").val('');
    //   $("#SerialNumber").val('');
    //   $("#MotherBoard").val('');
    //   $("#Processor").val('');
    //   $("#Storage").val('');
    //   $("#Memory").val('');
    //   $("#OSID").val('');
    //   $("#Location").val('');
    //   $("#Casing").val('');
    //   $("#StatusID").val('');
    //   $("#add_system_unit_modal").modal('show');
    // });
    // let selectedFile;
    // $(document).on('change','.import-assets',function(){
      
    // })
    // $(document).on('click','.import-assets',function(){
  
    //   let jsonObject={};
      
    //     if (selectedFile) {
    //       console.log("hi");
    //       function getQuote() {
    //           var quote;
    //           return new Promise(function(resolve, reject) {
    //             var fileReader = new FileReader();
    //             fileReader.onload = function(event) {
    //             var data = event.target.result;
          
    //             var workbook = XLSX.read(data, {
    //               type: "binary"
    //             });
    //             workbook.SheetNames.forEach(sheet => {
    //               console.log('d');
    //               let rowObject = XLSX.utils.sheet_to_row_object_array(
    //               workbook.Sheets[sheet]
    //               );
    //               console.log('e')
    //               quote=(rowObject);
                  
    //               resolve(quote)  ;
    //             });
    //             };
    //             fileReader.readAsBinaryString(selectedFile);
    //           });
    //         }
    //         // console.log(getQuote());
    //         // async function main() {
    //         //   quote = await getQuote();
    //         //     return quote;
          
    //         // }
    //         (async () => {
    //           data=(await getQuote())
    //           $.ajax({
    //             url: base_url+'index.php/ManageAsset/import_systemunit',//location:globalcontroller/manageleave, line:387
    //             dataType: 'json',
    //             type: 'POST',          
    //             data: ({'data':JSON.stringify(data)}),
    //             statusCode: {
    //             400: function() {
    //               alert(`Failed` , 'Cannot access the url. Please contact your system administrator',`error`);
    //             },
    //             500: function() {
    //               alert(`Failed` , `
    //                 Opps! it looks like the data you're uploading has an incorrect format`,`error`);
    //             }
    //             },
    //           })
    //           .done(function (data) { 
    //             $('#systemunits_datatable').DataTable().ajax.reload();
    //            return data;
    //           })
    //         })()
            
          
    //     }
                      
                  
      
          
    //   })
  
    // document
    // .getElementById("fileUpload")
    // .addEventListener("change", function(event) {
    // selectedFile = event.target.files[0];
    // });
    // $(document).on('click',".show-logs-stock",function() {
    //   AssetID=$(this).val();
    //   $("#logs_modal").modal('show');
    //   $('#logs_datatable').DataTable({
    //     "autoWidth": false,
    //     dom: 'l f <"toolbar">rtip',
    //     processing: true,
    //     "bProcessing": true,
    //     responsive:true,
    //     ajax: {
    //       url: `${base_url}index.php/ManageAsset/GetAssetLogs`,
    //       dataType: 'json',
    //       type: 'POST',
    //       data:function(d){
    //         d.AssetID=AssetID
    //       },
    //       dataSrc:"result"
    //     },
    //     "initComplete": function( settings, json ) {
    //       console.log(json.AssetTag)
    //       $("#AssetName").html(`${json.AssetTag.Brand} - ${json.AssetTag.AssetTag}` );
    //     },
    //     columns: [
        
    //       // {"data":'Location','title':'Location'},
    //       {"data":'Description','title':'Description'},
    //     ],
    //      'select': 'multi',
    //       destroy:true
    //   });
    // })
  })
  
  
  