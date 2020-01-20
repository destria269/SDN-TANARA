<?php
include'../../koneksi.php';

if (isset($_POST['tambah'])) {
$thnajar=$_POST['thnajar'];
$smt=$_POST['smt'];


mysqli_query($koneksi,"INSERT into thnajar  (thnajar, smt) values ('$thnajar','$smt')");


echo"<script> alert('Data Tahun Ajar berhasil disimpan');
		window.location.href='../daftar_walikelas.php';
	</script>";


}

?>

