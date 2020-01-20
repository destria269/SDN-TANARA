<?php
include'../../koneksi.php';

$id=$_POST['id'];
$jenis=$_POST['jenis'];
$qty=$_POST['qty'];

mysqli_query($koneksi,"update syarat set jenis='$jenis',qty='$qty' where id='$id'");

echo"
	<script> alert('data berhasil di ubah');
		window.location.href='../daftar_syarat.php';
	</script>";
?>

