
<?php
include('conn.php');
?>
<script src="js/sweetalert-dev.js"></script>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
<div class="navigation">
	<div class="container-fluid">
		<nav class="pull">
			<ul>
				<!-- <li><a  href="index.php">Home</a></li>
				<li><a  href="about.php">About Us</a></li>
				<li><a  href="why.php">Why RoomsOnRent?</a></li>
				<li><a  href="agreement.php">Agreement</a></li>
				<li><a  href="contact.php">Contact</a></li>   --_ANUP-->
			</ul>
		</nav>			
	</div>
</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.php">
						<img src="images/logo2.png" />
					</a>
				</h1>
			</div>
		<!--//logo-->
		<div class="top-nav" style="float:right">
			<ul class="right-icons" style="margin-bottom:0">
				<?php if(isset($_SESSION['name']))
				{						
				?>
				<?php
						$name=$_SESSION['name'];
						$ii=$_SESSION['ii'];
						$qu="SELECT * FROM `registation` where name = '$name'";
						$sql = @mysqli_query($connection,$qu);
						while($row=@mysqli_fetch_array($sql))
						{
							$owner=$row['name'];
						}
										
						$qu1="SELECT * FROM `tenant_reg` where name = '$name'";
						$sql1 = @mysqli_query($connection,$qu1);
						while($row1=@mysqli_fetch_array($sql1))
						{
							$tenant=$row1['name'];
						}				
						if(isset($owner) && $ii==1)
						{				
				?>
				
				
			    <!-- <li class="hidden-xs" style="background: #29c789; padding: 0.8em 0;" >   --_ANUP-->
			    <!-- <li class="hidden-xs" style="background: #00d5fa; padding: 0.8em 0;" >
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Your Personal Manager<span class="caret" style="display:inline-block"></span></a>
					  <ul class="dropdown-menu" style="left:auto; right:0; top:35px">
						<li style="display:block"><a href="#" style="color:#000; margin:0;"><b>Call Your Personal Manager</b></a></li>
							<?php
							$name=$_SESSION['name'];
							$query="SELECT manager FROM `registation` where name = '$name'";
							$sql = @mysqli_query($connection,$query);
							$row = mysqli_fetch_row($sql);
							$mid=$row[0];
							if(empty($mid))
							{	
								//echo "<b>Mobile:</b> +91 7350018084 <b>Email:</b> info@fairowner.com";
							?>
						<li style="display:block"><a href="#" style="color:#000; margin:0;">Mobile: +91 9595567981</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Email: abitsolutionsin@gmail.com</a></li>
							<?php
							}
							else
							{
							$query1="SELECT * FROM `sub_admin` where name = '$mid'";
							$sql1 = @mysqli_query($connection,$query1);
							while($row1 = mysqli_fetch_array($sql1))
							{
								$mobile=$row1['mobile'];
								$email=$row1['email'];
							}
							//echo "<b>Mobile:</b> $mobile <b>Email:</b> $email ";
							?>
						<li style="display:block"><a href="#" style="color:#000; margin:0;">Mobile: <?php echo $mobile ?></a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Email: <?php echo $email ?></a></li>
							<?php	
								}
							?>
					  </ul>
					</div>
				</li>    _ANUP-->
				
				<!-- <li onclick="hideicon()" style="background: #29c789; padding: 0.8em 0;">   --_ANUP-->
				<li onclick="hideicon()" style="background: #00d5fa; padding: 0.8em 0;">
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Hi <?php $tname=$_SESSION['name']; echo preg_replace('/\d+/u','',$tname);?> <!-- <span class="caret" style="display:inline-block"></span> --></a>  
					  <!-- <ul class="dropdown-menu" style="left:auto; right:0; top:35px">
						<li style="display:block"><a href="logout.php" style="color:#000;  margin:0;">Logout</a></li>
					  </ul>  --_ANUP-->
					</div>	
						<!-- <div id="hand">
						<img src="images/hand-up.gif" class="img-responsive" />
					</div> _ANUP-->
				</li>
				<div class="dropdwn" style="margin-top: 3%;">
					<button class="dropbtn">
						<i class="glyphicon glyphicon-menu-hamburger"></i> Menu
					</button>
					<!--	<a href="#" class="dropbtn"><i class="glyphicon glyphicon-menu-hamburger"></i> Menu</a>  --_ANUP-->
					<div class="dropdwn-content">
						<a href="owner_dashboard.php">Home</a> <a href="about.php">About</a> <a
							href="contact.php">Contact</a> <a href="why.php">Why
							RoomsOnRent ?</a> <a href="logout.php">Logout</a>
					</div>
				</div>
				<?php
						}
					  ?>
					  <?php
						if(isset($tenant) && $ii==2)
						{				
					  ?>
				<!-- <li class="hidden-xs" style="background: #29c789; padding: 0.8em 0;">   --_ANUP-->
				<!-- <li class="hidden-xs" style="background: #00d5fa; padding: 0.8em 0;">
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Your Personal Manager<span class="caret" style="display:inline-block"></span></a>
					   <ul class="dropdown-menu" style="left:auto; right:0; top:35px">
						<li style="display:block"><a href="#" style="color:#000; margin:0;"><b>Call Your Personal Manager</b></a></li>
							<?php
			
							$name=$_SESSION['name'];
							$query="SELECT manager FROM `tenant_reg` where name = '$name'";
							$sql = @mysqli_query($connection,$query);
							$row = mysqli_fetch_row($sql);
							$mid=$row[0];
							if(empty($mid))
							{	
								//echo "<b>Mobile:</b> +91 7350018084 <b>Email:</b> info@fairowner.com";
							?>
						<li style="display:block"><a href="#" style="color:#000; margin:0;">Mobile: +91 9595567981</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Email: abitsolutionsin@gmail.com</a></li>
							<?php
							}
							else
							{
								
								$query1="SELECT * FROM `sub_admin` where name = '$mid'";
								$sql1 = @mysqli_query($connection,$query1);
								while($row1 = mysqli_fetch_array($sql1))
								{
									$mobile=$row1['mobile'];
									$email=$row1['email'];
								}
								
								//echo "<b>Mobile:</b> $mobile <b>Email:</b> $email ";
							?>
						<li style="display:block"><a href="#" style="color:#000; margin:0;">Mobile: <?php echo $mobile ?></a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Email: <?php echo $email ?></a></li>
							<?php	
								}
							?>
					  </ul>
					</div>
				</li>   _ANUP-->
				<!-- <li onclick="hideicon1()" style="background: #29c789; padding: 0.8em 0;">   --_ANUP-->
				<li onclick="hideicon1()" style="background: #00d5fa; padding: 0.8em 0;">
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" ><!--data-toggle="dropdown"--><i class="glyphicon glyphicon-user"> </i>Hi <?php $tname=$_SESSION['name']; echo preg_replace('/\d+/u','',$tname); ?> <!-- <span class="caret" style="display:inline-block"></span> --></a>
					  <!-- <ul class="dropdown-menu" style="left:auto; right:0; top:35px">
						<li style="display:block"><a href="logout.php" style="color:#000;  margin:0;">Logout</a></li>
					  </ul>  --_ANUP-->
					  
					</div>
					<!-- <div id="hand">
						<img src="images/hand-up.gif" class="img-responsive" />
					</div>  --_ANUP-->
				</li> 
				<div class="dropdwn" style="margin-top: 3%;">
					<button class="dropbtn">
						<i class="glyphicon glyphicon-menu-hamburger"></i> Menu
					</button>
					<!--	<a href="#" class="dropbtn"><i class="glyphicon glyphicon-menu-hamburger"></i> Menu</a>  --_ANUP-->
					<div class="dropdwn-content">
						<a href="tenant_dashboard.php">Home</a> <a href="about.php">About</a> <a
							href="contact.php">Contact</a> <a href="why.php">Why
							RoomsOnRent ?</a> <a href="logout.php">Logout</a>
					</div>
				</div>
					  <?php
						}
					  ?>
					  
					
					
					
				<?php
				}
				else
				{
				?>
				<!--<li style="background: #29c789; padding: 0.8em 0;"> 
				<li style="background: #00d5fa; padding: 0.8em 0;">
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Login<span class="caret" style="display:inline-block"></span></a>
					  <ul class="dropdown-menu" style="left:auto; right:0; top:35px">
						<li style="display:block"><a href="login.php?id=1" style="color:#000; margin:0;">You are Owner ?</a></li>
						<li style="display:block"><a href="login.php?id=2" style="color:#000; margin:0;">You are Tenant ?</a></li>
					  </ul>
					  
					</div>
				</li>  
				</li> ---_ANUP-->
<div class="dropdwn">
		<button class="dropbtn-login"><i class="glyphicon glyphicon-user"> </i> Login </button>
	<!--<a  class="dropdown-toggle dropbtn" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i> Login </a>  --_ANUP-->
		<div class="dropdwn-content">
			<a href="login.php?id=1">Are You Owner ?</a>
			<a href="login.php?id=2">Are You Tenant ?</a>
		</div>
</div>
			

		
				<?php
				}
				?>
				
			</ul>
		<!--	<div class="nav-icon" style="padding: 0.8em 1em;">
				<div class="hero nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> Menu</a>
				</div>	
			</div>   --_ANUP-->

		
		
			



		
		
		
		<div class="clearfix"> </div>
			
				
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>

<style>
.dropbtn {
    background-color: #00d5fa;
    color: white;
    padding: 14px;
    font-size: 17px;
    border: none;
    cursor: pointer;
    margin-top: -15%;
    margin-bottom: 1px;
}

.dropbtn-login {
    background-color: #00d5fa;
    color: white;
    padding: 12px;
    font-size: 15px;
    border: none;
    cursor: pointer;
    margin-top: -1%;
    margin-bottom: 1px;
}

.dropdwn {
    position: relative;
    display: inline-block;
}

.dropdwn-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdwn-content a {
    color: black;
    padding: 10px 13px;
    text-decoration: none;
    display: block;
}

.dropdwn-content a:hover {
	background-color: #f1f1f1
}

.dropdwn:hover .dropdwn-content {
    display: block;
}

.dropdwn:hover .dropbtn {
    background-color: #008b9d;
}
</style>
<script>
	function hideicon()
	{
		document.getElementById("hand").style.display="none";
		window.location.href="owner_dashboard.php";
	}
	function hideicon1()
	{
		document.getElementById("hand").style.display="none";
		window.location.href="tenant_dashboard.php";
	}
</script>
<!---pop-up-box---->
			   
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->