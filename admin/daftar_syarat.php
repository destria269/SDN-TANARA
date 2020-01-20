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
                        <a href="daftar_pend.php"  class="active-menu"><i class="fa fa-desktop"></i>Pendaftaran Siswa</a>
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
                        <a href="daftar_kenaikan.php"><i class="fa fa-edit"></i>TKenaikan Kelas</a>
                    </li>
                </ul>
            </div>
        </nav>
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
        <form action="aksi_harga.php" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="xZ2VSYLghz35eFPpNTTE3urshSALQ7GX4EWtDh4l">
            <div class="box-header with-border">
                <table class="table" id="datatables">
                    <thead align="center">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Jenis Syarat Pendaftaran</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include '../koneksi.php';
                    $data=mysqli_query($koneksi,"SELECT * FROM syarat");
                    $i=0;
                    while($d=mysqli_fetch_array($data)){ 
                        $i++;
                    ?>
                    <tr>
                        <td align="center"><?php echo $d['id']?></td>
                        <td align="center"><?php echo $d['jenis']?></td>
                        <td align="center">
                            <a>
                                <input type="checkbox" name="checked[]" class="check" value="<?=$d['id']?>" >
                            </a>
                            
                        </td>
                            
                        </td>
                    </tr>
<?php } ?> 
            </tbody>
                </table>

               <div >
                    <a class="btn btn-success pull-right" href="pendaftaran.php">Lanjut Daftar </a>
                </div>
            </div>
         </form>
    </div>
</section>
  </div>
  <!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        $('#select_all').on('click', function() {
            if(this.checked) {
                $('.check').each(function() {
                    this.checked = true;
                })
            } else {
                 $('.check').each(function() {
                    this.checked = false;
                 })
            }
        });

        $('.check').on('click', function() {
            if($('.check:checked').length == $('.check').length) {
                $('#select_all').prop('checked', true)
            } else {
                $('#select_all').prop('checked', false)
            }
        })
    })

</script>
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


