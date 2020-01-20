
<!DOCTYPE html>
<html>
<head>
	<title>SD NEGERI TANARA</title>
</head>
<body>

	<center>
     <style type="text/css">
  .tabel2 {
    border-collapse: collapse;
  }
  .tabel2 th, .tabel2 td {
      padding: 5px 5px;
      border: 1px solid #000;
  }
  .td{
    text-align: center;
  }
  </style>
<table>
    <tr>
      <th rowspan="4"><img src="images.jpg" style="width:120px;height:100px" /></th>
      <td align="center" style="width: 800px;"><font style="font-size: 14px"><br><b>PEMERINTAH KABUPATEN BANDUNG</b></font>
      <font align="center" style="width: 800px;" style="font-size: 18px"><br><b>DINAS PENDIDIKAN</b></font>
        <br>SEKOLAH DASAR NEGERI TANARA
        <br>Alamat : Kp. Cibolang Desa Banjarsari Kec. Pangalengan - Bandung 40378</td>
    </tr>
  </table>
	</center>
<hr>
	  <h3 align="center">KWINTANSI PEMBAYARAN SERAGAM MURID</h3>
<?php 

        include '../../koneksi.php';
        
        $nis=$_GET['nis'];
        $data = mysqli_query($koneksi,"select * from siswa where nis='$nis'");
         $i=0;
        while($d=mysqli_fetch_array($data)){
            $i++;
        ?>
    
    <table class="table"  align="center">
      <tr>
        <td>Nomor </td>
        <td> : </td>
        <td><?php echo $i?></td>
      </tr>
        
		  <tr>
        <td>Nama Siswa  </td>
        <td> : </td>
        <td> <?php echo $d['nama_siswa'];?></td>
        </tr>
		  

      <tr>
        <td>Jumlah </td>
        <td> : </td>
        <td>Tiga Ratus Enam Puluh Ribu Rupiah (Rp. 360.000,00)</td>
      </tr>

<table>
    <tr>
      <td  align= "center" style="width: 1500px;"><font style="font-size: 14px"><br><b>Untuk pembayaran seragam murid dalam rangka pendaftaran murid baru di Sekolah Dasar Negeri Tanara</b></font>
    </tr>
    <tr>
      <td  align= "right" style="width: 1500px;"><font style="font-size: 14px"><br><b>Pangalengan, 
        <?php
         $tgl=date('d-M-Y');
         echo $tgl;
        ?></b></font>
    </tr>
    <tr>
      <td  align= "right" style="width: 1500px;"><font style="font-size: 14px"><br><b>Operator </b></font>
    </tr>
    <tr>
      <td  align= "right" style="width: 1500px;"><font style="font-size: 14px"><br><b>Maryani </b></font>
    </tr>
  </table>
       
        
        
      
  

<p align="cen">
	<script>
		window.print();
	</script>
<?php } ?>
</body>
</html>