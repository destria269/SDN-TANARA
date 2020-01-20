<?php
include'../../koneksi.php';

$id_walikelas=$_POST['id_walikelas'];
$nip=$_POST['nip'];
$id_thnajar=$_POST['id_thnajar'];
$kd_ruang=$_POST['kd_ruang'];

mysqli_query($koneksi,"update walikelas set nip='$nip', id_thnajar='$id_thnajar', kd_ruang='$kd_ruang' where id_walikelas='$id_walikelas'");

echo"
<script> alert('data berhasil di ubah');
window.location.href='../daftar_walikelas.php';
</script>";
?>

