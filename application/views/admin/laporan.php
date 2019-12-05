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
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Pemilik</th>
										<th>Kode Tempat Parkir </th>
										<th>Tanggal Awal</th>
										<th>Tanggal Akhir</th>
										<th>Biaya</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($laporans as $laporan): ?>
									<tr>
										<td width="100">
											<?php echo $laporan->nama_pemilik ?>
										</td>
										<td width="100">
											<?php echo $laporan->kode_tempat_parkir ?>
										</td>
										<td width="100">
											<?php echo $laporan->tanggal_awal ?>
										</td>
										<td width="100">
											<?php echo $laporan->tanggal_akhir ?>
										</td>
										<td width="100">
											<?php echo $laporan->biaya ?>
										</td>
									</tr>
									<?php endforeach; ?>	
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<center><a class="fas fa-print" class="btn btn-success" href="<?php echo base_url('admin/laporan/cetakPdf')?>">Cetak</a></center>
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
</script>


</body>

</html>