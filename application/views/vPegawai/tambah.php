<body background="http://securelogysoftsolution.com/wp-content/uploads/2015/04/office-imac-mockup-9.jpg">
    <div class="container">

        <div class="row justify-content-center mt-3 ">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Pegawai
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="NAMA">Nama</label>
                                <input type="text" name="NAMA" class="form-control" id="NAMA" placeholder="Masukan Nama....">
                                <small class="form-text text-danger"><?= form_error('NAMA'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="NIP">NIP</label>
                                <input type="number" name="NIP" class="form-control" id="NIP" placeholder="Masukan NIP...." <small class="form-text text-danger"><?= form_error('NIP'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="TTL">Tanggal Lahir</label>
                                <input type="date" name="TTL" class="form-control" id="TTL">
                                <small class="form-text text-danger"><?= form_error('TTL'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="JK">Jenis Kelamin</label>
                                <select class="form-control" name="JK" id="JK">
                                    <option>LAKI-LAKI</option>
                                    <option>PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="GRADE">Grade</label>
                                <select class="form-control" name="GRADE" id="GRADE">
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ALAMAT">Alamat</label>
                                <textarea class="form-control" name="ALAMAT" id="ALAMAT" rows="3" placeholder="Masukan Alamat...."></textarea>
                                <small class="form-text text-danger"><?= form_error('ALAMAT'); ?></small>
                                <div class="form-group">
                                    <label for="FOTO">Foto</label><br>
                                    <input type="file" name="FOTO" class="btn btn-dark btn-outline-info" id="FOTO">
                                </div>
                                <a href="<?= base_url(); ?>cPegawai" class="btn btn-outline-info btn-dark">KEMBALI</a>
                                <button type="submit" name="tambah" class="btn btn-outline-info btn-dark float-right">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>