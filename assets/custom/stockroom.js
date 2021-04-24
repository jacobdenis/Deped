$(document).ready(function(){
    let AssetID='';
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
        data=getformvaluesassociative("#Logs");
        data['AssetID']=AssetID;
        $.ajax(
          {   
              url: `${base_url}index.php/ManageAsset/AddAssetLog`,
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
          $('#logs_datatable').DataTable().ajax.reload();    
    });
    $( "#StockRoom" ).submit(function( event ) {
        event.preventDefault();
        data=getformvaluesassociative("#StockRoom");
        data['AssetID']=AssetID;
        Method='';
        if(AssetID==''){
          Method='AddAsset';
        }else{
          Method='EditAsset';
        }
        data['TypeID']=3;
        data['IsStock']=1;
        $.ajax(
          {   
              url: `${base_url}index.php/ManageAsset/${Method}`,
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
             
                $("#add_system_unit_modal").modal('close');
              },
          }) 
          $('#stockroom_datatable').DataTable().ajax.reload();    
    });
    $('#stockroom_datatable').DataTable({
          "order": [[ 1, "desc" ]],
          "autoWidth": false,
          dom: 'l f <"toolbar">rtip',
          processing: true,
          "bProcessing": true,
          responsive:true,
          ajax: {
              url: `${base_url}index.php/ManageAsset/GetAssets`,
              dataType: 'json',
              type: 'POST',
              data:function(d){
                  d.TypeID=null
                  d.IsStock=1
              },
              dataSrc:""
          },
          columns: [
              {"data":null,'title':'Action',render:function(data){
                return `
                <button type="button" value="${data.AssetID}" class="btn btn-primary btn-sm show-logs-stock"><i class="fas fa-sticky-note"></i></button> 
                <button type="button" value="${data.AssetID}" class="btn btn-primary btn-sm show-edit-stock"><i class="fas fa-pencil-alt"></i></button> 
                <button type="button" value="${data.AssetID}" class="btn btn-danger btn-sm delete-stock"><i class="fas fa-times"></i></button>`;
              }},
              {"data":'Type','title':'Type'},
              {"data":'Brand','title':'Brand'},
              {"data":'AssetTag','title':'AssetTag'},
              {"data":'Quantity','title':'Quantity'},
              {"data":'Remarks','title':'Remarks'},
              {"data":null,'title':'Status',render:function(data){
                if(data.Status=="Working"){
                  return `<span class="badge badge-primary">${data.Status}</span>`;
                }else{
                  return `<span class="badge badge-danger">${data.Status}</span>`;
                }
                
              }},
              {"data":'Location','title':'Location'},
          ],
           'select': 'multi',
            destroy:true
    });
    $(document).on('click',".delete-stock",function() {
      event.preventDefault();
      data={};
      data['AssetID']=$(this).val();
      $.ajax(
        {   
            url: `${base_url}index.php/ManageAsset/DeleteAsset`,
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
              $('#stockroom_datatable').DataTable().ajax.reload();
            },
        }) 
    });
    $(document).on('click',".show-edit-stock",function() {
      AssetID=$(this).val();
      data={};
      data['AssetID']=AssetID;
      $.ajax(
        {   
            url: `${base_url}index.php/ManageAsset/GetAsset`,
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
              $("#TypeID").val(data[0].TypeID);
              $("#Brand").val(data[0].Brand);
              $("#AssetTag").val(data[0].AssetTag);
              $("#Quantity").val(data[0].Quantity);
              $("#Remarks").val(data[0].Remarks);
              $("#StatusID").val(data[0].StatusID);
              $("#Location").val(data[0].Location);
              $("#add_stockroom_modal").modal('show');
            },
        }) 

    });
    $(document).on('click',".show-add-stock",function() {
      
      AssetID='';
      $("#TypeID").val();
      $("#Brand").val();
      $("#AssetTag").val();
      $("#Quantity").val();
      $("#Remarks").val();
      $("#StatusID").val();
      $("#Location").val();
      $("#add_stockroom_modal").modal('show');
    });
   

    $(document).on('click','.import-assets',function(){

      let jsonObject={};
      
        if (selectedFile) {
          console.log("hi");
          function getQuote() {
              var quote;
              return new Promise(function(resolve, reject) {
                var fileReader = new FileReader();
                fileReader.onload = function(event) {
                var data = event.target.result;
          
                var workbook = XLSX.read(data, {
                  type: "binary"
                });
                workbook.SheetNames.forEach(sheet => {
                  console.log('d');
                  let rowObject = XLSX.utils.sheet_to_row_object_array(
                  workbook.Sheets[sheet]
                  );
                  console.log('e')
                  quote=(rowObject);
                  
                  resolve(quote)  ;
                });
                };
                fileReader.readAsBinaryString(selectedFile);
              });
            }
            // console.log(getQuote());
            // async function main() {
            //   quote = await getQuote();
            //     return quote;
          
            // }
            (async () => {
              data=(await getQuote())
              $.ajax({
                url: base_url+'index.php/ManageAsset/import_stockroom',//location:globalcontroller/manageleave, line:387
                dataType: 'json',
                type: 'POST',          
                data: ({'data':JSON.stringify(data)}),
                statusCode: {
                400: function() {
                  alert(`Failed` , 'Cannot access the url. Please contact your system administrator',`error`);
                },
                500: function() {
                  alert(`Failed` , `
                    Opps! it looks like the data you're uploading has an incorrect format`,`error`);
                }
                },
              })
              .done(function (data) { 
                $('#stockroom_datatable').DataTable().ajax.reload();
               return data;
              })
            })()
            
          
        }
                      
                  
      
          
      })
  
    document
    .getElementById("fileUpload")
    .addEventListener("change", function(event) {
    selectedFile = event.target.files[0];
    });

    $(document).on('click',".show-logs-stock",function() {
      AssetID=$(this).val();
      $("#logs_modal").modal('show');
      $('#logs_datatable').DataTable({
        "autoWidth": false,
        dom: 'l f <"toolbar">rtip',
        processing: true,
        "bProcessing": true,
        responsive:true,
        ajax: {
          url: `${base_url}index.php/ManageAsset/GetAssetLogs`,
          dataType: 'json',
          type: 'POST',
          data:function(d){
            d.AssetID=AssetID
          },
          dataSrc:"result"
        },
        "initComplete": function( settings, json ) {
          console.log(json.AssetTag)
          $("#AssetName").html(`${json.AssetTag.Brand} - ${json.AssetTag.AssetTag}` );
        },
        columns: [
        
          // {"data":'Location','title':'Location'},
          {"data":'Description','title':'Description'},
        ],
         'select': 'multi',
          destroy:true
      });
    })
  })
  