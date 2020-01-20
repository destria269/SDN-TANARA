<?php
include'../../koneksi.php';

$kd_ruang=$_POST['kd_ruang'];
$nama_ruang=$_POST['nama_ruang'];
$nip=$_POST['nip'];
$thnajar=$_POST['thnajar'];

mysqli_query($koneksi,"update ruang set nama_ruang='$nama_ruang',nip='$nip',thnajar='$thnajar' where kd_ruang='$kd_ruang'");

echo"
<script> alert('data berhasil di ubah');
window.location.href='../daftar_ruang.php';
</script>";
?>

