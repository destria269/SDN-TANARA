 <?php
    session_start();
    if ((isset($_SESSION['level'])) and $_SESSION['level'] == 'admin') {

?>
<!DOCTYPE html>

<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->


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

    <link rel="stylesheet" href="../assets/js/Lightweight-Chart/cssCharts.css"> 
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
                        <a href="daftar_walikelas.php" class="active-menu"><i class="fa fa-edit"></i>Bagi Kelas Siswa Baru</a>
                    </li>  
                    <li>
                        <a href="daftar_jadwal.php"><i class="fa fa-table"></i>Jadwal Pelajaran</a>
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
                Daftar Wali Kelas <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="">Wali Kelas</a></li>
                <li class="active">Data</li>
            </ol>                       
        </div>

<!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        
    </div>

    <!-- end: TEXT FIELDS PANEL -->

         <div class="footer clearfix">
            <div id="page-inner">


    <div class="box box-success">
        <form action="walikelas/aksi_walas.php" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="xZ2VSYLghz35eFPpNTTE3urshSALQ7GX4EWtDh4l">
            <div class="box-header with-border">
                <h3 class="box-title">TAMBAH TAHUN AJAR</h3>
            </div><br><br>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    NAMA TAHUN AJAR
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="thnajar" placeholder="MASUKAN TAHUN AJAR" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    SEMESTER
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="hari" required>
                            <option value="GANJIL" >GANJIL</option>
                            <option value="GENAP" >GENAP</option>
                           
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="tambah" class="btn btn-danger  btn-sm">Daftar</button>
                </div>
                <div class="col-sm-1">
                    <a href="daftar_walikelas.php" class="btn btn-info btn-sm">Kembali</a>               
                </div>
            </div>
         </form>
    </div>
                <footer>
                     
                </footer>
            </div>
            <div class="footer-items">
                    <span class="go-top"><i class="clip-chevron-up"></i></span>
            </div>
        </div>

    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
     
    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
    
    
    <script src="../assets/js/easypiechart.js"></script>
    <script src="../assets/js/easypiechart-data.js"></script>
    
     <script src="../assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>

<?php } else {
    header("location:../login.php?pesan=belum_login");
} ?>