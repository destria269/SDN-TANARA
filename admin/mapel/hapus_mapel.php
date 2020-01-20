<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$kd_mapel = $_GET['kd_mapel'];


// menghapus data dari database
mysqli_query($koneksi,"delete from mapel where kd_mapel='$kd_mapel'");

// mengalihkan halaman kembali ke index.php
header("location:../daftar_mapel.php");

?>