<?php
session_start();
include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomOnRent | Post</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<style>
@media all and (max-width: 459px) and (min-width:300px) {
    .hdd {
  	height:45px;
}
.scentxt
{
	margin-top: 50px;
}
.send
{
    position: relative;
    top: -135px;
}
.mobileform
{
    position: absolute;
    top: 120px;
    left: 5px;
}
.btcontent
{
    margin-top: 280px !important;
	}
	.w100
	{
		width:100%;
	}
}
</style>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/styles.css" rel="stylesheet">
<link href="css/sky form.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/sweetalert-dev.js"></script>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css" />



</head>
<body>
<?php
			include('bgImage.php');
?>
<!--header
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="index.html">Home</a></li>
						<li><a  href="about.html">About Us</a></li>
						<li><a  href="why.html">Why Fair Owner</a></li>
						<li><a  href="how.html">How It Works</a></li>
						<li><a  href="agreement.html">Agreement</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>
				</nav>			
			</div>
		</div>
-->
<div class="header hdd" style="padding: 0.5em 0;">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.php">
					<img src="images/logo2.png" />
				</a></h1>
			</div>
		<!--//logo-->
		<!---<div class="top-nav" style="float:right">
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+91 8888599993</span></li>
				<li><a  href="#"><i class="glyphicon glyphicon-user"> </i>Login</a></li>
			</ul>
			<div class="nav-icon">
				<div class="hero nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			---
			</div>
		<div class="clearfix"> </div>
		</div>--->
		<div class="col-md-6">
		</div>
		<div class="col-md-6"> 
		<div style="margin-left:14%">
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="mobileform form-inline" novalidate="novalidate">
			  <div class="form-group">
				<input class="w100" type="number" id="lmobile" name="mobile" value="<?php if(isset($_POST['mobile'])) { echo htmlentities ($_POST['mobile']); }?>" placeholder="Mobile without +91"  style="padding:4px; font: 15px/23px 'Open Sans', Helvetica, Arial, sans-serif; color: #404040;"  />
			  </div>
			  <div class="form-group scentxt">
				<!-- <input class="w100" type="text" class="" id="lotp" name="otp" placeholder="Enter OTP" style="padding:4px; font: 15px/23px 'Open Sans', Helvetica, Arial, sans-serif; color: #404040;" > --_ANUP-->
				<input class="w100" type="password" class="" id="lotp" name="otp" placeholder="Enter Password" style="padding:4px; font: 15px/23px 'Open Sans', Helvetica, Arial, sans-serif; color: #404040;" >
			  </div>
			  <!-- <input name="enterotp" type="submit" class="btn-u" value="Login" style="border: 2px solid #fcfefd; background: #0b8a57; border-radius: 5px; font-size: 16px; font-weight: 600; box-shadow: 7px 7px 5px #289469; color: #ffffff;"  onClick="return loempty()" /> --_ANUP-->
			  <input name="enterotp" type="submit" class="btn-u hvr-sweep-to-right" value="Login" style="border: 2px solid #fcfefd; background: #00d5fa; border-radius: 5px; font-size: 16px; font-weight: 600; box-shadow: 7px 7px 5px #005b6b; color: #ffffff;"  onClick="return loempty() />
		
		<p class="send" style="padding-left:0"><span style="font-size:13px"></span>
		<!--<input type="submit" onClick="return lempty()" name="sendotp" value="" style="background:url('images/getOTP.png'); background-size:45%; border:none; color: #FFF; width:222px; background-repeat: no-repeat;" /> --_ANUP-->
									
		</p>
         </form>
		 
		 <?php
						error_reporting(E_ERROR);
							
					if(isset($_POST['enterotp']))
					{
							/*
							$mobile=$_POST['mobile'];
							$qu="SELECT * FROM `registation` where mobile = '$mobile'";
							$sql = @mysqli_query($connection,$qu);
							while($row=mysqli_fetch_array($sql))
							{
								$dbmobile=$row['mobile'];
							}*/
							
							
									$i=$_GET['id'];
									$_SESSION['ii']=$i;
									if($i==1)
									{
											if (empty($_POST['mobile']) && empty($_POST['otp'])){
												//echo "<script>alert('Mobile Number is not exist - Please Register')</script>";
												echo "<script>swal('Oops...', 'You have entered wrong Mobile Number OR Password!', 'error');</script>";
											}
										else
											{
												
									
									
										$mobile=$_POST['mobile'];
									
										$qu="SELECT mobile FROM `registation` where mobile = '$mobile'";
										$sql = @mysqli_query($connection,$qu);
										while($row=@mysqli_fetch_array($sql))
										{
											$m=$row['mobile'];
											$name=$row['name'];
											$mobile=$_POST['mobile'];
											
										}
											/* if($m==$mobile)  				
											{
												//echo "<script>window.location.href='owner_dashboard.php'</script>";
												//$_COOKIE['mobile']= $mobile;
												//$_COOKIE['otp']=rand(1000, 9999);
												
												$_SESSION["a"]=1234;
												//echo "<script>alert('we send you otp - enter it')</script>";
												
												echo "<script>swal('Thank you...', 'We have send you OTP (One Time Password) on your given mobile through SMS, Please enter it!', 'success');</script>";
												
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
														echo "<script>alert('enter correct OTP')</script>";
														$Message = "Error occured while sending SMS<br />Errorcode: " . $Result->ErrorCode . "<br />Errormessage: " . $Result->ErrorMessage;
												}
												catch (Exception $e)
												{
													//Error occured while connecting to server.
													$Message = $e->getMessage();
												}
									
											}  */  // Hidden by _ANUP //
											if($m==$mobile)
											{
												$qu="SELECT password FROM `login_details` where type = 'owner' ";
												$sql = @mysqli_query($connection,$qu);
												while($row=@mysqli_fetch_array($sql))
												{
													$p=$row['password'];
													$pass=$_POST['otp'];
												}
												$_SESSION["a"]=$p;
											}
											else
											{
												//echo "<script>alert('Mobile Number is not exist - Please Register')</script>";
												echo "<script>swal('Oops...', 'Mobile Number is not exist - Please Register!', 'error');</script>";
											}
											}
											
											
									}
									elseif($i==2)
									{ 
										if (empty($_POST['mobile']) && empty($_POST['otp'])){
											//echo "<script>alert('Mobile Number is not exist - Please Register')</script>";
											echo "<script>swal('Oops...', 'You have entered wrong Mobile Number OR Password!', 'error');</script>";
										}
										else
										{
											
										
										$mobile=$_POST['mobile'];
										$qu="SELECT mobile FROM `tenant_reg` where mobile = '$mobile'";
										$sql = @mysqli_query($connection,$qu);
										while($row=@mysqli_fetch_array($sql))
										{
											$m=$row['mobile'];
											$name=$row['name'];
											$mobile=$_POST['mobile'];
										}
										
											/* if($m==$mobile)
											{
												//$_COOKIE['mobile']= $mobile;
												//$_COOKIE['otp']=rand(1000, 9999);
												$_SESSION["a"]=1234;
												//echo "<script>alert('we send you otp - enter it')</script>";
												echo "<script>swal('Thank you...', 'We have send you OTP (One Time Password) on your given mobile through SMS, Please enter it!', 'success');</script>";
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
														//echo "<script>alert('enter correct OTP')</script>";
														echo "<script>swal('Oops...', 'Enter correct OTP!', 'error');</script>";
														$Message = "Error occured while sending SMS<br />Errorcode: " . $Result->ErrorCode . "<br />Errormessage: " . $Result->ErrorMessage;
												}
												catch (Exception $e)
												{
													//Error occured while connecting to server.
													$Message = $e->getMessage();
												}
											} */  // Hidden by _ANUP //
											if($m==$mobile)
											{
													$qu="SELECT password FROM `login_details` where type = 'tenant' ";
													$sql = @mysqli_query($connection,$qu);
													while($row=@mysqli_fetch_array($sql))
													{
														$p=$row['password'];
														$pass=$_POST['otp'];
													}
													$_SESSION["a"]=$p;
											}
											else
											{
												//echo "<script>alert('Mobile Number is not exist - Please Register')</script>";
												echo "<script>swal('Oops...', 'Mobile Number is not exist - Please Register!', 'error');</script>";
											}
										}
										
									}
							
							/*
							if($mobile==$dbmobile)
							{
									$_COOKIE['mobile']= $_POST['mobile'];
									$_COOKIE['otp']=rand(1000, 9999);
									$_SESSION["a"]=$_COOKIE['otp'];
									echo "<script>alert('we send you otp - enter it')</script>";

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
											echo "<script>alert('enter correct OTP')</script>";
											$Message = "Error occured while sending SMS<br />Errorcode: " . $Result->ErrorCode . "<br />Errormessage: " . $Result->ErrorMessage;
									}
									catch (Exception $e)
									{
										//Error occured while connecting to server.
										$Message = $e->getMessage();
									}
									
							
							}
							else
							{
								echo "<script>alert('Mobile Number is not exist - Please Register')</script>";
							}*/
						
					}
					if(isset($_POST['enterotp']))
					{
						
						$temp=$_POST['otp'];
						$m=$_SESSION["a"];  
						$mobile=$_POST['mobile'];
						if($m == $temp)
						{	
							/*
							$qu="SELECT name,flow_id FROM `registation` where mobile = '$mobile'";
							$sql = @mysqli_query($connection,$qu);
							while($row=mysqli_fetch_array($sql))
							{
							
								$name=$row['name'];
								$flow_id=$row['flow_id'];
								$_SESSION['name']=$name;
								//$i=$_GET['id'];
									if($flow_id==1)
									{
									echo "<script>window.location.href='owner_dashboard.php'</script>";
									}
									if($flow_id==2)
									{
									echo "<script>window.location.href='tenant_dashboard.php'</script>";
									}
							}*/
									
							
									$i=$_GET['id'];
									if($i==1)
									{
										$qu="SELECT * FROM `registation` where mobile = '$mobile'";
										$sql = @mysqli_query($connection,$qu);
										while($row=@mysqli_fetch_array($sql))
										{
											
											$name=$row['name'];
											$_SESSION['name']=$name;
											echo "<script>window.location.href='owner_dashboard.php'</script>";
										}
									}
									elseif($i==2)
									{ 
										$qu="SELECT * FROM `tenant_reg` where mobile = '$mobile'";
										$sql = @mysqli_query($connection,$qu);
										while($row=@mysqli_fetch_array($sql))
										{
											$name=$row['name'];
											$_SESSION['name']=$name;
											echo "<script>window.location.href='tenant_dashboard.php'</script>";
										}
									}
							
							
						}
						else
						{
							//echo "<script>alert('Enter Correct OTP')</script>";
							// echo "<script>swal('Oops...', 'Enter Correct OTP!', 'error');</script>";  _ANUP //
							echo "<script>swal('Oops...', 'Enter Correct Password!', 'error');</script>";
						}
						
					}
					
						?>
		 
		 
		 </div>       
	</div>	
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	

