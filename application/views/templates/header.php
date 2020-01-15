<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
        .img-fluid {
            max-height: 150px;
            max-width: 150px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://lsptrainerindonesia.id/wp-content/uploads/2013/06/250117060345-polban.png">
    <title><?= $judul ?></title>
</head>


<nav class="navbar navbar-transparent navbar-padded navbar-expand-sm p-2">
    <!--bg-dark-->
    <a class="navbar-brand" href="#">
        <h4 class="text-uppercase my-0 text-info"><img src="http://lsptrainerindonesia.id/wp-content/uploads/2013/06/250117060345-polban.png" width="70px">POLBAN</h4>
    </a>

    <button class="navbar-toggler navbar-toggler-right d-md-none" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    </div>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Pegawai..." name="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active text-info" href="<?= base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="<?= base_url(); ?>">|</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-info" href="<?= base_url(); ?>cPegawai">Pegawai</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="<?= base_url(); ?>">|</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-info" href="<?= base_url(); ?>cGaji">Penggajian</a>
            </li>
        </ul>
    </div>
    <!--/.nav-collapse -->
</nav>