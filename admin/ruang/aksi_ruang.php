<?php
include'../../koneksi.php';

if (isset($_POST['tambah'])) {
$kd_ruang=$_POST['kd_ruang'];
$nama_ruang=$_POST['nama_ruang'];
$nip=trim(mysqli_real_escape_string($koneksi, $_POST['nip']));
$thnajar=$_POST['thnajar'];

mysqli_query($koneksi,"INSERT into ruang (kd_ruang, nama_ruang, nip, thnajar) values('$kd_ruang','$nama_ruang','$nip','$thnajar')");


echo"<script> alert('ruangan berhasil disimpan');
		window.location.href='../daftar_ruang.php';
	</script>";

}
?>

