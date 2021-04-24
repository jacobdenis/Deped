<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>Signin</title>

	<link href="<?php echo base_url('assets/template/css/app.css');?>" rel="stylesheet">

</head>

<body>
	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">DepEd Benguet Employee Profile</h1>
							<p class="lead">
								Welcome Back
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="<?php echo base_url('assets/custom/img/deped-benguet.jpg');?>" alt="Chris Wood" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form method="POST" action="<?php echo base_url('index.php/Auth/signin');?>">
										<div class="form-group">
											<label>Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter you username" />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
											<!-- <small>
												<a href="pages-reset-password.html">Forgot password?</a>
											</small> -->
										</div>
										<!-- <div>
											<div class="custom-control custom-checkbox align-items-center">
												<input type="checkbox" class="custom-control-input" value="remember-me" name="remember-me" checked>
												<label class="custom-control-label text-small">Remember me next time</label>
											</div>
										</div> -->
										<div class="text-center mt-3">
											<!-- <a href="<?php echo base_url('index.php/Auth/signin');?>" class="btn btn-lg btn-primary">Sign in</a> -->
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="<?php echo base_url('assets/template/js/app.js');?>"></script>
</body>

</html>