	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <title>Bumen Jaya Diesel - Register</title>

	  <!-- Custom fonts for this template-->
	  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	  <!-- Custom styles for this template-->
	  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

		<?php $this->load->view("admin/_partials/head.php") ?>
	</head>

	<body class="bg-gradient-primary">

	  <div class="container">

	  	 <div class="row justify-content-center">

	    <div class="card lg col-lg-14">
	      <div class="card-body p-0">
	        <!-- Nested Row within Card Body -->
	        <div class="row">
	          <div class="col-lg-15">
	            <div class="p-5">
	              <div class="text-center">
	                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
	              </div>

		
					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>

					<div class="card mb-3">
						<div class="card-body">

							<form action="<?php base_url('register/add') ?>" method="post" enctype="multipart/form-data" >
								
	 							<div class="form-group">
									<label for="email">Email*</label>
									<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
									 type="text" name="email" />
									<div class="invalid-feedback">
										<?php echo form_error('email') ?>
									</div>
								</div>


								<div class="form-group">
									<label for="username">Username*</label>
									<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
									 type="text" name="username" />
									<div class="invalid-feedback">
										<?php echo form_error('username') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password*</label>
									<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
									 type="Password" name="password" />
									<div class="invalid-feedback">
										<?php echo form_error('password') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="alamat">Alamat*</label>
									<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
									 type="text" name="alamat" />
									<div class="invalid-feedback">
										<?php echo form_error('alamat') ?>
									</div>
								</div>
								
								<div class="form-group">
									<label for="handphone">Handphone*</label>
									<input class="form-control <?php echo form_error('handphone') ? 'is-invalid':'' ?>"
									 type="number" name="handphone" />
									<div class="invalid-feedback">
										<?php echo form_error('handphone') ?>
									</div>
								</div>


								<input class="btn btn-success" type="submit" name="btn" value="Save" />
								<a class="btn btn-success" href="<?php echo base_url('Login')?>">Back</a>
							</form>
						</div>
						<div class="card-footer small text-muted">
							* required fields
						</div>
					</div>
					<!-- /.container-fluid -->
					<!-- Sticky Footer -->
				</div>
				<!-- /.content-wrapper -->
			</div>
			<!-- /#wrapper -->
			<?php $this->load->view("admin/_partials/scrolltop.php") ?>

			<?php $this->load->view("admin/_partials/js.php") ?>
	</body>
	</html>