<div class="loan_single" style="background:rgba(0, 213, 250, 0.05)">
	
	<div class="container" style="">
		
		<div class="col-md-8">
			
			<div style="margin-top:12%" class="btcontent">
				<?php
					if($_GET['id']==1)
					{
				?>
					<p style="font-size:1.5em; text-align:center; color: azure;">
						"Post Property & Get Relaxed"
					</p><br/>
					<div class="col-md-2"></div>
					<div class="col-md-8" style="margin-left:2%;">
						<img src="images/owner.png" class="img-responsive" />
					</div>
					<div class="col-md-2"></div>
					<!--<p style="font-size:1.5em; text-align:center">
						Fairowner.com has introduced another unique facility for its registered clients	
					</p>-->
					<div class="col-md-12">
			<div class="us-choose">
			<h4 style="font-size: 1.5em;
    text-align: center;
    margin-bottom: 25px;
    color: #00d5fa;">"Pay A Little & Experience The Comfort"</h4>
				<div class="col-md-1">
					
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-home"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Posting</h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Posting property ad in easy steps</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive fa fa-volume-control-phone"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Get Tenant</h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em" >Quick & fair inquiry's</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive fa fa-user"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Manager</h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em" >Personal relationship manager for any assistance</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive fa fa-file"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Agreement </h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em" >On call consultation on rental agreement</p>
					</div>
					<div class="clearfix"> </div>
				</div>  
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive fa fa-check-square-o"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Verification </h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em" >On call consultation on tenant verification </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-1">
					
				</div>
				<div class="clearfix"> </div>
			</div>				
			</div>
				<?php
				}
				else
				{
				?>
					<p style="font-size:1.5em; text-align:center; color: azure;">
						"Save time, money & efforts" 
					</p><br/>
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<img src="images/tenant.png" class="img-responsive" style="" />
					</div>
					<!--<div class="col-md-4">
						<img src="images/home.png" class="img-responsive" />
					</div>-->
					<div class="col-md-1"></div>
					<div class="clearfix"></div>
					<!--<p style="font-size:1.5em; text-align:center">
						Fairowner.com has introduced another unique facility for its registered clients	
					</p>-->
					<div class="col-md-12">
			<div class="us-choose">
			<h4 style="font-size: 1.5em;
    text-align: center;
    margin-bottom: 25px;
    color: #00d5fa;">"Experience the hasslefree home hunting"</h4>
				<div class="col-md-2 why-choose hidden-xs">
					
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive fa fa-user-secret"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Brokerage</h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Brokerage free properties</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive fa fa-file"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Agreement</h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Doorstep rental agreements</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive fa fa-check-square-o"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Verification</h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Assistance in tenant verification</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive fa fa-user"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Manager</h5>
						<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Personal relationship manager for any assistance </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose hidden-xs">
					
				</div>
				<div class="clearfix"> </div>
			</div>				
			</div>
				<?php
				}
				?>
			</div>
		
		</div>
		
		<div class="col-md-4 second">
		  
						<div style="margin-top:26%;">
						 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" id="sky-form4" class="sky-form" novalidate="novalidate" style="margin:3px 0">
                            <header>New To RoomOnRent?</header>

                            <fieldset>
                                <section>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="text" id="uname" name="username" placeholder="Enter Full Name" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" >
                                    </label>
                                </section>
								
								<section>
                                    <label class="input">
                                        <i class="icon-append fa fa-key"></i>
                                        <input type="password" id="my_password" name="my_password" placeholder="Enter Password" value="<?php echo isset($_POST['my_password']) ? $_POST['my_password'] : '' ?>" >
                                    </label>
                                </section>
								
								<section>
                                    <label class="input">
                                        <i class="icon-append fa fa-key"></i>
                                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-Enter Password" value="<?php echo isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '' ?>" >
                                    </label>
                                </section>

                                <section>
                                    <label class="input">
                                        <i class="icon-append fa fa-envelope"></i>
                                        <input type="email" id="uemail" name="email" placeholder="Email address" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
                                    </label>
                                </section>

                                <section>
                                    <label class="input">
                                        <i class="icon-append fa fa-mobile"></i>
                                        <input type="number" id="umobile" name="r_mobile" placeholder="Mobile without +91" value="<?php echo isset($_POST['r_mobile']) ? $_POST['r_mobile'] : '' ?>" >
                                    </label>
                                </section>
								
								<section>
                                    <!--<label class="checkbox" style="padding-left:0">We Send you OTP on your mobile</label>
                                    <label class="checkbox" style="padding-left:0">
									<a href="#">Click Here</a>-
									<input type="submit" onClick="return rone()" name="r_sendotp" value="" style="background:url('images/clickhere.png'); border:none; color: #27da93; font-size: 16px; background-size: 100%; width: 100px;"  />
									<!--</label>-->
                                </section>
							<?php
								if(isset($_POST['r_mobile']))
								{
							?>
                                <section id="enterotp">
                                    <label class="input">
                                        <i class="icon-append fa fa-lock"></i>
                                        <input type="text" id="uotp" name="r_otp" placeholder="OTP">
                                    </label>
                                </section>
							<?php
								}
							?>
							
                            </fieldset>

                            <!--<fieldset style="padding: 5px 30px;">
                                <section>
                                    <label class="checkbox"><input type="checkbox" name="terms" id="terms"><i></i>I agree with the Terms and Conditions</label>
                                </section>
                            </fieldset>-->
                            
							<?php
								if(isset($_POST['r_mobile']))
								{
							?>
							<footer id="footer1">
                                <input style="float:right" type="submit" onClick="return rtwo()" name="create_account" class="btn-u" value="Next >>" />
                            </footer>
							<?php
								}
								else
								{
							?>
							<footer id="footer2">
                                <input style="float:right" type="submit" onClick="return rone()" name="r_sendotp" class="btn-u" value="Proceed >>"   />
							</footer>
							<?php
								}
							?>
                        </form>
						
						
								 <?php
						error_reporting(E_ERROR);
							
						if(isset($_POST['r_sendotp']))
						{
									$name=$_POST['username'];
									$r_mobile=$_POST['r_mobile'];
									$i=$_GET['id'];
									$_SESSION['ii']=$i;
									if($i==1)
									{
										
										$qu="SELECT mobile FROM `registation` where mobile = '$r_mobile'";
										$sql = @mysqli_query($connection,$qu);
										$row=@mysqli_fetch_row($sql);
										$m=$row[0];
										if(isset($m))
										{
											//echo "<script>alert('Mobile No is already exist - Please Login')</script>";
											//echo "<script>swal('Oops...', 'Mobile No is already exist - Please Login!', 'error');</script>";
											//echo "<script>window.location.href='login.php?id=1'</script>";
											
											echo "
												<script>
													$(document).ready(function() {
														swal({ 
														   title:'Thank you...',
														   text:'Thanks for providing details. Your account has been created. Please login',
														   type:'success' 
														  },function() {
																window.location.href='login.php?id=1';
															});
														});
													
												</script>
											";
											
											/*$qu="SELECT name FROM `registation` where mobile = '$r_mobile'";
											$sql = @mysqli_query($connection,$qu);
											$row=@mysqli_fetch_row($sql);
											$m=$row[0];
											
											$_SESSION['name']=$m;
											echo "<script>window.location.href='owner_dashboard.php'</script>";
											*/
										}
										else
										{
											//regTest
											//$_COOKIE['mobile']= $_POST['r_mobile'];
											//$_COOKIE['otp']=rand(1000, 9999);
											$_SESSION["a1"]=1122;//$_COOKIE['otp'];
											//echo "<script>alert('we send you otp - enter it')</script>";
											//echo "<script>swal('Thank you...', 'We have send you OTP (One Time Password) on your given mobile through SMS, Please enter it!', 'success');</script>";
											
											echo "
												<script>
													$(document).ready(function() {
														swal({ 
														   title:'Thank you...',
														   text:'We have send you OTP (One Time Password) on your given mobile through SMS, Please enter it!',
														   type:'success' 
														  },function() {
																window.scrollTo(0, document.body.scrollHeight);
																document.getElementById('uotp').focus();
															});
														});
													
												</script>
											";
											
											
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
										}
										
									}
									elseif($i==2)
									{ 
										
										$qu="SELECT mobile FROM `tenant_reg` where mobile = '$r_mobile'";
										$sql = @mysqli_query($connection,$qu);
										$row=@mysqli_fetch_row($sql);
										$m=$row[0];
										if(isset($m))
										{
											echo "
												<script>
													$(document).ready(function() {
														swal({ 
														   title:'Thank you...',
														   text:'Thanks for providing details. Your account has been created. Please login',
														   type:'success' 
														  },function() {
																window.location.href='login.php?id=2'
															});
														});
													
												</script>
											";
											
										}
										else
										{
											//regTest
											//$_COOKIE['mobile']= $_POST['r_mobile'];
											//$_COOKIE['otp']=rand(1000, 9999);
											$_SESSION["a1"]=1122;//$_COOKIE['otp'];
											//echo "<script>alert('we send you otp - enter it')</script>";
											//echo "<script>swal('Thank you...', 'We have send you OTP (One Time Password) on your given mobile through SMS, Please enter it!', 'success');</script>";
											
											echo "
												<script>
													$(document).ready(function() {
														swal({ 
														   title:'Thank you...',
														   text:'We have send you OTP (One Time Password) on your given mobile through SMS, Please enter it!',
														   type:'success' 
														  },function() {
																window.scrollTo(0, document.body.scrollHeight);
																document.getElementById('uotp').focus();
															});
														});
													
												</script>
											";
											
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
										}
									}
									else
									{
										//echo "<script>alert('Enter Correct URL')</script>";
										echo "<script>swal('Oops...', 'Enter Correct URL!', 'error');</script>";
										echo "<script>window.location.href='index.php'</script>";
									}
						
					}
					if(isset($_POST['create_account']))
					{
						
						$r_mobile=$_POST['r_mobile'];
						$temp=$_POST['r_otp'];
						$m=$_SESSION["a1"];
						$email=$_POST['email'];
						$my_password=$_POST['my_password'];
						if($m == $temp)
						{	
						
									$i=$_GET['id'];
									if($i==1)
									{
										$date=date("d/m/Y");
										$name=$_POST['username'];
										
										$qu1="SELECT name FROM `registation` where name = '$name'";
										$sql1 = @mysqli_query($connection,$qu1);
										$roww=@mysqli_fetch_row($sql1);
										$n=$roww[0];
										if(isset($n))
										{
											$ali=rand(10, 99);
											$name=$n.$ali;
										}
										
										$_SESSION['name']=$name;
										$query="INSERT INTO `registation`(`id`, `name`, `email`, `mobile`, `flow_id`, `pd_id`, `date`, `manager`, `fromwhere`) VALUES ('','".$name."','".$email."','".$r_mobile."','".$i."','0','".$date."','Mr. Anup','Frontend')";
										//Below query is for login.
										$query_login=" INSERT INTO `login_details` (`id`, `name`, `mobile`, `password`, `type`) VALUES ('','".$name."','".$r_mobile."','".$my_password."','owner') ";
										$upload=  mysqli_query($connection,$query);
										$upload=  mysqli_query($connection,$query_login);
										
										echo "<script>window.location.href='owner_after_login.php'</script>";
									}
									elseif($i==2)
									{ 
										$date=date("d/m/Y");
										$name=$_POST['username'];
										
										$qu1="SELECT name FROM `tenant_reg` where name = '$name'";
										$sql1 = @mysqli_query($connection,$qu1);
										$roww=@mysqli_fetch_row($sql1);
										$n=$roww[0];
										if(isset($n))
										{
											$ali=rand(10, 99);
											$name=$n.$ali;
										}
										
										$_SESSION['name']=$name;
										$query="INSERT INTO `tenant_reg`(`id`, `name`, `email`, `mobile`, `flow_id`, `pd_id`, `date`, `manager`, `fromwhere`) VALUES ('','".$name."','".$email."','".$r_mobile."','".$i."','0','".$date."','Mr. Sagar','Frontend')";
										//Below query is for login.
										$query_login=" INSERT INTO `login_details` (`id`, `name`, `mobile`, `password`, `type`) VALUES ('','".$name."','".$r_mobile."','".$my_password."','tenant') ";
										$upload=  mysqli_query($connection,$query);
										$upload=  mysqli_query($connection,$query_login);
										
										echo "<script>window.location.href='tenant_dashboard.php'</script>";
									}
									else
									{
										//echo "<script>alert('Enter Correct URL')</script>";
										echo "<script>swal('Oops...', 'Enter Correct URL!', 'error');</script>";
									}
						
						}
						else
						{
							//echo "<script>alert('Enter Correct OTP')</script>";
							echo "<script>swal('Oops...', 'Enter Correct OTP!', 'error');</script>";
						}
					}
					
						?>
						
					</div>	
		</div>
		<div class="clearfix"> </div>
	</div><br/><br/>
