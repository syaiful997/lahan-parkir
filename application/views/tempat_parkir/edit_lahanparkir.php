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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('tempat_parkir/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('tempat_parkir/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $tempat_parkir->tempat_parkir_id?>" />

							<div class="form-group">
								<label for="name">Kode Tempat Parkir*</label>
								<input class="form-control <?php echo form_error('kode_tempat_parkir') ? 'is-invalid':'' ?>"
								 type="text" name="kode_tempat_parkir"  value="<?php echo $tempat_parkir->kode_tempat_parkir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kode_tempat_parkir') ?>
								</div>
							</div>

							<!--<div class="form-group">
								<label for="name">Nama Pemilik*</label>
								<input class="form-control <?php echo form_error('nama_pemilik') ? 'is-invalid':'' ?>"
								 type="text" name="nama_pemilik"  value="<?php echo $tempat_parkir->nama_pemilik ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_pemilik') ?>
								</div>
							</div>-->


							<div class="form-group">
								<label for="owner_id">Nama Pemilik*</label>
							
								 <div class="col-md-8">
	                    		<select name="owner_id" id="owner_id" class="form-control">
	                    			<option value="0">-PILIH-</option>
	                    			<?php 
										foreach ($members as $member) {
											echo "<option value='$member[owner_id]'>$member[nama_pemilik]</option>";
											}
										?>
	                    		</select>
	                		</div>


								<div class=	"invalid-feedback">
									<?php echo form_error('nama_pemilik') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="name">kapasitas Mobil*</label>
								<input class="form-control <?php echo form_error('kapasitas') ? 'is-invalid':'' ?>"
								 type="number" name="kapasitas_mobil"  value="<?php echo $tempat_parkir->kapasitas_mobil ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kapasitas_mobil') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" min="0" value="<?php echo $tempat_parkir->alamat ?>"  />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Biaya*</label>
								<input class="form-control <?php echo form_error('biaya') ? 'is-invalid':'' ?>"
								 type="text" name="biaya" min="0" value="<?php echo $tempat_parkir->biaya ?>"  />
								<div class="invalid-feedback">
									<?php echo form_error('biaya') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>