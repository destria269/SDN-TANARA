<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$id_walikelas = $_GET['id_walikelas'];


// menghapus data dari database
mysqli_query($koneksi,"delete from walikelas where id_walikelas='$id_walikelas'");

// mengalihkan halaman kembali ke index.php
header("location:../daftar_walikelas.php");

?>