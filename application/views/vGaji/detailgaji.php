<div class="container">
	<div class="row mt-5">
			<div class="col-md-12">
					<h3 class="text-center">Detail Gaji Pegawai</h3>
					<table class="table border border-dark">
							<thead class="thead-dark">
									<tr>
											<th colspan="2"><h5><?= $gaji['NAMA']; ?></h5></th>
									</tr>
							</thead>
							<tbody>
                                    <tr>
                                            <td><img src="../../upload/pegawai/<?= $gaji['FOTO'] ?>" class="img-fluid"></td>
                                            <td></td>
                                    </tr>
									<tr>
											<td><h6>Nomor Induk Pegawai	:	<?= $gaji['NIP']; ?></h6></td>
											<td></td>
                                    </tr>
									<tr>
											<td><h6>Tempat, Tanggal Lahir	:	<?= $gaji['TTL']; ?></h6></td>
											<td></td>
                                    </tr>
									<tr>
											<td><h6>Alamat	:	<?= $gaji['ALAMAT']; ?></h6></td>
											<td></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Jenis Kelamin   :   <?= $gaji['JK']; ?></h6></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Total Gaji   :   <?= $gaji['GAJI']; ?></h6></td>
                                        <td></td>
                                    </tr>
							</tbody>
							<tfoot>
									<tr>
											<td><a class="btn btn-outline-warning btn-dark" href="<?= base_url(); ?>cGaji">Kembali<span class="sr-only">(current)</span></a></td>
									</tr>
							</tfoot>
					</table>
			</div>
	</div>
</div>