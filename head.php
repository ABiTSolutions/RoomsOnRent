
<?php
include('conn.php');
?>
<script src="js/sweetalert-dev.js"></script>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
<div class="navigation">
	<div class="container-fluid">
		<nav class="pull">
			<ul>
				<li><a  href="index.php">Home</a></li>
				<li><a  href="about.php">About Us</a></li>
				<li><a  href="why.php">Why RoomsOnRent?</a></li>
				<li><a  href="agreement.php">Agreement</a></li>
				<li><a  href="contact.php">Contact</a></li>
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
						//echo "<script>alert('$ii')</script>";
						if(isset($owner) && $ii==1)
						{				
				?>
			    <li class="hidden-xs" style="background: #00d5fa; padding: 0.8em 0;">
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
								//echo "<b>Mobile:</b> +91 7350018084 <b>Email:</b> info@roomsonrent.in";
							?>
						<li style="display:block"><a href="#" style="color:#000; margin:0;">Mobile: +91 7350018098</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Email: anup@roomsonrent.in</a></li>
						<!--<li style="display:block"><a href="logout.php" style="color:#000;  margin:0;">Logout</a></li>	--_ANUP-->
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
<!--<li style="display:block"><a href="logout.php" style="color:#000;  margin:0;">Logout</a></li>	--_ANUP-->
							<?php	
								}
							?>
					  </ul>
					</div>
				</li>
				<li onclick="hideicon()" style="background: #00d5fa; padding: 0.8em 0;">
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Hi <?php $tname=$_SESSION['name']; echo preg_replace('/\d+/u','',$tname); ?> <span class="caret" style="display:inline-block"></span></a>  
						
					<!-- <div id="hand">
						<img src="images/hand-up.gif" class="img-responsive" />
					</div>  --_ANUP-->
					  <?php
						}
					  ?>
					  <?php
						if(isset($tenant) && $ii==2)
						{				
					  ?>
				<li class="hidden-xs" style="background: #00d5fa; padding: 0.8em 0;">
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
								//echo "<b>Mobile:</b> +91 7350018084 <b>Email:</b> info@roomsonrent.in";
							?>
						<li style="display:block"><a href="#" style="color:#000; margin:0;">Mobile: +91 7350018099</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Email: anup@roomsonrent.in</a></li>
						<li style="display:block"><a href="logout.php" style="color:#000;  margin:0;">Logout</a></li>		
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
						<li style="display:block"><a href="logout.php" style="color:#000;  margin:0;">Logout</a></li>		
							<?php	
								}
							?>
					  </ul>
					</div>
				</li>
				<li onclick="hideicon1()" style="background: #00d5fa; padding: 0.8em 0;">
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Hi <?php $tname=$_SESSION['name']; echo preg_replace('/\d+/u','',$tname); ?> <span class="caret" style="display:inline-block"></span></a>
					  
					</div>
					<!-- <div id="hand">
						<img src="images/hand-up.gif" class="img-responsive" />
					</div>  --_ANUP-->
				</li> 
					  <?php
						}
					  ?>
					  
					
					
					
				<?php
				}
				else
				{
				?>
				<li style="background: #00d5fa; padding: 0.8em 0;">
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Login<span class="caret" style="display:inline-block"></span></a>
					  <ul class="dropdown-menu" style="left:auto; right:0; top:35px">
						<li style="display:block"><a href="login.php?id=1" style="color:#000; margin:0;">You are Owner ?</a></li>
						<li style="display:block"><a href="login.php?id=2" style="color:#000; margin:0;">You are Tenant ?</a></li>
					  </ul>
					  
					</div>
				</li>
				<?php
				}
				?>
				
			</ul>
			<div class="nav-icon" style="padding: 0.8em 1em;">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
				</div>	
			</div>
			
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			   
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
				
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

<script>
	function hideicon()
	{
		document.getElementById("hand").style.display="none";
		window.location.href="index.php";
	}
	function hideicon1()
	{
		document.getElementById("hand").style.display="none";
		window.location.href="index.php";
	}
</script>