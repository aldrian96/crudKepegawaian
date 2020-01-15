<body background="http://securelogysoftsolution.com/wp-content/uploads/2015/04/office-imac-mockup-9.jpg">
    <div class="container">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data pegawai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>cPegawai/tambah" class="btn btn-lg btn-pill btn-outline-info">Tambah Data Pegawai</a>
                <a href="<?= base_url('cPegawai/halaman'); ?>" class="btn btn-lg btn-outline-info">View PDF</a>
                <a href="<?= base_url('cPegawai/cetak'); ?>" class="btn btn-lg btn-pill btn-outline-info">Create PDF</a>
            </div>
        </div>

        <!-- <div class="row mt-3">
        <div class="col-md-5">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Pegawai..." name="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </div>
            </div>
            </form>
        </div>
    </div> -->

        <div class="row mt-3">
            <div class="col-md-12">
                <h3 class="text-light">DAFTAR PEGAWAI</h3>
                <?php if (empty($pegawai)) : ?>
                <div class="alert alert-danger">
                    Data Pegawai tidak ditemukan...
                    atau bisa jadi dia adalah Another
                </div>
                <?php endif; ?>
                <table border="1" class="table table-striped table-light mt-4">
                    <thead class="thead-dark">
                        <tr align="center">
                            <th>ID</th>
                            <th>NAMA</th>
                            <th>NIP</th>
                            <th>Tanggal Lahir</th>
                            <th>JK</th>
                            <th colspan="4">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pegawai as $peg) : ?>
                        <tr align="center">
                            <td><?= $peg['ID']; ?></td>
                            <td><?= $peg['NAMA']; ?></td>
                            <td><?= $peg['NIP']; ?></td>
                            <td><?= $peg['TTL']; ?></td>
                            <td><?= $peg['JK']; ?></td>
                            <td><a href="<?= base_url(); ?>cPegawai/detail/<?= $peg['ID']; ?>" class="btn btn-outline-primary float-right">Detail</a></td>
                            <td><a href="<?= base_url(); ?>cPegawai/ubah/<?= $peg['ID']; ?>" class="btn btn-outline-success float-mid">Edit</a></td>
                            <td><a href="<?= base_url(); ?>cPegawai/hapus/<?= $peg['ID']; ?>" class="btn btn-outline-danger float-left" onclick="return confirm('Are you sure?');">Delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>