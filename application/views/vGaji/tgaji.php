<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="ID" value="<?= $gaji['ID']; ?>">
                        <div class="form-group">
                            <label for="GAJI">Gaji Pegawai</label>
                            <input type="number" name="GAJI" class="form-control" id="GAJI" value="<?= $gaji['GAJI']; ?>">
                            <small class="form-text text-danger"><?= form_error('GAJI'); ?></small>
                        </div>
                        <a href="<?= base_url();?>cGaji" class="btn btn-outline-warning btn-dark">Kembali</a>
                        <button type="submit" name="tambahgj" class="btn btn-outline-warning btn-dark float-right">Isi Gaji</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>