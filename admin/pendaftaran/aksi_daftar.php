<?php
include'../../koneksi.php';

if (isset($_POST['tambah'])) {
$nis=$_POST['nis'];
$nama_siswa=$_POST['nama_siswa'];
$tempatlhr=$_POST['tempatlhr'];
$tgllahir=$_POST['tgllahir'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$agama=$_POST['agama'];
$kelas=$_POST['kelas'];
$status=$_POST['status'];
$anakke=$_POST['anakke'];
$namaayah=$_POST['namaayah'];
$namaibu=$_POST['namaibu'];
$alamatortu=$_POST['alamatortu'];
$telportu=$_POST['telportu'];
$pekerjaanayah=$_POST['pekerjaanayah'];
$pekerjaanibu=$_POST['pekerjaanibu'];
$namawali=$_POST['namawali'];
$alamatwali=$_POST['alamatwali'];
$telpwali=$_POST['telpwali'];
$pekerjaanwali=$_POST['pekerjaanwali'];



mysqli_query($koneksi,"insert into siswa values('$nis','$nama_siswa','$tempatlhr','$tgllahir','$alamat','$gender','$agama','$kelas','$status','$anakke','$namaayah','$namaibu','$alamatortu','$telportu','$pekerjaanayah','$pekerjaanibu','$namawali','$alamatwali','$telpwali','$pekerjaanwali')");


echo"<script> alert('pendaftaran siswa berhasil disimpan');
		window.location.href='../daftar_pend.php';
	</script>";
}

?>