</div>

<!--footer-->
<?php
		include('footer.php');
?>
<!--//footer-->

<script>
function lempty() {
    var x;
    x = document.getElementById("lmobile").value;
    if (/^\d{10}$/.test(x)) {
		//ok
	}
	else
	{
		swal("Oops...", "Please enter valid mobile No!", "error");
		document.getElementById("lmobile").focus();
        return false;
    };
	
}

function loempty() {
    var y;
    y = document.getElementById("lotp").value;
    if (y == "") {
        //alert("please Enter OTP");
		swal("Oops...", "Please enter Password!", "error");
		document.getElementById("lotp").focus();
        return false;
    };
}
</script>
<script>
	function val()
	{
		if(document.getElementById('terms').checked==false)
		 alert('Please agree for our terms & contidions');
		 window.location.href='login.php';
	}
</script>	



<script>
function rone() {
    var a;
    a = document.getElementById("uname").value;
    if (a == "") {
        //alert("please Enter username");
		document.getElementById("uname").focus();
		swal("Oops...", "Please enter username!", "error");
        return false;
    };
	var b;
    b = document.getElementById("uemail").value;
	var atpos = b.indexOf("@");
	var dotpos = b.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length) {
        //alert("please Enter valid email");
		document.getElementById("uemail").focus();
		swal("Oops...", "Please enter valid email!", "error");
        return false;
    };
	var c;
    c = document.getElementById("umobile").value;
    //|| c.match(^[789]\d{9}$)
	if (/^\d{10}$/.test(c)) {
	 //ok
	}
	else{
        //alert("please Enter valid mobile no");
		document.getElementById("umobile").focus();
		swal("Oops...", "Please enter valid mobile no!", "error");
        return false;
    };
	var d, e ;
    d = document.getElementById("my_password").value;
    e = document.getElementById("confirmPassword").value;
    if (d == "") {
        //alert("please Enter password");
		document.getElementById("my_password").focus();
		swal("Oops...", "Please enter Password!", "error");
        return false;
    }
	elseif(d == e){
		//ok
	}
	else{
		//alert("Password Not Matched");
		document.getElementById("my_password").focus();
		swal("Oops...", "Password Not Matched with Confirm Password!", "error");
        return false;
	}
}

