<?php
include'../../koneksi.php';

if (isset($_POST['tambah'])) {
	$nip = trim(mysqli_real_escape_string($koneksi, $_POST['nip']));
	$kd_mapel = trim(mysqli_real_escape_string($koneksi, $_POST['kd_mapel']));
	$hari = trim(mysqli_real_escape_string($koneksi, $_POST['hari']));
	$jam = trim(mysqli_real_escape_string($koneksi, $_POST['jam']));
	$kd_ruang = trim(mysqli_real_escape_string($koneksi, $_POST['kd_ruang']));

mysqli_query($koneksi,"INSERT INTO jadwal (nip, kd_mapel, hari, jam, kd_ruang) VALUES ('$nip', '$kd_mapel', '$hari', '$jam', '$kd_ruang')");

header("location:../daftar_jadwal.php");

}
?>

