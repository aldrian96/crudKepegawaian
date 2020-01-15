<body background="http://securelogysoftsolution.com/wp-content/uploads/2015/04/office-imac-mockup-9.jpg">
<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if( $this->session->flashdata('flash') ) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Gaji pegawai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>Grafik" class="btn btn-lg btn-pill btn-outline-info">View Grafik</a>
        </div>
    </div>
    <!-- <div class="row mt-3">
        <div class="col-md-5">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Pegawai..." name="cari">
                <div class="input-group-append">
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </div>
            </div>
            </form>
        </div>
    </div> -->

    <div class="row mt-2">
        <div class="col-md-12">
            <h3 class="text-center text-light">DAFTAR GAJIAN</h3>
            <?php if( empty($gaji) ) : ?>
                <div class="alert alert-danger">
                    Data Pegawai tidak ditemukan...
                    atau bisa jadi dia adalah Another
                </div>
            <?php endif; ?>
            <table border="1" class="table table-hover table-light mt-4">
            <thead class="thead-dark">
                <tr align="center">
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>NIP</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
                <tbody>
                <?php foreach ( $gaji as $gaj ) : ?>
                    <tr align="center">
                        <td><?= $gaj['ID']; ?></td>
                        <td><?= $gaj['NAMA']; ?></td>
                        <td><?= $gaj['NIP']; ?></td>
                        <td><a href="<?= base_url(); ?>cGaji/detailgj/<?= $gaj['ID']; ?>" class="btn btn-outline-primary bg-dark float-right">Detail</a></td>
                        <td><a href="<?= base_url(); ?>cGaji/tambahgj/<?= $gaj['ID']; ?>" class="btn btn-outline-info bg-dark float-left"> Gaji</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>   
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>

