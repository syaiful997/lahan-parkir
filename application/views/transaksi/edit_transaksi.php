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

						<a href="<?php echo site_url('transaksi/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('transaksi/upload') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $transaksi->transaksi_id?>" />

							<div class="form-group">
								<label for="name">Kode Transaksi*</label>
								<input class="form-control <?php echo form_error('kode_transaksi_id') ? 'is-invalid':'' ?>"
								 type="text" name="kode_transaksi_id"  value="<?php echo $transaksi->kode_transaksi_id ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kode_transaksi_id') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Kode tempat parkir*</label>
								<input class="form-control <?php echo form_error('kode_tempat_parkir') ? 'is-invalid':'' ?>"
								 type="text" name="kode_tempat_parkir"  value="<?php echo $transaksi->kode_tempat_parkir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kode_tempat_parkir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama Member*</label>
								<input class="form-control <?php echo form_error('nama_member') ? 'is-invalid':'' ?>"
								 type="text" name="nama_member"  value="<?php echo $transaksi->nama_member ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Tanggal awal*</label>
								<input class="form-control <?php echo form_error('tanggal_awal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal_awal"  value="<?php echo $transaksi->tanggal_awal ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_awal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Tanggal akhir*</label>
								<input class="form-control <?php echo form_error('tanggal_akhir') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal_akhir" min="0" value="<?php echo $transaksi->tanggal_akhir ?>"  />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_akhir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Status</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="text" name="status" value="<?php echo $transaksi->status ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="biaya">Biaya*</label>
								<input class="form-control <?php echo form_error('biaya') ? 'is-invalid':'' ?>"
								 type="number" name="biaya" min="0"  value="<?php echo $transaksi->biaya ?>" />
								<div class=	"invalid-feedback">
									<?php echo form_error('biaya') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="file">Bukti Transaksi*</label>
								<input class="form-control <?php echo form_error('path_file') ? 'is-invalid':'' ?>"
								 type="file" name="image" min="" />
								 <input type="hidden" name="old_image" value="<?php echo $transaksi->path_file ?>" />
								<div class=	"invalid-feedback">
									<?php echo form_error('path_file') ?>
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