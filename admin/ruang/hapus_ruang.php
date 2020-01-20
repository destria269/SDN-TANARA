<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$kd_ruang = $_GET['kd_ruang'];


// menghapus data dari database
mysqli_query($koneksi,"delete from ruang where kd_ruang='$kd_ruang'");

// mengalihkan halaman kembali ke index.php
header("location:../daftar_ruang.php");

?>