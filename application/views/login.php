<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>lahan_parkir-login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php base_url(); ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-4">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">LOGIN AREA PARKIR</h1>
                    <center><img src="img/main.png" width="100" height="100" /></center>
                  </div>
                  <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                      <table>
			<tr>
				<div class="form-group"></div>
				<label for="username" class="cols-sm-2 control-label">Username</label>
				<div class="cols-sm-10"></div>
				<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i> </span><input type="text" name="username"/>
			</tr>
			<tr>
			<div class="form-group"></div>
				<label for="password" class="cols-sm-2 control-label">Password</label>
				<div class="cols-sm-12"></div>
				<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i> </span>
				<input type="password" name="password"/>
			</tr>
			<p>
			<div class="form-group ">
				<input type="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="Login" name="login" />
			</div>
			</p>
		</table>
                  </form>
                  	<div class="text-center">
                    <a class="small" href="<?php echo site_url('register/add') ?>">daftar member !</a>
                	</div>
                   <div class="text-center">
                   	<hr>
                   </hr>
                    <h5 class="h9 text-gray-900 mb-9">Contact us</h5>
                    <h8 class="h9 text-gray-900 mb-8"><i class="fas fa-phone"></i> 085817008203</h8>
                	</div>
                    <div class="login-register">
                    </div>
                    	<div class="text-center">
				Sistem Informasi Penyewaan Lahan Parkir <br>lahan_parkir  &copy; 2019</br>
						</div>
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      </div>
    </div>
	</div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>
</body>
</html>
