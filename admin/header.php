<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="super_admin_home.php">RoomsOnRent</a>
       <div class="nav-collapse">
        <ul class="nav pull-right">
		 <li class="dropdown">
		   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		     <i class="icon-check"></i> Notification<b class="caret"></b>
		   </a>
            <ul class="dropdown-menu" style="width: 0220px; max-height: 300px; overflow: auto;">
			
				<?php
					$qu="SELECT * FROM `notificationi` order by id DESC";
					$sql = @mysqli_query($connection,$qu);
					while($row=@mysqli_fetch_array($sql))
					{
						echo "<li><a href='#'><span style='font-size: 18px;text-transform: uppercase;'>".$row['name']."</span>:<span style='float: right;font-size: 12px;'>".$row['date']."</span><br/><p style='font-size: 14px; white-space: normal;'>".$row['description']."</p></a></li>";
					}
				?>
			
              
            </ul>
          </li>
		<?php
		if(isset($_SESSION['superadminname'])){
		?>
          <li class="dropdown">
		   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		     <i class="icon-user"></i> Hi,<?php echo$_SESSION['superadminname'] ?> <b class="caret"></b>
		   </a>
            <ul class="dropdown-menu">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
		<?php
		}
		else
		{
		?>
		<li><a href='login.php'>Login</a></li>
		<?php
		}
		?>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->