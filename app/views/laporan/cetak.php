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

    <div class="header text-center justify-content-center">
        <h5 class="text-center">DEWAN KEMAKMURAN MASJID</h2>
        <h2 class="text-center">MASJID JAMI' DARUSSALAM</h2>
        <p style="font-size: 18px;">Laporan Keuangan priode <?= $data['dari']?> - <?=$data['sampai']?> </p>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <br><table class="table table-hover" id="datatables">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Total</th>
                    <th scope="col">Rincian</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Petugas Input</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach ($data['rekap'] as $row):?>
                    <tr>
                        <td class="text-center"><?=$no++?></td>
                        <td><?=$row['tanggal'] ?></td>
                        <td><?=$row['vol_barang'] ?></td>
                        <td>Rp.<?=$row['harga_satuan'] ?>,00</td>
                        <td>Rp.<?=$row['Total'] ?>,00</td>
                        <td><?=$row['uraian'] ?></td>
                        <td><?=$row['nama_kategori'] ?></td>
                        <?php if($row['id_admin']==1):?>
                            <td>Sabila Nafisah Amallia</td>
                        <?php else:?>
                            <td>Andi Almaarif Arrozi</td>
                        <?php endif?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6"></div>
        <div class="col-lg-4 col-md-6"></div>
        <div class="col-lg-4 col-md-6">
            <p class="text-center">Yogyakarta, <span id="dt"></span></p><br>
            <p class="text-center">Bendahara Masjid</p><br><br>
            <p class="text-center">Syamsu Alamsyah</p>
        </div>
    </div>
    <script>
        window.print();
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
        else (a=tw.getTime());
        tw.setTime(a);
        var tahun= tw.getFullYear ();
        var hari= tw.getDay ();
        var bulan= tw.getMonth ();
        var tanggal= tw.getDate ();
        var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
        var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        document.getElementById("dt").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= BASEURL?>/js/jquery-1.10.2.min.js">
    </script>
    <script src="<?= BASEURL?>/js/bootstrap.min.js">
    </script>
    <script src="<?= BASEURL?>/DataTables/datatables.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#datatables').dataTable();
        });
    </script>
</body>

</html>