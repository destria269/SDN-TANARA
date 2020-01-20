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
      
      <td align="center" style="width: 800px;"><font style="font-size: 18px"><br><b>LAPORAN BELAJAR SISWA SEKOLAH DASAR</b></font>
      <font align="center" style="width: 800px;" style="font-size: 18px"><br><b>TAHUN AJARAN 2019/2020</b></font>
       <br><br>
    </tr>
  </table>
  </center>
<hr>
    <br><br>
        <table class="table">
          
            <tr>
              <th align="left">Nama Peserta Didik : Nova</th>
            </tr>
            <tr>
              <th align="left">NIS                : 1920.01.002</th>
            </tr>
            <tr>
              <th align="left">Nama Sekolah : SDN TANARA </th>
            </tr>
            <tr>
              <th align="left">Alamat Sekolah : KP. Cibolang </th>
            </tr>
            <tr>
              <th align="left">Kelas : SATU A</th>
            </tr>
            <tr>
              <th align="left">Semester : </th>
            </tr>
          
        </table>

        <table class="table table-striped table-bordered" border="1" cellspacing="0">
          <thead>
            <tr>
                    <th rowspan="2" style="width: 50px;"><font style="font-size: 14px" rowspan="2"><center>No</center></th>
                    <th rowspan="2" style="width: 400px;"><font style="font-size: 14px"><center>Mata Pelajaran</center></th>
                    <th colspan="2" style="width: 100px;"><font style="font-size: 14px"><center>Pengetahuan</center></th>
                    <th colspan="2" style="width: 150px;"><font style="font-size: 14px"><center>Keterampilan</center></th>
            </tr>
            <tr>
                    
                    <th style="width: 100px;"><font style="font-size: 14px"><center>Nilai</center></th>
                    <th style="width: 150px;"><font style="font-size: 14px"><center>Predikat</center></th>

                    <th style="width: 100px;"><font style="font-size: 14px"><center>Nilai</center></th>
                    <th style="width: 150px;"><font style="font-size: 14px"><center>Predikat</center></th>
            </tr>
          </thead>
          <tbody>
                

                    <?php
                    include '../koneksi.php';
                    $data=mysqli_query($koneksi,"SELECT * from nilai 
                        INNER JOIN mapel ON nilai.kd_mapel = mapel.kd_mapel");
                    $i=0;
                    while($d=mysqli_fetch_array($data)){ 
                        $i++;
                    ?>
                    <tr>
                        <td align="center"><?php echo $i?></td>
                        <td align="center"><?php echo $d['nama_mapel']?></td>
                        <td align="center"><?php echo $d['n_akhir']?></td>
                        <td align="center"><?php echo $d['ket']?></td>
                        <td align="center"><?php echo $d['n_akhir']?></td>
                        <td align="center"><?php echo $d['ket']?></td>
                        
                    </tr>
<?php } ?> 
            </tbody>
               </table>


       
        
        
      
  

<p align="cen">
  <script>
    window.print();
  </script>
<?php  ?>
</body>
</html>
