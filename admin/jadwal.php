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
     <!-- Morris Chart Styles-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                        <a href="daftar_jadwal.php" class="active-menu"><i class="fa fa-table"></i>Jadwal Pelajaran</a>
                    </li>
                    <li>
                        <a href="daftar_siswa.php"><i class="fa fa-edit"></i>Daftar Kelas Siswa</a>
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
                             Jadwal Mengajar<small></small>
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="index.php">Beranda</a></li>
                      <li><a href="#">Jadwal</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>

         <div id="page-inner"> 
                 
                
                <div class="row">

                  <div class="col-md-12">
                <div class="panel panel-default">
                        
                </div>
            </div>                      
                </div>  

        <div class="row">
        <form action="jadwal/aksi_jadwal.php" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="xZ2VSYLghz35eFPpNTTE3urshSALQ7GX4EWtDh4l">
            <div class="box-header with-border">
                <h3 class="box-title" >Tambah Jadwal Mengajar</h3>
            </div><br><br>
            
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    Nama Guru
                </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="nip">
                            <option value="">--- Guru --</option>
                             <?php
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM guru");
                            while($d = mysqli_fetch_array($data)) {
                                    echo '<option value="'.$d['nip'].'">'.$d['nama_guru'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    Mata Pelajaran
                </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="kd_mapel">
                            <option value="">--- Pilih Mata Pelajaran --</option>
                            <?php
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM mapel");
                            while($d = mysqli_fetch_array($data)) {
                                    echo '<option value="'.$d['kd_mapel'].'">'.$d['nama_mapel'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    Hari
                </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="hari" required>
                            <option value="Senin" >Senin</option>
                            <option value="Selasa" >Selasa</option>
                            <option value="Rabu" >Rabu</option>
                            <option value="Kamis" >Kamis</option>
                            <option value="Jum'at" >Jum'at</option>
                            <option value="Sabtu" >Sabtu</option>
                        </select>
                    </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    Jam Pelajaran
                </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="jam" required>
                            <option value="07.35-08.10" >07.35 - 08.10</option>
                            <option value="08.10 - 08.45" >08.10 - 08.45</option>
                            <option value="08.45 - 09.15" >08.45 - 09.15</option>
                            <option value="09.50 - 10.25" >09.50 - 10.25</option>
                            <option value="10.25 - 11.00" >10.25 - 11.00</option>
                            <option value="11.00 - 11.35" >11.00 - 11.35</option>
                            <option value="11.35 - 12.10" >11.35 - 12.10</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    Kelas
                </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="kd_ruang">
                            <option value="">--- Pilih Kelas --</option>
                            <?php
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM ruang");
                            while($d = mysqli_fetch_array($data)) {
                                    echo '<option value="'.$d['kd_ruang'].'">'.$d['nama_ruang'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
            </div>
            

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="tambah" class="btn btn-danger  btn-sm">Simpan</button>
                </div>
                <div class="col-sm-1">
                    <a href="daftar_jadwal.php" class="btn btn-info btn-sm">Kembali</a>               
                </div>
            </div>
         </form>
    </div>
            <div id="page-inner"> 
             
                 <footer></footer>
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
     <!-- Morris Chart Js -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
