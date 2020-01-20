<?php
include'../../koneksi.php';

$id_daftar=$_POST['id_daftar'];
$id_thnajar=$_POST['id_thnajar'];
$kd_kelas=$_POST['kd_kelas'];
$nis=$_POST['nis'];

mysqli_query($koneksi,"update daftarsiswa set id_thnajar='$id_thnajar',kd_kelas='$kd_kelas',nis='$nis' where id_daftar='$id_daftar'");

echo"
<script> alert('data berhasil di ubah');
window.location.href='../daftar_siswa.php';
</script>";
?>

