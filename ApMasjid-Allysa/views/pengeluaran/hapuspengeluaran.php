<?php include ('config.php');?>
<?php
$koneksi->query("DELETE FROM pengkas WHERE id_pengeluaran = '$_GET[id_pengeluaran]'");
echo "<script>alert('Data berhasil dihapus')</script>";
echo "<script>location='tampilpengeluaran.php';</script>";
?>