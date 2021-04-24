<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Manage Users</h1>

					<div class="row">
						
						<div class="col-12">
							<div class="card">
								<div class="card-header">
                                <button class="btn btn-primary">Add</button>
                                <button class="btn btn-primary">Print</button>
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
                                                
												<th>Action</th>
												<th>SchoolID</th>
												<th>SchoolName</th>
												<th>Password</th>
												<th>Address</th>
												<th>SchoolHead</th>
												<th>ContactNo.</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<button class="btn btn-sm btn-info ">View</button>
													<button class="btn btn-sm btn-info ">Edit</button>
												 <button class="btn btn-sm btn-danger ">Delete</button></td>
												<td>1111110</td>
												<td>Atok Elementary School</td>
												<td>Test@123</td>
												<td>Atok Benguet</td>
												<td>Clifton Bangsi-il</td>
												<td>09187645037</td>
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