<?php
session_start();

if (empty($_SESSION['username'])) {
    header("location:login.php");
}else{
if (isset($_SESSION['username'])) {
    $user = trim($_SESSION['username']);
}
if (isset($_SESSION['authorization'])) {
    $authorization = trim($_SESSION['authorization']);
}
require_once('include/config.php');
$base_url = ('http://'.$_SERVER['HTTP_HOST'].'/skripsi/index.php');

isset ($_GET['page']) ? $page = $_GET['page'] : $page = 'home';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon.ico" type="image/ico" />

    <title>Menu Utama</title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">	
    <!-- bootstrap-progressbar -->
    <link href="assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
	  
		<!-- SIDEBAR -->
		<?php
		include ('include/sidebar.php')
		?>
		
		<!-- SIDEBAR -->
        <?php
		include ('include/header.php')
		?>
        
        <!-- page content -->
        <div class="right_col" role="main">
		<?php

		if(isset($_SESSION['pesan'])){echo $_SESSION['pesan']; unset($_SESSION['pesan']);}

		if(file_exists('page/'.$page.'.php')){
			include ('page/'.$page.'.php');
		}else{
			echo '<div class="well">Error : Aplikasi tidak menemukan adanya file <b>'.$page.'.php </b> pada direktori <b>app/..</b></div>';
		}

		?>
        <!-- footer content -->
		<?php
		include ('include/footer.php');
		?>
        <!-- /footer content -->
		</div>
	  </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
	
  </body>
</html>
<?php
}
?>