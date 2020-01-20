<?php
	include'../koneksi.php';

	$act=$_GET['act'];


	if ( $act=='tambah'){
		$id_nilai=$_POST['id_nilai'];
		$kd_mapel=$_POST['kd_mapel'];
		$nis=$_POST['nis'];
		$kd_ruang=$_POST['kd_ruang'];

		$n_akhir = count($id_nilai_input);

		for($i=0; $i < $n_akhir; $i++)
	{
		$multi_id_kelas_siswa=$id_kelas_siswa[$i];
		$multi_id_nilai_siswa=$id_nilai_input[$i];
		$multi_nilai=$_POST[$sik][$i];
			$bijine= !empty($multi_nilai) ? "'$multi_nilai'" : "NULL";

		
		$queryupdate =  mysql_query("UPDATE nilai set $sik=$bijine where id_nilai='$multi_id_nilai_siswa' ") ;


	}
	
	?>

	<script language="JavaScript">alert('Data Nilai Berhasil Di Input')</script>
	<script>
		window.location.href = 'guru.nilai.tambah';
	</script>		
	<?php	
} 

		$n_uh=$_POST['n_uh'];
		$n_uts=$_POST['n_uts'];
		$n_uas=$_POST['n_uas'];
		$n_akhir=$_POST['n_akhir'];
		$ket=$_POST['ket'];
		$praktek=$_POST['praktek'];
		$keterangan=$_POST['keterangan'];

		$n_akhir = count($id_nilai_input);

		mysqli_query($koneksi,"insert into nilai values('$id_nilai','$kd_mapel','$nis','$kd_ruang','$n_uh','$n_uts','$n_uas','$n_akhir','$ket','$praktek','$keterangan')");


		echo"<script> alert('profil guru berhasil disimpan');
				window.location.href='daftar_nilai.php';
			</script>";
	}
?>

