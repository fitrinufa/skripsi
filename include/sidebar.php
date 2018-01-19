        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-calculator"></i> <span>SI Akuntansi</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo $_SESSION['photo'];?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span><?php echo ucfirst($_SESSION['authorization']);?>,</span>
                <h2><?php echo ucfirst($_SESSION['fullname']);?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
			<?php
			if ($authorization == "Administrator") {
			?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                  <li><a><i class="fa fa-pencil"></i>Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=master1">Master 1</a></li>
                      <li><a href="index.php?page=master2">Master 2</a></li>
                      <li><a href="index.php?page=master3">Master 3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=transaksi1">Transaksi 1</a></li>
                      <li><a href="index.php?page=transaksi2">Transaksi 2</a></li>
                      <li><a href="index.php?page=transaksi3">Transaksi 3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i>Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=laporan1">Laporan 1</a></li>
                      <li><a href="index.php?page=laporan2">Laporan 2</a></li>
					  <li><a href="index.php?page=laporan3">Laporan 3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-gear"></i>Pengaturan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=pengaturan1">Pengaturan 1</a></li>
                      <li><a href="index.php?page=pengaturan2">Pengaturan 2</a></li>
                    </ul>
                  </li>
                  <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
              </div>
            </div>
			
			<?php
			}else if ($authorization == "Operator") {
			?>
			<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                  <li><a><i class="fa fa-pencil"></i>Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=master1">Master 1</a></li>
                      <li><a href="index.php?page=master2">Master 2</a></li>
                      <li><a href="index.php?page=master3">Master 3</a></li>
                    </ul>
                  </li>
                  <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
              </div>
            </div>
			<?php
			}
			?>
          </div>
        </div>