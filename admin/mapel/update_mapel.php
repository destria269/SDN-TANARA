<?php
include'../../koneksi.php';

$kd_mapel=$_POST['kd_mapel'];
$nama_mapel=$_POST['nama_mapel'];
$kkm=$_POST['kkm'];

mysqli_query($koneksi,"update mapel set nama_mapel='$nama_mapel',kkm='$kkm' where kd_mapel='$kd_mapel'");

echo"
<script> alert('data berhasil di ubah');
window.location.href='../daftar_mapel.php';
</script>";
?>

