

					<h1 class="h3 mb-3">Profile</h1>

					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
                                    <div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
                                                <i class="align-middle" data-feather="more-horizontal"></i>
                                            </a>
											<div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" data-toggle="modal" data-target="#ProdileEditModal">Edit</a>
                                                
                                                <a class="dropdown-item" data-toggle="modal" data-target="#TransferSchoolModal">Transfer</a>
											</div>
										</div>
									</div>
									<h3 class="card-title mb-0">Profile Details</h3>
								</div>
								<div class="card-body text-center">
									<img src="<?php echo base_url('assets/template/img/avatar-4.jpg')?>" alt="Stacie Hall" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h4 class="card-title mb-0"><?=$this->FullName;?></h4>
									<div class="text-muted mb-2"><?=$this->Position;?></div>
								</div>
								<!-- <hr class="my-0" /> -->
								<!-- <div class="card-body">
									<h5 class="h6 card-title">Skills</h5>
									<a href="#" class="badge badge-primary mr-1 my-1">HTML</a>
									<a href="#" class="badge badge-primary mr-1 my-1">JavaScript</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Sass</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Angular</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Vue</a>
									<a href="#" class="badge badge-primary mr-1 my-1">React</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Redux</a>
									<a href="#" class="badge badge-primary mr-1 my-1">UI</a>
									<a href="#" class="badge badge-primary mr-1 my-1">UX</a>
								</div> -->
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm mr-1"></span> Date Of Birth: <a href="#"><?=$this->BirthDate;?></a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm mr-1"></span> Sex: <a href="#"><?= $this->Sex==1 ? "Male":"Female" ?></a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm mr-1"></span> Education: <a href="#"><?=$this->HighestEducation;?></a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm mr-1"></span> Learning Area: <a href="#"><?=$this->LearningArea;?></a></li>
									</ul>
								</div>
							</div>
						</div>
                        <!-- public $FullName;
    public $CivilStatus;
    public $BirthDate;
    public $Sex;
    public $HighestEducation;
    public $PerformanceRating; -->
						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
                                                <i class="align-middle" data-feather="more-horizontal"></i>
                                            </a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Add</a>
											</div>
										</div>
									</div>
									<h3 class="card-title mb-0">Trainings</h3>
								</div>
								<div class="card-body h-100">

									<div class="media">
										<div class="media-body">
                                            <table id="datatables-buttons" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Action</th>
                                                        <th>Title</th>
                                                        <th>Host</th>
                                                        <th>Duration</th>
                                                        <th>Category</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                        <button class="btn btn-sm btn-info ">Edit</button>
                                                        <button class="btn btn-sm btn-danger ">Delete</button></td>
                                                        <td>Computer System Servicing</td>
                                                        <td>DCCP</td>
                                                        <td>24 hours</td>
                                                        <td>Technical</td>
                                                    </tr>
                                            
                                                </tbody>
                                            </table>

										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
                                                <i class="align-middle" data-feather="more-horizontal"></i>
                                            </a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Add</a>
											</div>
										</div>
									</div>
									<h3 class="card-title mb-0">Performance Rating</h3>
								</div>
								<div class="card-body h-100">

									<div class="media">
										<div class="media-body">
                                            <table id="datatables-buttons" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Action</th>
                                                        <th>Rating</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                        <button class="btn btn-sm btn-info ">Edit</button>
                                                        <button class="btn btn-sm btn-danger ">Delete</button></td>
                                                        <td>Computer System Servicing</td>
                                                        <td>DCCP</td>
                                                    </tr>
                                            
                                                </tbody>
                                            </table>

										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
                                                <i class="align-middle" data-feather="more-horizontal"></i>
                                            </a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Add</a>
											</div>
										</div>
									</div>
									<h3 class="card-title mb-0">Program </h3>
								</div>
								<div class="card-body h-100">

									<div class="media">
										<div class="media-body">
                                            <table id="datatables-buttons" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Action</th>
                                                        <th>Description</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                        <button class="btn btn-sm btn-info ">Edit</button>
                                                        <button class="btn btn-sm btn-danger ">Delete</button></td>
                                                        <td>Computer System Servicing</td>
                                                        <td>DCCP</td>
                                                    </tr>
                                            
                                                </tbody>
                                            </table>

										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
                                                <i class="align-middle" data-feather="more-horizontal"></i>
                                            </a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Add</a>
											</div>
										</div>
									</div>
									<h3 class="card-title mb-0">Remarks</h3>
								</div>
								<div class="card-body h-100">

									<div class="media">
										<div class="media-body">
                                            <table id="datatables-buttons" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Action</th>
                                                        <th>Description</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                        <button class="btn btn-sm btn-info ">Edit</button>
                                                        <button class="btn btn-sm btn-danger ">Delete</button></td>
                                                        <td>Computer System Servicing</td>
                                                        <td>DCCP</td>
                                                    </tr>
                                            
                                                </tbody>
                                            </table>

										</div>
									</div>
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
                    
<?php

    foreach ($modals as $key => $value) {
        $this->load->view($value);
    }
?>