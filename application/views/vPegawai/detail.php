<body background="https://webdesignerwall.com/wp-content/uploads/2014/05/animated-backgrounds.jpg">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12">
				<h3 class="text-center">Detail Data Pegawai</h3>
				<table class="table border border-info table-dark">
					<thead class="thead-light">
						<tr>
							<th colspan="2">
								<h5><?= $pegawai['NAMA']; ?></h5>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<h6>Alamat : <?= $pegawai['ALAMAT']; ?></h6>
							</td>
							<td></td>
						</tr>
						<tr>
							<td><img src="../../upload/pegawai/<?= $pegawai['FOTO'] ?>" class="img-fluid"></td>
							<td></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td><a class="btn btn-outline-info btn-dark" href="<?= base_url(); ?>cPegawai">Kembali<span class="sr-only">(current)</span></a></td>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>