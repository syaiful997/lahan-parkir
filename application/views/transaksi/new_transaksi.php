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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('transaksi') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/transaksi/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="kode_transaksi_id">Kode Transaksi*</label>
								<input class="form-control <?php echo form_error('kode_transaksi_id') ? 'is-invalid':'' ?>"
								 type="text" name="kode_transaksi_id" />
								<div class="invalid-feedback">
									<?php echo form_error('kode_transaksi_id') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kode_tempat_parkir">Kode tempat parkir*</label>
								
							<div class="col-md-8">
	                    		<select name="kode_tempat_parkir" id="kode_tempat_parkir" class="form-control"
	                    		onchange='changeValue(this.value)'>
	                    			<option value="0">-PILIH-</option>
	                    			<?php 
	                    			$jsArray = "var prdName = new Array();\n";
										foreach ($tempatParkir as $tmpParkir) {
											echo "<option value='$tmpParkir[tempat_parkir_id]'>$tmpParkir[kode_tempat_parkir]</option>";
											 $jsArray .= "prdName['" . $tmpParkir[tempat_parkir_id] . "'] = {biaya:'" . $tmpParkir[biaya] . "'};\n";

											}
										?>
	                    		</select>
	                		</div>
								


								<div class="invalid-feedback">
									<?php echo form_error('kode_tempat_parkir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_member">Nama Member*</label>
								<input type="text" class="form-control" readonly="true" name="nama_member" value=<?php echo $this->session->userdata("nama"); ?> />
							
								<div class=	"invalid-feedback">
									<?php echo form_error('nama_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal_awal">Tanggal Awal*</label>
								<input class="form-control <?php echo form_error('tanggal_awal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal_awal" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_awal') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="tanggal_akhir">Tanggal Akhir*</label>
								<input class="form-control <?php echo form_error('tanggal_akhir') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal_akhir" min="0" />
								<div class=	"invalid-feedback">
									<?php echo form_error('tanggal_akhir') ?>
								</div>
							</div>

							<!--<div class="form-group">
								<label for="status">Status*</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="text" name="status" min="0" />
								<div class=	"invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>-->

							<div class="form-group">
								<label for="biaya">Biaya*</label>
								<input id="biaya" readonly="true" class="form-control <?php echo form_error('biaya') ? 'is-invalid':'' ?>"
								 type="number" name="biaya" min="0" />
								<div class=	"invalid-feedback">
									<?php echo form_error('biaya') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

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

<script type="text/javascript"> 
		<?php echo $jsArray; ?>
			function changeValue(id){
				document.getElementById('biaya').value = prdName[id].biaya;
			    
			};
	</script>