<?php
include'../../koneksi.php';

if (isset($_POST['tambah'])) {
$id_daftar=$_POST['id_daftar'];
$id_thnajar=$_POST['id_thnajar'];
$kd_kelas=$_POST['kd_kelas'];
$nis=$_POST['nis'];

mysqli_query($koneksi,"insert into daftarsiswa values('$id_daftar','$id_thnajar','$kd_kelas','$nis'");

header("location:../daftar_siswa.php");

}
?>

