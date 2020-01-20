<?php
include'../../koneksi.php';

if (isset($_POST['tambah'])) {
$kd_ruang = $_POST['kd_ruang'];
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$gender = $_POST['gender'];

mysqli_query($koneksi, "INSERT INTO daftarsiswa (kd_ruang, nis, nama_siswa, gender) VALUES ('$kd_ruang', '$nis', '$nama_siswa', '$gender')");


echo"<script> alert('mata pelajaran berhasil disimpan');
		window.location.href='../data_daftarsiswa.php';
	</script>";


}

?>

