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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						 <?php if($this->session->userdata("nama") == "admin") :  ?>
							<a href="<?php echo site_url('tempat_parkir/add') ?>"><i class="fas fa-plus"></i>Tambah Data</a>
						<?php endif; ?>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kode Tempat Parkir</th>
										<th>Nama Pemilik</th>
										<th>Kapasitas Mobil</th>
										<th>Tersisa Mobil</th>
										<th>Alamat</th>
										<th>Biaya</th>
										<?php if($this->session->userdata("nama") === 'admin') :  ?>
										<th>Action</th>
										 <?php endif; ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tempat_parkir as $tempat_parkir): ?>
									<tr>
										<td width="200">
											<?php echo $tempat_parkir->kode_tempat_parkir ?>
										</td>
										<td width="150">
											<?php echo $tempat_parkir->nama_pemilik ?>
										</td>
										<td width="150">
											<?php echo $tempat_parkir->kapasitas_mobil?>
										</td>
										<td width="150">
											<?php echo $tempat_parkir->counter?>
										</td>
										<td width="150">
											<?php echo $tempat_parkir->alamat ?>
										</td>
										<td width="150">
											<?php echo $tempat_parkir->biaya ?>
										</td>
										 <?php if($this->session->userdata("nama") === 'admin') :  ?>
										<td width="100">
											<a href="<?php echo site_url('tempat_parkir/edit/'.$tempat_parkir->tempat_parkir_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('tempat_parkir/delete/'.$tempat_parkir->tempat_parkir_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
										 <?php endif; ?>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
	<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>


</body>

</html>