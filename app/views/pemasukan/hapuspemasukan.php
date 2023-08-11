<?php include ('config.php');?>
<?php
$koneksi->query("DELETE  FROM kas_masjid WHERE id_km ='$_GET[id_pemasukan]'");
echo "<script>alert('Data berhasil dihapus')</script>";
echo "<script>location = 'tampilpemasukan.php';</script>";
?>