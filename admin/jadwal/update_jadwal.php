<?php
include'../../koneksi.php';

$id_jadwal=$_POST['id_jadwal'];
$id_thnajar=$_POST['id_thnajar'];
$kd_mapel=$_POST['kd_mapel'];
$nip=$_POST['nip'];
$jam=$_POST['jam'];
$kd_kelas=$_POST['kd_kelas'];
$hari=$_POST['hari'];

mysqli_query($koneksi,"update jadwal set id_thnajar='$id_thnajar',kd_mapel='$kd_mapel',nip='$nip',jam='$jam',kd_kelas='$kd_kelas',hari='$hari' where id_jadwal='$id_jadwal'");

echo"
<script> alert('data berhasil di ubah');
window.location.href='../daftar_jadwal.php';
</script>";
?>

