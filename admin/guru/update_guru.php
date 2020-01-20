<?php
include'../../koneksi.php';

$nip=$_POST['nip'];
$nama_guru=$_POST['nama_guru'];
$tempatlhr=$_POST['tempatlhr'];
$tgllahir=$_POST['tgllahir'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$agama=$_POST['agama'];
$nope=$_POST['nope'];
$mapel=$_POST['mapel'];

mysqli_query($koneksi,"update guru set nama_guru='$nama_guru',tempatlhr='$tempatlhr',tgllahir='$tgllahir',alamat='$alamat',gender='$gender',agama='$agama',nope='$nope',mapel='$mapel' where nip='$nip'");

echo"
<script> alert('data berhasil di ubah');
window.location.href='../daftar_guru.php';
</script>";
?>

