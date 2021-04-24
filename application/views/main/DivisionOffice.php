<div class="container-fluid p-0">

					<h1 class="h3 mb-3">All system unit assets</h1>

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
												<th>Asset Tag</th>
												<th>Hostname</th>
												<th>System Model</th>
												<th>Serial Number</th>
												<th>Case</th>
												<th>Mobo</th>
												<th>Processor</th>
												<th>Storage</th>
												<th>Memory</th>
												<th>OS</th>
												<th>Location</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><button class="btn btn-sm btn-info ">Edit</button> <button class="btn btn-sm btn-info ">View</button></td>
												<td>Hope Fuentes</td>
												<td>Secretary</td>
												<td>San Francisco</td>
												<td>41</td>
												<td>2010/02/12</td>
												<td>$109,850</td>
												<td>Hope Fuentes</td>
												<td>Secretary</td>
												<td>San Francisco</td>
												<td>41</td>
												<td>2010/02/12</td>
												<td>2010/02/12</td>
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