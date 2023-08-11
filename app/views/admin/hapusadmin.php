<?php include ('config.php');?>
<?php 
$hapus = $koneksi->query("DELETE FROM admin WHERE id_admin='$_GET[id_admin]'");
echo "<script>alert('Data admin berhasil dihapus')</script>";
echo "<script>location='tampiladmin.php';</script>";
?>