<div class="top_nav">
  <div class="nav_menu">
	<nav>
	  <div class="nav toggle">
		<a id="menu_toggle"><i class="fa fa-bars"></i></a>
	  </div>

	  <ul class="nav navbar-nav navbar-right">
		<li class="">
		  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<img src="images/img.jpg" alt=""><?php echo ucfirst($_SESSION['fullname']);?>
			<span class=" fa fa-angle-down"></span>
		  </a>
		  <ul class="dropdown-menu dropdown-usermenu pull-right">
			<li><a href="index.php?page=profil"> Profil</a></li>
			<li>
			  <a href="index.php?page=gantipass">
				<span>Ganti Password</span>
			  </a>
			</li>
			<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
		  </ul>
		</li>
	  </ul>
	</nav>
  </div>
</div>