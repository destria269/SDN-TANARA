 <?php
    session_start();
    if ((isset($_SESSION['level'])) and $_SESSION['level'] == 'walikelas') {

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
                        <a href="mengajar.php" class="active-menu"><i class="fa fa-dashboard"></i>Jadwal Mengajar</a>
                    </li>
                    <li>
                        <a href="nilai.php"><i class="fa fa-desktop"></i>Laporan Nilai</a>
                    </li>
                    <li>
                        <a href="raport.php"><i class="fa fa-sitemap"></i>Cetak Rapor</a>  
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
      
        <div id="page-wrapper">
          <div class="header"> 
            <h1 class="page-header">
                Jadwal mengajar <small>Selamat Datang</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="mengajar.php">Jadwal Mengajar</a></li>
                <li class="active">Data</li>
            </ol>                       
        </div>
        <div class="col-md-12">
            <!-- start: DYNAMIC TABLE PANEL -->
            <table class="table table-bordered"><br>
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
                <tr>
                    <td>SEMESTER </td>
                    <td> :
                        <?php 
                        include '../koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM jadwal");
                            while($d = mysqli_fetch_array($data)) {
                                
                        ?>
                       <?php echo $d['smt']?>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <!-- end: DYNAMIC TABLE PANEL -->
        </div>
<div class="box box-success">
        <form action="aksi_jadwal.php" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="xZ2VSYLghz35eFPpNTTE3urshSALQ7GX4EWtDh4l">
            <div class="box-header with-border">
               <table class="table" id="datatables"><thead>
                <tr>
                    <th><center>No</center></th>
                    <th><center>Nama Guru</center></th>
                    <th><center>Mata Pelajaran</center></th>
                    <th><center>Hari</center></th>
                    <th><center>Jam</center></th>
                    <th><center>Kelas</center></th>
                </tr></thead>
            <tbody>
                

                    <?php
                    include '../koneksi.php';
                    $data=mysqli_query($koneksi,"SELECT * from jadwal 
                        INNER JOIN guru ON jadwal.nip = guru.nip
                        INNER JOIN mapel ON jadwal.kd_mapel = mapel.kd_mapel
                        INNER JOIN ruang ON jadwal.kd_ruang = ruang.kd_ruang");
                    $i=0;
                    while($d=mysqli_fetch_array($data)){ 
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $d['nama_guru']?></td>
                        <td><?php echo $d['nama_mapel']?></td>
                        <td><?php echo $d['hari']?></td>
                        <td><?php echo $d['jam']?></td>
                        <td><?php echo $d['nama_ruang']?></td>
                        
                    </tr>
<?php } ?> 
            </tbody>
               </table>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">

                </label>
                <div class="col-sm-2">
                   <a class="btn btn-danger btn-sm" href="cetak_ngajar.php?id_jadwal=<?php echo $d['id_jadwal'];?>">Cetak Untuk Guru</a> 
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-info btn-sm" href="cetak_jadwal.php?id_jadwal=<?php echo $d['id_jadwal'];?>">Cetak Untuk Siswa</a>               
                </div>
            </div>
         </form>
    </div>
<!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        
    </div>
    <!-- end: TEXT FIELDS PANEL -->

         <div class="footer clearfix">
            <div id="page-inner">
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