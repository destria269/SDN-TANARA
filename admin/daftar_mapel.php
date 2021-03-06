<!DOCTYPE html>
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
                        <a href="daftar_mapel.php" class="active-menu"><i class="fa fa-sitemap"></i>Mata Pelajaran</a>  
                    </li> 
                     <li>
                        <a href="daftar_ruang.php"><i class="fa fa-sitemap"></i>Kelas</a>  
                    </li>
                    <li>
                        <a href="daftar_walikelas.php"><i class="fa fa-edit"></i>Bagi Kelas Siswa Baru</a>
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
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                           Mata Pelajaran <small>Selamat Datang</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Beranda</a></li>
					  <li><a href="#">Mata Pelajaran</a></li>
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
                <a class="btn btn-success pull-right" href="mapel.php">Tambah Data</a>
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
        <form action="aksi_mapel.php" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="xZ2VSYLghz35eFPpNTTE3urshSALQ7GX4EWtDh4l">
            <div class="box-header with-border">
               <table class="table" id="datatables"><thead><tr>
                        <th><center>NO</center></th>
                        <th><center>KODE MAPEL</center></th>
                        <th><center>NAMA MATA PELAJARAN</center></th>
                        <th><center>KKM</center></th>
                        <th><center>AKSI</center></th>
                </tr></thead>
            <tbody>
                
                    <?php
                    include '../koneksi.php';
                    $data=mysqli_query($koneksi,"Select * from mapel");
                    $i=0;
                    while($d=mysqli_fetch_array($data)){ 
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $d['kd_mapel']?></td>
                        <td><?php echo $d['nama_mapel']?></td>
                        <td><?php echo $d['kkm']?></td>
                        <td align="center">
                            <a class="btn btn-info btn-sm" href="tampil_mapel.php?kd_mapel=<?php echo $d['kd_mapel'];?>">EDIT</a>
                        
                            <a class="btn btn-info btn-sm" name="hapus" href="mapel/hapus_mapel.php?kd_mapel=<?php echo $d['kd_mapel'];?>" onclick="return confirm('Yakin akan menghapus data?')">HAPUS</a>

                           
                        </td>
                    </tr>
                        <?php } ?> 
            </tbody>
               </table>
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
