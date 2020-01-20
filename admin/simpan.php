if ($simpan) 
	echo "<script type='text/javascript'>
		alert('Data siswa berhasil disimpan') </script>";
	echo "<script type='text/javascript'>
		alert('Data siswa gagal disimpan') </script>";

header("location:../daftar_guru.php");
