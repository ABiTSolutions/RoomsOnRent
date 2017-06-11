<?php
include('conn.php'); 
session_start();
include('out.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Post</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="../js/scripts.js"></script>
<link href="../css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="#">Home</a></li>
						<li><a  href="#">About Us</a></li>
						<li><a  href="#">Why RoomsOnRent</a></li>
						<li><a  href="#">How It Works</a></li>
						<li><a  href="#">Agreement</a></li>
						<li><a  href="#">Contact</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="#">
					<img src="images/logo2.png" />
				</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav" style="float:right">
			
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Tenant Details</span></h3> 
	<!---->
	<div class="clearfix"> </div>
		<!--initiate accordion-->
      		
	</div>
</div>
<!--//header-->
<!---->
<div class="loan_single">
	<div class="container">
		<div class="loan-col" style="padding:1em 0 2em 0">
			<?php
			
				$id=$_GET['id'];
				$q = "SELECT * FROM `tenant_reg` WHERE id = '$id'";
				$sql = @mysqli_query($connection,$q);
				 while($row = mysqli_fetch_array($sql))
				{
					$name=$row['name'];
					$mobile=$row['mobile'];
			?>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" >
			
			<div class="col-loan">
			
				<h4>Tenant Plan Details</h4>
				<br/>
				<div class="row">
				
				<div class="col-md-6">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Name:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="name" placeholder="" readonly="" value="<?php echo $row['name'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Mobile:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="mobile" placeholder="" readonly="" value="<?php echo $row['mobile'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Credits in plan:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="credit" placeholder="" readonly="" value="
					  <?php 
						echo $row['planc'];
					  ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Increase Plan Count:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="increase" placeholder="Enter No"  >
					</div>
				  </div>
				  
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				
			</div>
			<!---->
			<div class="loan-col1">
				
				<div class="sub1">
					<label class="hvr-sweep-to-right"><input type="submit" name="submit" value="Update" placeholder=""></label>
					<label class="hvr-sweep-to-right re-set"><a onclick="window.location.href='tenant_details.php'" style="padding: 11px 15px;">Back</a>
				</div>
			</div>
			<!---->
			</form>
			<?php
			}
			?>
			<?php
				 	
				if(isset($_POST['submit']))
				{
					
					$id=$_GET['id'];
					$credit=$_POST['credit'];
					$increase=$_POST['increase'];
					$inc= $credit + $increase;
					$query="UPDATE `tenant_reg` SET `planc` = $inc WHERE id=$id";
					$upload=  mysqli_query($connection,$query);
					
					if(isset($_SESSION['subadminname']))
					{
						$name=$_SESSION['subadminname'];
						$date=date("d/m/Y");
						$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','Increase the plan by $increase of tenant id:- $id')";
						$in=mysqli_query($connection,$qu);
					}	
				    
					if(!$upload)
					{
						echo "<script>alert('Please try again')</script>";
					}
					else
					{
										$sqll="select * from `tenant_reg` WHERE id=$id";
										$fun=@mysqli_query($connection,$sqll);
										while($row=@mysqli_fetch_array($fun))
										{
											$tname=$row['name'];
										}
											$msg="Dear $tname,\n Your fair-plan limit is increase by $increase on your existing limit. Thanks for your kind support, Please feel free to call for any assistance. Contact us for Rs.300 discount on Rental agreement once you get your home www.fairowner.com. \n\nRegards\nTeam Fair-Owner";
											$_COOKIE['mobile']= $mobile;
											$_COOKIE['msg']=$msg;
											include_once("otpsend.php");

											// Declare variables.
											$Username = "YourUsername";
											$Password = "YourPassword";
											$MsgSender = "YourSender, example: a phone number like 4790000000";
											$DestinationAddress = "Receiver - A phone number";
											$Message = "Hello World!";

											// Create ViaNettSMS object with params $Username and $Password
											$ViaNettSMS = new ViaNettSMS($Username, $Password);
											try
											{
												// Send SMS through the HTTP API
												$Result = $ViaNettSMS->SendSMS($MsgSender, $DestinationAddress, $Message);
												// Check result object returned and give response to end user according to success or not.
												if ($Result->Success == true || $otp==$_POST['otp'])
													$Message = "Message successfully sent!";
												else
													$Message = "Error occured while sending SMS<br />Errorcode: " . $Result->ErrorCode . "<br />Errormessage: " . $Result->ErrorMessage;
											}
											catch (Exception $e)
											{
												//Error occured while connecting to server.
												$Message = $e->getMessage();
											}
					
						echo "<script>alert('Tenant Plan Details is updated')</script>";
						echo "<script>window.location.href='tenant_details.php'</script>";
					}
	
				}
				
			?>
			
			
			
			
			
			
			
		</div>
	</div>
</div>
<!--footer-->
<div class="footer">

	<div class="footer-bottom">
		<div class="container">
			
			<div class="col-md-8">
				<p style="color:#FFF">© 2017 RoomsOnRent. All Rights Reserved</p>
			</div>
			<div class="col-md-4 footer-logo">
				<ul class="social" style="padding:0; float:right">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="camera"> </i></a></li>
						<li><a href="#"><i class="dribble"> </i></a></li>
					</ul>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->


<script>
	$(document).ready(function(){
		$("#furnish").change(function(){
			$(this).find("option:selected").each(function(){
				if($(this).attr("value")=="semifurnish")
				{
					$("#fitem").show();
				}
				if($(this).attr("value")=="fullyfurnish")
				{
					$("#fitem").show();
				}
				else
				{
					$("#fitem").hide();
				}
			});	
		});
	});
</script>

</body>
</html>