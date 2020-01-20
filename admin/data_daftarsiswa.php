<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>SD Negeri Tanara</title>
    <!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong>SDN TANARA</strong></a>
                <div id="sideNav" href="">
                  <i class="fa fa-bars icon"></i> 
              </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="daftar_pend.php"><i class="fa fa-desktop"></i>Pendaftaran Siswa</a>
                    </li>
                     
                    <li>
                        <a href="daftar_guru.php"><i class="fa fa-sitemap"></i>Data Guru</a>  
                    </li>
                    <li>
                        <a href="daftar_mapel.php"><i class="fa fa-sitemap"></i>Mata Pelajaran</a>  
                    </li> 
                     <li>
                        <a href="daftar_ruang.php"><i class="fa fa-sitemap"></i>Kelas</a>  
                    </li>
                    <li>
                        <a href="daftar_walikelas.php"><i class="fa fa-edit"></i>Bagi Kelas Siswa Baru</a>
                    </li>  
                    <li>
                        <a href="daftar_jadwal.php" ><i class="fa fa-table"></i>Jadwal Pelajaran</a>
                    </li>
                    <li>
                        <a href="daftar_siswa.php" class="active-menu"><i class="fa fa-edit"></i>Daftar Kelas Siswa</a>
                    </li>
                    <li>
                        <a href="daftar_kenaikan.php"><i class="fa fa-edit"></i>Kenaikan Kelas</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                           Daftar Kelas <small>Selamat Datang</small>
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="#">Daftar Ruangan Kelas</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
            <div class="panel-tools">
                <form class="form-inline" action="" method="post">
                    <div class="form-group">
                        <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search " aria-hidden="true"></span></button>
                    </div>
                </form>
                <a href="" class="btn btn-default pull-right"><i class="glyphicon glyphicon-refresh"></i></a>
                <a class="btn btn-success pull-right" href="tambah_siswa.php">Tambah Data</a>
            </div>
        </div>
            <div id="page-inner"> 
                 
                
                <div class="row">

                  <div class="col-md-12">
                <div class="panel panel-default">
                        
                </div>
            </div>                      
                </div>                              

<!-- End Feedback -->
    <div class="box box-success">
        <form action="aksi_daftar.php" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="xZ2VSYLghz35eFPpNTTE3urshSALQ7GX4EWtDh4l">
            <div class="box-header with-border">
            <table class="table table-bordered"><br>
                <tr>
                    <th>NAMA KELAS</center></th>
                    <td> :
                        <?php 
                        include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM ruang");
                            while($d = mysqli_fetch_array($data)) {
                                
                        ?>
                       <?php echo $d['nama_ruang']?>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td>TAHUN AJARAN </td>
                    <td> :
                        <?php 
                        include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM ruang");
                            while($d = mysqli_fetch_array($data)) {
                                
                        ?>
                       <?php echo $d['thnajar']?>
                    </td>
                </tr>
                <?php } ?>
            </table>

               <table class="table" id="datatables"><thead>
                <tr>
                        <th><center>NO</center></th>
                        <th><center>NIS</center></th>
                        <th><center>NAMA SISWA</center></th>
                        <th><center>JENIS KELAMIN</center></th>
                        <th><center>AKSI</center></th>
                </tr></thead>
            <tbody>
                
                    <?php
                    include '../koneksi.php';
                    $data=mysqli_query($koneksi,"SELECT * from siswa");
                    $i=0;
                    while($d=mysqli_fetch_array($data)){ 
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $d['nis']?></td>
                        <td><?php echo $d['nama_siswa']?></td>
                        <td><?php echo $d['gender']?></td>
                        <td align="center">
                            <a class="btn btn-info btn-sm" href="tampil_ruang.php?kd_ruang=<?php echo $d['kd_ruang'];?>">EDIT</a>
                        </td>
                    </tr>
<?php } ?> 
            </tbody>
               </table>
            </div>
             <div class="col-sm-4">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">

                </label>
                    <a class="btn btn-danger btn-sm" href="daftarsiswa/cetak_siswa.php?nis=<?php echo $d['nis'];?>">CETAK DAFTAR SISWA</a>              
                </div>
         </form>
    </div>
</section>
  </div>
  <!-- /.content-wrapper -->

                    <footer>
                    </footer>
                </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>
 
</body>
</html>
