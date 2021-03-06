<?php
	session_start();
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
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="controller/login.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" maxlength="8" class="form-control" placeholder="Username" required/>
              </div>
              <div>
                <input type="password" name="password" maxlength="16" class="form-control" placeholder="Password" required/>
              </div>
			  <div class="text-danger"><?php  isset($_SESSION['error']) ? $e=$_SESSION['error'] : $e=""; echo $e;?></div>
			  <?php
				session_destroy();
			  ?>
              <div>
                <button class="btn btn-default submit">Log in</button>
				<button class="btn btn-default submit" type="reset">Reset</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-calculator"></i> Sistem Informasi Akuntansi</h1>
                  <p>©2018 All Rights Reserved. Fitri Nurul Fathonah!<br>is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
