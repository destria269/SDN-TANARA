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
      
      <td align="center" style="width: 800px;"><font style="font-size: 20px"><br><b>JADWAL MEGAJAR</b></font>
      <font align="center" style="width: 800px;" style="font-size: 18px"><br><b>TAHUN AJARAN 2019/2020</b></font>
       <br><br>
    </tr>
  </table>
  </center>
<hr>
    <br><br>
      <table>
           <tr>
                    <td>Nama Guru </td>
                    <td> :
                        <?php 
                        include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM jadwal
                        INNER JOIN guru ON jadwal.nip = guru.nip
                              ");
                            while($d = mysqli_fetch_array($data)) {
                                
                        ?>
                        <td align="center"><?php echo $d['nama_guru']?></td></td>
                    </td>
                </tr>
                <?php } ?>
        </table>
        <table class="table table-striped table-bordered" border="1" cellspacing="0">
          <thead>
            <tr>
                    <th style="width: 50px;"><font style="font-size: 14px"><center>No</center></th>
                    <th style="width: 400px;"><font style="font-size: 14px"><center>Mata Pelajaran</center></th>
                    <th style="width: 100px;"><font style="font-size: 14px"><center>Hari</center></th>
                    <th style="width: 150px;"><font style="font-size: 14px"><center>Jam</center></th>
                    <th style="width: 100px;"><font style="font-size: 14px"><center>Kelas</center></th>
            </tr>
          </thead>
          <tbody>
                

                   <?php
                    include '../koneksi.php';
                    $data=mysqli_query($koneksi,"SELECT * from jadwal 
                        INNER JOIN mapel ON jadwal.kd_mapel = mapel.kd_mapel
                        INNER JOIN ruang ON jadwal.kd_ruang = ruang.kd_ruang");
                    $i=0;
                    while($d=mysqli_fetch_array($data)){ 
                        $i++;
                    ?>
                    <tr>
                        <td align="center"><?php echo $i?></td>
                        <td align="center"><?php echo $d['nama_mapel']?></td>
                        <td align="center"><?php echo $d['hari']?></td>
                        <td align="center"><?php echo $d['jam']?></td>
                        <td align="center"><?php echo $d['nama_ruang']?></td>
                        
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
