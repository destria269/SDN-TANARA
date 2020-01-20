 <?php
    session_start();
    if ((isset($_SESSION['level'])) and $_SESSION['level'] == 'guru') {

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
                        <a href="index.php" class="active-menu"><i class="fa fa-dashboard"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="mengajar.php"><i class="fa fa-dashboard"></i>Jadwal Mengajar</a>
                    </li>
                    <li>
                        <a href="nilai.php"><i class="fa fa-desktop"></i>Laporan Nilai</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Beranda <small>Selamat Datang</small>
            </h1>
			<ol class="breadcrumb">
				<li><a href="index.php">Beranda</a></li>
			</ol> 						
		</div>
            <div id="page-inner">
                 <div  class="header">
                  <h3 class="page-header">Selamat Datang <b>[ Guru dan Wali Kelas ]</b></h3>
                </div>
            <div class="header">
                <h4>Mohon dikelola dengan baik, dengan memanfaatkan menu yang tersedia pada bagian kiri halaman ini.<h4></div>
<!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        
    </div>
    <!-- end: TEXT FIELDS PANEL -->

         <div class="footer clearfix">
            
				<footer>
        			 <br><br><br>
                     <h4><?php
                        $tanggal= mktime(date("m"),date("d"),date("Y"));
                        echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                        date_default_timezone_set('Asia/Jakarta');
                        $jam=date("H:i:s");
                        echo "| Pukul : <b>". $jam." "."</b>";
                        $a = date ("H");
                        if (($a>=6) && ($a<=11)){
                        echo "<b>, Selamat Pagi !!</b>";
                        }
                        else if(($a>11) && ($a<=15))
                        {
                        echo ", Selamat Pagi !!";}
                        else if (($a>15) && ($a<=18)){
                        echo ", Selamat Siang !!";}
                        else { echo ", <b> Selamat Malam </b>";}
                    ?></h4>
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