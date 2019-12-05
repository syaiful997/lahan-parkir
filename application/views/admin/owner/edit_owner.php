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

						<a href="<?php echo site_url('admin/Owners/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/Owners/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $owner->owner_id?>" />

							<div class="form-group">
								<label for="name">Nama Pemilik*</label>
								<input class="form-control <?php echo form_error('nama_pemilik') ? 'is-invalid':'' ?>"
								 type="text" name="nama_pemilik"  value="<?php echo $owner->nama_pemilik ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_pemilik') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No Rekening*</label>
								<input class="form-control <?php echo form_error('no_rekening') ? 'is-invalid':'' ?>"
								 type="number" name="no_rekening"  value="<?php echo $owner->no_rekening ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('no_rekening') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nomor Handphone*</label>
								<input class="form-control <?php echo form_error('nomor_handphone') ? 'is-invalid':'' ?>"
								 type="number" name="nomor_handphone"  value="<?php echo $owner->nomor_handphone ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nomor_handphone') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" min="0" value="<?php echo $owner->alamat ?>"  />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
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