function rtwo() {
    
	    var a;
    a = document.getElementById("uname").value;
    if (a == "") {
        //alert("please Enter username");
		document.getElementById("uname").focus();
		swal("Oops...", "Please enter valid username!", "error");
        return false;
    };
	var b;
    b = document.getElementById("uemail").value;
	var atpos = b.indexOf("@");
	var dotpos = b.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length) {
        //alert("please Enter valid email");
		document.getElementById("uemail").focus();
		swal("Oops...", "Please enter valid email!", "error");
        return false;
    };
	var c;
    c = document.getElementById("umobile").value;
    //|| c.match(^[789]\d{9}$)
	if (/^\d{10}$/.test(c)) {
	 //ok
	}
	else{
       // alert("please Enter valid mobile no");
		document.getElementById("umobile").focus();
		swal("Oops...", "Please enter valid mobile no!", "error");
        return false;
    };
	
	var d;
    d = document.getElementById("uotp").value;
    if (d == "") {
        //alert("please Enter OTP");
		document.getElementById("uotp").focus();
		swal("Oops...", "Please enter OTP!", "error");
        return false;
    };
	if(document.getElementById('terms').checked==false)
	{
		 //alert('Please agree for our terms & conditions');
		 document.getElementById("terms").focus();
		 swal("Oops...", "Please agree for our terms & conditions!", "error");
		return false;
	}
}
</script>

</body>
</html>