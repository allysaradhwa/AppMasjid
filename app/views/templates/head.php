<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL?>/css/bootstrap.min.css">
    <!-- data tables -->
    <link rel="stylesheet" href="<?= BASEURL?>/DataTables/datatables.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?= BASEURL?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- mycss -->
    <link rel="stylesheet" href="<?= BASEURL?>/css/my.css">

    <title><?= $data['title']?></title>
</head>

<body class="bg-light">
    <div class="row no-gutters">
        <div class="col-md-2 col-sm-2 warna1 pr-3 d-none d-md-block">
            <ul class="nav flex-column pl-3 mt-2">
            <li class="nav-item">
                <h6 class="text-light"><i class="fa fa-home fa-2x mr-2"></i>Aplikasi Pengelolaan</h6><h6 class="text-light text-center">Kas Masjid</h6><hr class="bg-light">
                <a class="nav-link active text-light" href="<?= BASEURL?>/dashboard"><i class="fa fa-tachometer fa-lg mr-2"></i>Dashboard</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <p class="tulisan1 text-light">Kas Masjid</p>
                <a class="nav-link active text-light" href="<?= BASEURL?>/pemasukan"><i class="fa fa-plus fa-lg mr-2"></i>Pemasukan Kas</a><hr class="bg-light">
                <a class="nav-link active text-light" href="<?= BASEURL?>/pengeluaran"><i class="fa fa-minus fa-lg mr-2"></i>Pengeluaran Kas</a><hr class="bg-light">
                <a class="nav-link active text-light" href="<?= BASEURL?>/rekap"><i class="fa fa-server fa-lg mr-2"></i>Rekap kas</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <p class="tulisan1 text-light">Laporan Kas</p>
                <a class="nav-link active text-light" href="<?= BASEURL?>/laporan"><i class="fa fa-window-maximize fa-lg mr-2"></i>Laporan Kas</a><hr class="bg-light">
            </li>
            <li class="nav-item">
                <p class="tulisan1 text-light">Pengaturan</p>
                <a class="nav-link active text-light" href="<?= BASEURL?>/admin"><i class="fa fa-users fa-lg mr-2"></i>Kelola Admin</a><hr class="bg-light mb-2">
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active text-light" href="<?= BASEURL?>/auth/logout"><i class="fa fa-sign-out fa-lg mr-2"></i>Sign Out</a>
            </li>
            </ul>
        </div>

        <!-- Navbar atas -->
        <div class="col-md-10 col-sm-10">
            <div class="container-fluid bg-light bayang">
                <ul class="nav justify-content-end pt-2">
                <li class="nav-item pr-3">
                    <h6 class="text-dark">Selamat Datang Admin <i class="fa fa-user fa-2x text-dark ml-2"></i></h6>
                </li>
                </ul>
            </div>