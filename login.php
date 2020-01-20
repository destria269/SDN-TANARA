<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Login - Sistem Informasi Akademik</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/fonts/style.css">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/css/main.css">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/css/main-responsive.css">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/iCheck/skins/all.css">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/css/theme_light.css" type="text/css" id="skin_color">
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/css/print.css" type="text/css" media="print"/>
        <!--[if IE 7]>
        <link rel="stylesheet" href="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>

  <br/>
  <!-- cek pesan notifikasi -->
  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses";
    }
  }
  ?>
  <br/>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body class="login example2">
        <div class="main-login col-sm-4 col-sm-offset-4">
            <div class="logo">SISTEM INFORMASI AKADEMIK<br>SEKOLAH DASAR NEGERI TANARA
            </div>
            <!-- start: LOGIN BOX -->
            <div class="box-login">
                <form action="cek_login.php" class="form-login" method="post" accept-charset="utf-8">
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control" name="username" placeholder="Nama Pengguna">
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Kata Sandi">
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="button" id="button" class="btn btn-info">
                            Masuk
                        </button>
                    </div>
                </fieldset>
                </form>
            </div>
            <!-- end: LOGIN BOX -->
            <!-- start: COPYRIGHT -->
            <div class="copyright">
                2020 &copy; SDN TANARA.
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/respond.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/excanvas.min.js"></script>
        <script type="text/javascript" src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
        <!--<![endif]-->
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/blockUI/jquery.blockUI.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/iCheck/jquery.icheck.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/less/less-1.5.0.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/js/main.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="http://www.cliptheme.com/preview/admin/clip-one/assets/js/login.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                Main.init();
                Login.init();
            });
        </script>
    </body>
    <!-- end: BODY -->
</html>

