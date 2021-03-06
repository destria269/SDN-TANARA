﻿<!DOCTYPE html>
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
                        <a href="daftar_pend.php" class="active-menu"><i class="fa fa-desktop"></i>Pendaftaran Siswa</a>
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
                           Pendaftaran Siswa Siswa <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Beranda</a></li>
                      
					  <li><a href="#">Pendaftaran Siswa</a></li>
					  <li class="active">Data</li>
					</ol> 

            <div class="panel-tools">
                
                <a class="btn btn-success pull-right" href="daftar_pend.php">Kembali</a>
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
        <form action="pendaftaran/aksi_daftar.php" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="xZ2VSYLghz35eFPpNTTE3urshSALQ7GX4EWtDh4l">
            <div class="box-header with-border">
                <h3 class="box-title">Pendaftaran Siswa</h3>
            </div><br><br>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    NIS
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="nis" placeholder="MASUKAN NIS" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    NAMA LENGKAP
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="nama_siswa" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    TEMPAT, TGL LAHIR
                </label>
                <div class="col-sm-3">
                    <input type="text" name="tempatlhr" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
                <div class="col-sm-3">
                    <input type="date" name="tgllahir" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    ALAMAT
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="alamat" placeholder="MASUKAN ALAMAT LENGKAP" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    JENIS KELAMIN
                </label>
                    <div class="col-sm-6">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="gender" required>
                            <option value="LAKI-LAKI" >LAKI-LAKI</option>
                            <option value="PEREMPUAN" >PEREMPUAN</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    AGAMA
                </label>
                     <div class="col-sm-6">
                        <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="agama" required>
                            <option value="ISLAM" >ISLAM</option>
                            <option value="KRISTEN" >KRISTEN</option>
                            <option value="BUDHA" >BUDHA</option>
                            <option value="HINDU" >HINDU</option>
                            <option value="KHONG HU CHU" >KHONG HU CHU</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    DITERIMA DI KELAS
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="kelas" placeholder="KELAS" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    STATUS DALAM KELUARGA
                </label>
                <div class="col-sm-6">
                    <select class="form-control col-md-7 col-xs-12" id="form-field-1" name="status" required>
                        <option value="KANDUNG" >KANDUNG</option>
                        <option value="ANGKAT" >ANGKAT</option>
                        <option value="TIRI" >TIRI</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    ANAK KE
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="anakke" placeholder="ANAK KE BERAPA" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    NAMA AYAH
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="namaayah" placeholder="MASUKAN NAMA AYAH" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    NAMA IBU
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="namaibu" placeholder="MASUKAN NAMA IBU" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    ALAMAT ORANG TUA
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="alamatortu" placeholder="MASUKAN ALAMAT LENGKAP" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    NO. TELEPON ORANG TUA
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12" >
                    <input type="text" name="telportu" placeholder="MASUKAN NO TELEPON" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    PEKERJAAN AYAH
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="pekerjaanayah" placeholder="MASUKAN PEKERJAAN AYAH" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    PEKERJAAN IBU
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="pekerjaanibu" placeholder="MASUKAN PEKERJAAN IBU" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div><div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    NAMA WALI
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="namawali" placeholder="MASUKAN NAMA WALI" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    ALAMAT WALI
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="alamatwali" placeholder="MASUKAN ALAMAT LENGKAP" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div><div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                    NO TELEPON WALI
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="telpwali" placeholder="MASUKAN NO TELEPON" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div><div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">
                   PEKERJAAN WALI
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="pekerjaanwali" placeholder="MASUKAN PEKERJAAN WALI" id="form-field-1" class="form-control col-md-7 col-xs-12" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="tambah" class="btn btn-danger  btn-sm">Daftar</button>
                </div>
                
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
