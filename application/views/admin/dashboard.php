	<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("admin/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
    <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

    <!-- Icon Cards-->
    <p>
    	<br>
    		<div class="container">
      			<div class="text-center">
        			<div class="intro-lead-in"><h1>Selamat Datang</i> <?php echo $this->session->userdata("nama"); ?> 
        				 </h1></div>
        				<div class="intro-lead-in">(Sistem Informasi Penyewaan Lahan Parkir)</div>
        					<div class="intro-heading text-uppercase">nyari lahan parkir ??</div>
        	<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="owners">klik</a>
      			</div>
    		</div>
    		<p>
    		</p>
    		<img src="<?php echo base_url(); ?>img/parkir.jpg" width="1200" height="500">
    	</br>
  	</p>	
    <!-- Area Chart Example-->
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php if($this->session->userdata("nama") === 'admin') :  ?>
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <?php endif; ?>
  	</div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>