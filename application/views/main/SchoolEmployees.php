<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Manage School Employees</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<?php 
										// if($this->RoleType=='Admin'){
											echo '
											<div class="form-row">
												<div class="form-group col-md-5">
													<select id="inputState" class="form-control">
														<option selected="">Choose district...</option>
														<option>...</option>
													</select>
												</div>
												<div class="form-group col-md-5">
													<select id="inputState" class="form-control">
														<option selected="">Choose school...</option>
														<option>...</option>
													</select>
												</div>
												<div class="form-group col-md-2">
													<button class="btn btn btn-info ">Search</button>
												</div>
											</div>
											';
										// }
									?>
									<button class="btn btn-primary" data-toggle="modal" data-target="#ProdileAddModal">Add</button>
									<button class="btn btn-primary">Print</button>
								</div>
								<div class="card-body">
									<table id="SchoolEmployees-datatable" class="table table-striped" style="width:100%">
										<thead>
											<tr>
                                                
												<th>Action</th>
												<th>FullName</th>
												<th>Civil Status</th>
												<th>Sex</th>
												<th>Position</th>
												<th>Highest Education</th>
												<th>Performance Rating</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<a href="<?php echo base_url('index.php/Employee/Profile');?>"><button class="btn btn-sm btn-info ">View</button></a>	
													<button data-toggle="modal" data-target="#ProdileEditModal" class="btn btn-sm btn-info ">Edit</button>
												 <button class="btn btn-sm btn-danger ">Delete</button></td>
												<td>Jacob Lino Denis</td>
												<td>Single</td>
												<td>Male</td>
												<td>Teacher I</td>
												<td>BSIT</td>
												<td>Performance Rating</td>
											</tr>
									
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<script>
						document.addEventListener("DOMContentLoaded", function(event) {
					
							// Datatables with Buttons
							var datatablesButtons = $('#datatables-buttons').DataTable({
								lengthChange: !1,
								responsive: true,
							});
							// datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
						});
					</script>

				</div>

<?php 
	foreach ($modals as $key => $value) {
		$this->load->view($value);
	}
?>