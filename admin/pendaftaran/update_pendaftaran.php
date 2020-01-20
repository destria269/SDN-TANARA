<?php
include'../../koneksi.php';

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

mysqli_query($koneksi,"update siswa set nama_siswa='$nama_siswa',tempatlhr='$tempatlhr',tgllahir='$tgllahir',alamat='$alamat',gender='$gender',agama='$agama',kelas='$kelas',status='$status',anakke='$anakke',namaayah='$namaayah',namaibu='$namaibu',alamatortu='$alamatortu',telportu='$telportu',pekerjaanayah='$pekerjaanayah',pekerjaanibu='$pekerjaanibu',namawali='$namawali',alamatwali='$alamatwali',telpwali='$telpwali',pekerjaanwali='$pekerjaanwali' where nis='$nis'");

echo"
<script> alert('data berhasil di ubah');
window.location.href='../daftar_pend.php';
</script>";
?>

