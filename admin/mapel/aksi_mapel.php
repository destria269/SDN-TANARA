<?php
include'../../koneksi.php';

if (isset($_POST['tambah'])) {
$kd_mapel=$_POST['kd_mapel'];
$nama_mapel=$_POST['nama_mapel'];
$kkm=$_POST['kkm'];

mysqli_query($koneksi,"insert into mapel values('$kd_mapel','$nama_mapel','$kkm')");


echo"<script> alert('mata pelajaran berhasil disimpan');
		window.location.href='../daftar_mapel.php';
	</script>";


}

?>

