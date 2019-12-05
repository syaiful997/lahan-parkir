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
						<?php if($this->session->userdata("nama") !== 'admin'): ?>
						<a href="<?php echo site_url('admin/transaksi/add') ?>"><i class="fas fa-plus"></i>Tambah Data</a><?php endif; ?>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kode transaksi</th>
										<th>kode tempat parkir</th>
										<th>Nama Member</th>
										<th>Tanggal awal</th>
										<th>Tanggal akhir</th>
										<th>Status</th>
										<th>Biaya</th>
										<th>Bukti Transaksi</th>
										<?php if($this->session->userdata("nama") !== 'admin'): ?>
										<th>Aksi</th>
										<?php endif; ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($transaksi as $transaksi): ?>
									<tr>
										<td width="200">
											<?php echo $transaksi->kode_transaksi_id ?>
										</td>
										<td width="250">
											<?php echo $transaksi->tempat_parkir ?>
										</td>
										<td width="100">
											<?php echo $transaksi->nama_member ?>
										</td>
										<td width="200">
											<?php echo $transaksi->tanggal_awal ?>
										</td>
										<td width="200">
											<?php echo $transaksi->tanggal_akhir ?>
										</td>
										<td width="100">
											<?php echo $transaksi->status ?>
										</td>
										<td width="100">
											<?php echo $transaksi->biaya ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/transaksi/'.$transaksi->path_file) ?>" width="50" />
										</td>
										<td width="100">
											<?php if($this->session->userdata("nama") !== 'admin' && $transaksi->status === 'BELUM_BAYAR' ): ?>
														<a href="<?php echo site_url('admin/transaksi/upload/'.$transaksi->transaksi_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> upload bukti</a>
											
											<?php endif; ?>
										</td>
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