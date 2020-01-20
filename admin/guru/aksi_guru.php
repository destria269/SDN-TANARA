<?php
	include'../../koneksi.php';

	if (isset($_POST['tambah'])) {
		$nip=$_POST['nip'];
		$nama_guru=$_POST['nama_guru'];
		$tempatlhr=$_POST['tempatlhr'];
		$tgllahir=$_POST['tgllahir'];
		$alamat=$_POST['alamat'];
		$gender=$_POST['gender'];
		$agama=$_POST['agama'];
		$nope=$_POST['nope'];
		$mapel=$_POST['mapel'];


		mysqli_query($koneksi,"insert into guru values('$nip','$nama_guru','$tempatlhr','$tgllahir','$alamat','$gender','$agama','$nope','$mapel')");


		echo"<script> alert('profil guru berhasil disimpan');
				window.location.href='../daftar_guru.php';
			</script>";
	}
?>

