<body background="http://securelogysoftsolution.com/wp-content/uploads/2015/04/office-imac-mockup-9.jpg">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Ubah Data Pegawai
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="ID" value="<?= $pegawai['ID']; ?>">
                            <div class="form-group">
                                <label for="NAMA">Nama Lengkap</label>
                                <input type="text" name="NAMA" class="form-control" id="NAMA" value="<?= $pegawai['NAMA']; ?>">
                                <small class="form-text text-danger"><?= form_error('NAMA'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="NIP">NIP</label>
                                <input type="number" name="NIP" class="form-control" id="NIP" value="<?= $pegawai['NIP']; ?>">
                                <small class="form-text text-danger"><?= form_error('NIP'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="TTL">Tanggal Lahir</label>
                                <input type="date" name="TTL" class="form-control" id="TTL" value="<?= $pegawai['TTL']; ?>">
                                <small class="form-text text-danger"><?= form_error('TTL'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="JK">Jenis Kelamin</label>
                                <select class="form-control" name="JK" id="JK" value="<?= $pegawai['JK']; ?>">
                                    <?php foreach ($jeniskelamin as $g) : ?>
                                        <?php if ($g == $pegawai['JK']) : ?>
                                            <option value="<?= $g; ?>" selected> <?= $g; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $g; ?>"><?= $g; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ALAMAT">ALAMAT</label>
                                <textarea type="text" name="ALAMAT" class="form-control" id="ALAMAT"><?= $pegawai['ALAMAT']; ?></textarea>
                                <small class="form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                                <!-- </div>
                        <div class="form-group">
                            <label for="FOTO">Foto</label><br>
                            <input type="file" name="FOTO" class="btn btn-dark btn-outline-secondary" id="FOTO" value="<?= $pegawai['FOTO']; ?>">
                        </div> -->
                                <a href="<?= base_url(); ?>cPegawai" class="btn btn-dark btn-outline-info">KEMBALI</a>
                                <button type="submit" name="ubah" class="btn btn-md btn-pill btn-outline-info btn-dark float-right">Ubah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>