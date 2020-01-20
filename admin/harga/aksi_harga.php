<?php
include'../../koneksi.php';

if (isset($_POST['tambah'])) {
$id=$_POST['id'];
$jenis=$_POST['jenis'];
$qty=$_POST['qty'];

mysqli_query($koneksi,"insert into mapel values('$id','$jenis','$qty')");


echo"<script> alert('berhasil disimpan');
		window.location.href='../daftar_syarat.php';
	</script>";


}

?>

