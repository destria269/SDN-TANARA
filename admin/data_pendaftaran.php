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
                        <a href="data_pendaftaran.php" class="active-menu"><i class="fa fa-desktop"></i>Pendaftaran Siswa</a>
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
                        <a href="daftar_jadwal.php"><i class="fa fa-table"></i>Jadwal Pelajaran</a>
                    </li>
                    <li>
                        <a href="daftar_siswa.php"><i class="fa fa-edit"></i>Daftar Kelas Siswa</a>
                    </li>
                    <li>
                        <a href="daftar_walikelas.php"><i class="fa fa-edit"></i>Wali Kelas</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                           Pendaftaran Siswa <small>Selamat Datang</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Beranda</a></li>
					  <li><a href="#">Pendaftaran Siswa</a></li>
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
                <a class="btn btn-success pull-right" href="pendaftaran.php">Tambah Data</a>
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
                <table class="table" id="datatables">
                    <thead align="center">
                        <tr >
                            <th><center>NO</center></th>
                            <th><center>NIS</center></th>
                            <th><center>NAMA</center></th>
                            <th><center>TEMPAT LAHIR</center></th>
                            <th><center>TANGGAL LAHIR</center></th>
                            <th><center>ALAMAT</center></th>
                            <th><center>JENIS KELAMIN</center></th>
                            <th><center>AGAMA</center></th>
                            <th><center>AKSI</center></th>
                        </tr>
                    </thead>
                    <tbody>
                
                    <?php
                    include '../koneksi.php';
                    $batas = 5;
                    $hal = @$_GET['hal'];
                    if(empty($hal)) {
                        $posisi = 0;
                        $hal = 1;
                    } else {
                        $posisi = ($hal - 1) * $batas;
                    }
                    $i=1;
                    if($_SERVER['REQUEST_METHOD'] == "POST") {
                        $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
                        if($pencarian != ''){
                            $sql = "SELECT * FROM siswa WHERE nama_siswa LIKE '%$pencarian%'";
                            $query = $sql;
                            $queryJml = $sql; 
                        } else {
                            $query = "SELECT * FROM siswa LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM siswa";
                            $i = $posisi + 1; 
                        }
                    } else {
                        $query = "SELECT * FROM siswa LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM siswa";
                        $i = $posisi + 1; 
                    } 

                    include '../koneksi.php';
                    $data=mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
                    if(mysqli_num_rows($data) > 0) { 
                        while($d=mysqli_fetch_array($data)) { ?>
                    <tr>
                        <td align="center"><?php echo $i++?></td>
                        <td align="center"><?php echo $d['nis']?></td>
                        <td align="center"><?php echo $d['nama_siswa']?></td>
                        <td align="center"><?php echo $d['tempatlhr']?></td>
                        <td align="center"><?php echo $d['tgllahir']?></td>
                        <td align="center" width="200"><?php echo $d['alamat']?></td>
                        <td align="center"><?php echo $d['gender']?></td>
                        <td align="center" ><?php echo $d['agama']?></td>
                        <td align="center" width="100">
                            <a class="btn btn-warning btn-xs" href="tampil_pendaftaran.php?nis=<?php echo $d['nis'];?>"><i class="glyphicon glyphicon-edit"></i></a>

                            <a class="btn btn-warning btn-xs" name="hapus" href="pendaftaran/aksi_hapus.php?nis=<?php echo $d['nis'];?>"><i class="glyphicon glyphicon-trash"></i></a>
                        
                            <a href="pendaftaran/cetak_kwitansi.php?nis=<?php echo $d['nis'];?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></i></a>
                        </td>
                        
                    </tr>
    <?php 
    } 
} else {
    echo "<tr><td colspan=\"4\" align=\"center\">Data tidak Ditemukan</td></tr>";
}
?> 
            </tbody>
        </table>
    </div>
    <?php
    if($_POST['pencarian'] == '') { 
    ?>
        <div style="float:left;">
            <?php
            $jml = mysqli_num_rows(mysql_query($conn, $queryJml));
            echo "Jumlah Data : <b>$jml</b>";
            ?>
        </div>
        <div style="float:right;">
            <ul class="pagination pagination-sm" style="margin:0">
                <?php
                $jml_hal = ceil($jml_hal / $batas);
                for ($x=1; $x <= $jml_hal; $x++) {
                    if($x != $hal) {
                        echo "<li><a href=\"?hal=$x\">$x</a></li";
                    } else {
                        echo "<li><class=\"active\">$x</a></li";
                    }
                }
                ?>
            </ul>
        </div>
        <?php
    } else {
        echo "<div style=\"float:left\">";
        $jml = mysqli_num_rows(mysql_query($koneksi, $queryJml));
        echo "Data Hasil Pencarian : <b>$jml</b>";
        echo "</div>";
    }
    ?>
</div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                </label>
            </div>
         </form>
    </div>
</section>
  </div>
  <!-- /.content-wrapper

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
