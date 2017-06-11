<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php">RoomsOnRent</a>
       <div class="nav-collapse">
        <ul class="nav pull-right">
		<?php
		if(isset($_SESSION['subadminname'])){
		?>
          <li class="dropdown">
		   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		     <i class="icon-user"></i> Hi,<?php echo$_SESSION['subadminname'] ?> <b class="caret"></b>
		   </a>
            <ul class="dropdown-menu">
              <li><a href="logout1.php">Logout</a></li>
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