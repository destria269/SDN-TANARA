<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$id_daftar = $_GET['id_daftar'];


// menghapus data dari database
mysqli_query($koneksi,"delete from daftarsiswa where id_daftar='$id_daftar'");

// mengalihkan halaman kembali ke index.php
header("location:../daftar_siswa.php");

?>