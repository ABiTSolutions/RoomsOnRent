<?php 
session_start();
include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomOnRent | Agreement</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="fairowner" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>

<div id="loader" style="position:fixed; top:0; left:0; width:100%; height:100%;">
	<div>	
		<img src="images/loader.gif" style="position: absolute; top: 30%; bottom: 0; right: 0;left: 0;margin: 0 auto; width: 150px;" />
	</div>
</div>

<!--header-->
<?php
			include('header.php');
?>
<!--//-->	
<div class=" banner-buying" style="background:url(images/2.png);background-repeat: no-repeat; background-size: 100%;">
	<div class=" container">
	<h3><span>Door-step Registered Rent Agreement</span></h3> 
	<!---->
	
	<div class="clearfix"> </div>
		<!--initiate accordion-->
		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="privacy" style="padding:2em 0 2em 0">
	<div class="container">
	<?php
		if(isset($_SESSION['name']))
		{
	?>
	<h4 style="text-align:center">Just Call Your Personal Manager, He Will Take Care Of The Rest.</h4>
	<?php
		}
		else
		{
	?>
	<h4 style="text-align:center">Just Give Us A Call At +91 88885-99993 & Let us take care of the rest</h4><br/>
	<?php
		}
	?>
	
			<div class="choose-us" style="padding:2em 0">
		<div class="container">
			<h3 style="font-size: 1.8em; text-transform: uppercase; color: #27da93;">Procedure</h3>
			<div class="us-choose">
				<div class="col-md-4 why-choose">
					<h5 style="text-align: center; margin: 20px 0; color: #3cd498; font-size: 1.2em;">Step-1</h5>
					<div class="  ser-grid " style="float:none; text-align:center">
						<!--<i class="hi-icon hi-icon-archive glyphicon glyphicon-phone"> </i>-->
						<img src="images/p1.jpg" class="img-responsive" style="width: 60%; margin: 0 auto;" />
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<h5>Call & Fix Appointment</h5>
						<!--<label>The standard chunk of Lorem</label>-->
						<p>Call your personal manager if you are registered with us. If not, call 7350018083 else fill given form, and fix appointment at your convenience.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 why-choose">
					<h5 style="text-align: center; margin: 20px 0; color: #3cd498; font-size: 1.2em;">Step-2</h5>
					<div class=" ser-grid" style="float:none; text-align:center">
						<!--<i class="hi-icon hi-icon-archive glyphicon glyphicon-phone"> </i>-->
						<img src="images/p2.jpg" class="img-responsive" style="width: 60%; margin: 0 auto;" />
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<h5>Execution of agreement at your doarstep</h5>
						<!--<label>The standard chunk of Lorem</label>-->
						<p>Be ready with required documents on scheduled date and time. Bio-matric registration will be done for owner, tenant & 2 witness. Once agreement draft done and approved by both the parties, we will submit it for registration. This services is available on weekdays & weekends too. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 why-choose">
					<h5 style="text-align: center; margin: 20px 0; color: #3cd498; font-size: 1.2em;">Step-3</h5>
					<div class=" ser-grid" style="float:none; text-align:center">
						<!--<i class="hi-icon hi-icon-archive glyphicon glyphicon-phone"> </i>-->
						<img src="images/p3.png" class="img-responsive" style="width: 70%; margin: 0 auto;height: 190px;" />
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:90%; margin:5px auto;"> 
						<h5>Delivery of registered agreement</h5>
						<!--<label>The standard chunk of Lorem</label>-->
						<p>Final copy of Registered Agreement will be available for download on website after registration. If required we can send it on your Email-id or at your address. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
				
			</div>
		</div>
		
		<br/>
			<h3 style="font-size: 1.8em; text-transform: uppercase; color: #27da93;">Overview</h3>
		
		<div class="col-md-12">
			<p style="text-align:center">
				Having mindset of developing lifetime relation we believe in providing hassle free, time saving and cost effective Door-step Rental Agreement. Which eliminates traditional hassle like - procedure awareness issues, high charges from third parties, lowers and middle men, negotiation on rates, visiting SRO Office, taking at least half day leave.
			</p>
		</div>
		<div class="clearfix"></div>
		<br/>
		
		<h3 style="font-size: 1.8em; text-transform: uppercase; color: #27da93;">Required Documents</h3>
		<div class="col-md-6">
		<ul class="privacy-start">
			<li><a href="#"><i></i>Adhar card & Pan-card of owner, tenant & two witness</a></li>
			<li><a href="#"><i></i>Light bill/index II / Property tax receipt of the property to be rented out </a></li>
			<li><a href="#"><i></i>This documents are compulsory for online registration</a></li>
		</ul>
		</div>
		<div class="col-md-6">
			<p>
				If mentioned documents are not available contact to your personal manager OR call +91 88885-99993 
			</p>
		</div>
		<div class="clearfix"></div>
		
		<br/>
		<div class="col-md-6" id="calculator">
		<h4 style="text-align:center"><br/>Rental Agreement Cost Calculator</h4><br/>
			<div style="padding: 30px;
    border: 5px solid #27da93;
    border-radius: 20px;
    background: rgba(204, 204, 204, 0.15);
	box-shadow:5px 5px 5px #aba8a8;
">
			
			<br/>
			
			<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="form-group">
					<label class="control-label col-sm-6" for="pwd">License Period in Months:</label>
					<div class="col-sm-6"> 
					  <input type="text" name="lp" class="form-control" id="months" placeholder="eg. 11">
						<p style="display:none"></p>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-6" for="email">Average Monthly Rent:</label>
					<div class="col-sm-6">
					  <input type="text" name="ar" class="form-control" id="rent" placeholder="eg. 0">
						<p style="display:none"></p>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-6" for="pwd">Refundable Deposit:</label>
					<div class="col-sm-6"> 
					  <input type="text" name="rd" class="form-control" id="deposit" placeholder="eg. 0">
						<p style="display:none"></p>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-6" for="email">Non-Refundable Deposit:</label>
					<div class="col-sm-6">
					  <input type="text" name="nrd" class="form-control" id="ndeposit" placeholder="eg. 0">
						<p style="display:none"></p>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-6" for="pwd">Property Located In:</label>
					<div class="col-sm-6"> 
					  <select id="loc" name="loc" class="form-control">
						<option value="">Select Property</option>
						<option value="urban">Urban</option>
						<option value="ruler">Ruler</option>
					  </select>
					  <p style="display:none"></p>
					  <br/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-6" for="pwd">&nbsp;</label>
					<div class="col-sm-6"> 
					  <input name="cal" style="border-color:#27da93; background:#27da93" onClick="return empty()" class="btn btn-primary" type="submit" value="Calculate" />
					</div>
				  </div>
				</form>	 	
				<?php
		
			if(isset($_POST['cal']))
				{
					
										
					$l=$_POST['lp'];
					$a=$_POST['ar'];
					$r=$_POST['rd'];
					$n=$_POST['nrd'];
					$loc=$_POST['loc'];
					
					$_SESSION['l']=$l;
					$_SESSION['a']=$a;
					$_SESSION['r']=$r;
					$_SESSION['loc']=$loc;
					
					if($loc=="urban")
					{
						$z=1000;
					}
					else
					{
						$z=500;
					}
					
					$rd=(10/100)*$r;
					$x=($l*$a)+$rd+$n;
					
					$y=$x*0.0250;
					
					$tempinter=(10/100)*$y;
					
					$fru=$tempinter+$z+1200;
					$fo=$tempinter+$z+1500;
					
					$_SESSION['fru']=$fru;
					$_SESSION['fo']=$fo;
					
					echo "
					<script>
							$(function() {
								$('#myModal2').modal('show');
								$('html, body').animate({
									scrollTop: $('#calculator').offset().top
								}, 2);
							 });
					</script>
					";
					
				}
		
		?>	
			
				  <div class="form-group">
					<label class="control-label col-sm-6" for="email">
					<?php
						if(isset($_SESSION['name']))
						{
							$name=$_SESSION['name'];
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
							if(isset($owner) && isset($tenant))
							{
								echo "For registered users:";
							}
							else
							{
								if(isset($owner))
								{		
									echo "For property posted owners:";
								}
								else
								{		
									echo "For plan purchase tenant:";
								}
							}
						}
						else
						{
							echo "For registered users:";
						}
						
					?>
				  
					</label>
					<div class="col-sm-6">
					  <input type="text" class="form-control" name="forreg" id="val3" value="<?php if(isset($_SESSION['fru'])){ $f=$_SESSION['fru']; echo $f; } else{ echo " ";} ?>" readonly="">
					</div>
					<br/><br/>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-6" for="pwd">For others:</label>
					<div class="col-sm-6"> 
					  <input type="text" class="form-control" name="other" id="val4" value="<?php if(isset($_SESSION['fo'])){ $ff=$_SESSION['fo']; echo $ff; } else{ echo " ";} ?>" readonly="">
					</div>
				  </div>
				  <P style="text-decoration:underline">
					<?php
					if(isset($_SESSION['ii']))
					{
						if($_SESSION['ii']==1)
							echo "<a href='owner_dashboard.php'>Post Your Property</a>";
						else
							echo "<a href='tenant_dashboard.php'>Purchase Fair-Plan</a>";	
					}
					?>
				  </p>
				  <p>
				  
<b>*</b> (Charges inclusive of all eg. Stamp duty, Registration, Advisory, Convienience charge and other charges etc.) <br/>
<b>*</b> (No hidden charges)
				  </p>
				  
				
			
			</div>
			
		</div>
		
		<div class="col-md-6">
		<h4 style="text-align:center">Invite Us To Execute Rental Agreement At Your Place</h4><br/>
			<div style="padding: 30px;
    border: 5px solid #27da93;
    border-radius: 20px;
    background: rgba(204, 204, 204, 0.15);
	box-shadow:5px 5px 5px #aba8a8;min-height: 596px;
">
			
			<br/>
			<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				  <div class="form-group">
					<label class="control-label col-sm-4"><span style="color:red">*</span>Name:</label>
					<div class="col-sm-8">
					  <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4"><span style="color:red">*</span>Email:</label>
					<div class="col-sm-8"> 
					  <input type="text" name="email" class="form-control" placeholder="Enter Email" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4"><span style="color:red">*</span>Mobile:</label>
					<div class="col-sm-8">
					  <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" ><span style="color:red">*</span>Address:</label>
					<div class="col-sm-8">
					  <input type="text" name="address" class="form-control" placeholder="Enter Address" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">&nbsp;</label>
					<div class="col-sm-8"> 
					  <input style="border-color:#27da93; background:#27da93" type="submit" name="req" class="btn btn-primary" value="Contact" >
					</div>
				  </div>
				  
				  
				  
				</form>
				
				<?php
												if(isset($_POST['req']))
												{
													$name=$_POST['name'];
													$email=$_POST['email'];
													$mobile=$_POST['mobile'];
													$address=$_POST['address'];
													
													if(isset($_SESSION['name']))
													{
														$reg="Yes";
													}
													else
													{
														$reg="No";
													}
													
													$query="INSERT INTO `req_agreement`(`id`, `name`, `email`, `mobile`, `address`, `registered`) VALUES ('','".$name."','".$email."','".$mobile."','".$address."','".$reg."')";
													//INSERT INTO `req_agreement`(`id`, `name`, `email`, `mobile`, `address`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
													$upload=  mysqli_query($connection,$query);
														
														if(!$upload)
														{
															echo "<script>alert('Please try again')</script>";
														}
														else
														{
															echo "<script>alert('Thank you for contacting - we are there in 5 hours')</script>";
														}
												}
				?>
				
				<?php
		if(isset($_SESSION['name']))
		{
	?>
	<h1 style="text-align: center; margin-top: 35px; color: #08a064;">" OR "</h1>
	<h4 style="text-align:center; color: #08a064; margin-top: 40px;">Just Call Your Personal Manager, He Will Take Care Of The Rest.</h4>
	<?php
		}
		else
		{
	?>
	<h1 style="text-align: center; margin-top: 35px; color: #08a064;">" OR "</h1>
	<h4 style="text-align:center; color: #08a064; margin-top: 25px; line-height: 1.3em;">Just Give Us A Call At- <br/> 88885-99993 <br/> & <br/> Let us take care of the rest</h4><br/>
	<?php
		}
	?>
				
			</div>
			
			
		</div>
		<div class="clearfix"></div>
		
			<br/>	
		<div class="asked" style="padding:1em 0 2em 0">
	
		<h3 style="font-size: 1.8em; text-transform: uppercase; color: #27da93;">Frequently Asked Questions</h3>	
		<div class="col-md-6">
			<div class="questions">
				<h5>1. Is Online Registered Rent Agreement valid?</h5>
				<p>Yes, Online Registered Rent Agreement is Authorized from government of Maharashtra. Therefore it is valid in all manner. <br/><br/></p>
	        </div>
	</div>
	<div class="col-md-6">
			<div class="questions">
				<h5>2. Is Notary agreement valid?</h5>
				<p>No, Notarised Rent Agreement has no legal value as the laws. It is mandatory to Register leave and licence agreement to safeguard land-lord and tenant as per the rent control act. </p>
			</div>	  			  		    
	</div>
	<div style="clear:both"></div>
	<div class="col-md-6">
			<div class="questions">
				<h5>3. Why Aadhar card is Mandatory?</h5>
				<p>It is required for UID (finger prints) Verification as online no other authentication possible. <br/><br/><br/>  </p>
			</div>			  	    
	</div>
	<div class="col-md-6">
			<div class="questions">
				<h5>4. I am outside Pune, can I execute Online Registered Rent Agreement?</h5>
				<p>In such case you either need to come down Pune or else you can give POA to someone in Pune who can execute Online Registered Rent Agreement on your behalf.</p>
			</div>		  			  		    
	</div>
	<div style="clear:both"></div>
			<div class="col-md-6">
			<div class="questions">
				<h5>5. I don't have Aadhar Card, how can I execute Online Registered Rent Agreement?</h5>
				<p>As Aadhar is mandatory one can execute agreement on family members/Roommate name, or else we have to execute it in nearest Sub Registrar Office.</p>
			</div>				  	    
	</div>
	<div class="col-md-6">
			 <div class="questions">
				<h5>6. Why is it necessary to execute Registered Rent Agreement?</h5>
				<p>As per Rent Control Act of Maharashtra it is compulsory to execute Registered Rent Agreement or else there is a provision, Fine of Rs.5000/- and Imprisonment of 3 months.</p>
			</div>				  			  		    
	</div>
	<div style="clear:both"></div>
			<div class="col-md-6">
			  <div class="questions">
				<h5>7. Is Stamp Paper required for Online Registered Rent Agreement?</h5>
				<p>No, stamp papers are not valid for Rent Agreements. As now we need to pay Stamp Duty and Registration online. <br/><br/> </p>
			</div>
	</div>
	<div class="col-md-6">
			  	<div class="questions">
				<h5>8. How much time required for Online Registered Rent Agreement?</h5>
				<p>On Scheduled day we need 45min - 1hour to complete draft of Online Registered Rent Agreement. Final copy of Registered Rent Agreement will be available for download in your account, if required we can email you the same.</p>
			</div>				  			  		    
	</div>
	<div style="clear:both"></div>
			<div class="col-md-6">
			<div class="questions">
				<h5>9. Is Tenant Police Verification required after Registered Rent Agreement?</h5>
				<p>Yes, Pune Police has made Tenant Police Verification compulsory for each and every tenant whether its Residential or Commercial Property.</p>
			</div>	
			  	    
	</div>
	<div class="col-md-6">
				  			  		    
	</div>
</div>
		
	</div>
</div>
<!--//contact-->


<!-- Modal -->
		  <div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog modal-md">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				
				<div class="modal-body">
				<!--<button style="    position: absolute;
			right: -15px;
			top: -18px;
			background: #FFF;
			border-radius: 50%;
			padding: 3px 6px;
			border: 2px Solid #000; opacity:1;" type="button" class="close" data-dismiss="modal">&times;</button>-->
					<div class="columns" style="border:1px solid #ccc">
					  <ul class="price">
						<li class="header" style="background-color:#b32505">Provide your contact details & get Agreement cost through SMS</li>
					  </ul>
					  <br/>
					  
						<div style="padding:10px">
							 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">I am:</label>
      <div class="col-sm-10">
		<label class="radio-inline">
      <input type="radio" id="owner" value="owner" name="iam" <?php if((isset($_POST['iam'])) && $_POST['iam']=="owner" ) echo ' checked="checked"'?> >A Owner
    </label>
    <label class="radio-inline">
      <input type="radio" id="tenant" value="tenant" name="iam" <?php if((isset($_POST['iam'])) && $_POST['iam']=="tenant" ) echo ' checked="checked"'?> >A Tenant
    </label>
	  </div>
	  
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uname" name="username" placeholder="Enter name" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"  >
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uemail" name="email" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Mobile:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="umobile" name="r_mobile" placeholder="Enter mobile" value="<?php echo isset($_POST['r_mobile']) ? $_POST['r_mobile'] : '' ?>" >
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">&nbsp;</label>
      <div class="col-sm-10">
		<!--<a href="">CLICK HERE (For Generate OTP)</a>-->
		<input type="submit" id="otpsend" onClick="return rone()" name="sendotp" value="" style="background:url('images/agreeclick.png'); background-size:100% 100%; border:none; color: #FFF; width:250px; height: 35px;" />
		
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">OTP:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="uotp" name="r_otp" placeholder="Enter OTP">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button name="create_account" id="create" type="submit" onClick="return rtwo()" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-primary" data-dismiss="modal" style="margin-left:10px;">Cancel</button>
      </div>
	  
    </div>
  </form>
  
	<?php
	
		if(isset($_POST['sendotp']))
		{
			$iam=$_POST['iam'];
			$name=$_POST['username'];
			$email=$_POST['email'];
			$mobile=$_POST['r_mobile'];
			
			$_COOKIE['mobile']= $mobile;
			$_COOKIE['otp']=rand(1000, 9999);
			$_SESSION["a1"]=$_COOKIE['otp'];
			echo "
				<script>
					$(document).ready(function() {
						swal({ 
							title:'Thank you...',
							text:'We have send you OTP (One Time Password) on your given mobile through SMS, Please enter it!',
							type:'success' 
							},function() {
								document.getElementById('uotp').focus();
								$('html, body').animate({
									scrollTop: $('#calculator').offset().top
								}, 2);
								$('#myModal2').modal('show');
								
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
		if(isset($_POST['create_account']))
		{
			$iam=$_POST['iam'];
			$name=$_POST['username'];
			$email=$_POST['email'];
			$mobile=$_POST['r_mobile'];
			$temp=$_POST['r_otp'];
			$m=$_SESSION["a1"];
			
			if($m == $temp)
			{
				if($iam=='owner')
				{
					$_SESSION['ii']=1;
					$qu="SELECT mobile FROM `registation` where mobile = '$mobile'";
					$sql = @mysqli_query($connection,$qu);
					$row=@mysqli_fetch_row($sql);
					$m=$row[0];
					$flag=0;
					if(isset($m))
					{
						$flag=1;
					}
					if($flag==0)
					{
						$date=date("d/m/Y");
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
						$query="INSERT INTO `registation`(`id`, `name`, `email`, `mobile`, `flow_id`, `pd_id`, `date`, `fromwhere`) VALUES ('','".$name."','".$email."','".$mobile."','".$i."','0','".$date."','Agreement Page')";
						$upload=  mysqli_query($connection,$query);
						//echo "<script>window.location.href='agreement.php'</script>";
						
						//send message agre cost
					$name=$_SESSION['name'];
					$month=$_SESSION['l'];
					$rent=$_SESSION['a'];
					$deposit=$_SESSION['r'];
					$location=$_SESSION['loc'];
					$cosst=$_SESSION['fru'];
					
											$msg="Dear $name,\n Considering your Average monthly rent Rs-$rent Refundable deposit Rs-$deposit and property located in $location area. The final expenses for Door-step Registered Rent Agreement of $month months is only Rs-$cosst for our registered users(no hidden charges). For more details login to your RoomsOnRent account, click- www.roomsonrent.in/agreement.php Feel free to call for any help and questions.\nRegards\nTeam RoomsOnRent\n9595567981";
											$_COOKIE['mobile']= $mobile;
											$_COOKIE['msg']=$msg;
											include_once("otpsendnew.php");

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
						//end
						
						echo "
							<script>
								$(document).ready(function() {
									swal({ 
										title:'Thank you...',
										text:'We send you agreement cost on your given mobile through SMS',
										type:'success' 
										},function() {
											window.location.href='agreement.php';
										});
								});
							</script>
						";
						
					}
					else
					{
						$_SESSION['name']=$name;
						
						//send agree cost
						
						$name=$_SESSION['name'];
					$month=$_SESSION['l'];
					$rent=$_SESSION['a'];
					$deposit=$_SESSION['r'];
					$location=$_SESSION['loc'];
					$cosst=$_SESSION['fru'];
					
											$msg="Dear $name,\n Considering your Average monthly rent Rs-$rent Refundable deposit Rs-$deposit and property located in $location area. The final expenses for Door-step Registered Rent Agreement of $month months is only Rs-$cosst for our registered users(no hidden charges). For more details login to your RoomsOnRent account, click- www.roomsonrent.in/agreement.php Feel free to call for any help and questions.\nRegards\nTeam RoomsOnRent\n9595567981";
											$_COOKIE['mobile']= $mobile;
											$_COOKIE['msg']=$msg;
											include_once("otpsendnew.php");

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
						
						//end
						
						echo "
							<script>
								swal({ 
										title:'Thank you...',
										text:'We send you agreement cost on your given mobile through SMS',
										type:'success' 
										}),function() {
												window.location.href='agreement.php';
											});
							</script>
						";
					}
					
				}
				if($iam=='tenant')
				{
					$_SESSION['ii']=2;
					$qu="SELECT mobile FROM `tenant_reg` where mobile = '$mobile'";
					$sql = @mysqli_query($connection,$qu);
					$row=@mysqli_fetch_row($sql);
					$m=$row[0];
					$flag=0;
					if(isset($m))
					{
						$flag=1;
					}
					if($flag==0)
					{
						$date=date("d/m/Y");
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
						$query="INSERT INTO `tenant_reg`(`id`, `name`, `email`, `mobile`, `flow_id`, `pd_id`, `date`, `fromwhere`) VALUES ('','".$name."','".$email."','".$mobile."','".$i."','0','".$date."','Agreement Page')";
						$upload=  mysqli_query($connection,$query);
						//echo "<script>window.location.href='agreement.php'</script>";
						
						//send message agre cost
					$name=$_SESSION['name'];
					$month=$_SESSION['l'];
					$rent=$_SESSION['a'];
					$deposit=$_SESSION['r'];
					$location=$_SESSION['loc'];
					$cosst=$_SESSION['fru'];
					
											$msg="Dear $name,\n Considering your Average monthly rent Rs-$rent Refundable deposit Rs-$deposit and property located in $location area. The final expenses for Door-step Registered Rent Agreement of $month months is only Rs-$cosst for our registered users(no hidden charges). For more details login to your RoomsOnRent account, click- www.roomsonrent.in/agreement.php Feel free to call for any help and questions.\nRegards\nTeam RoomsOnRent\n9595567981";
											$_COOKIE['mobile']= $mobile;
											$_COOKIE['msg']=$msg;
											include_once("otpsendnew.php");

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
						//end
						
						echo "
							<script>
								$(document).ready(function() {
									swal({ 
										title:'Thank you...',
										text:'We send you agreement cost on your given mobile through SMS',
										type:'success' 
										},function() {
											window.location.href='agreement.php';
										});
								});
							</script>
						";
						
					}
					else
					{
						$_SESSION['name']=$name;
						
						//send agree cost
						
						$name=$_SESSION['name'];
					$month=$_SESSION['l'];
					$rent=$_SESSION['a'];
					$deposit=$_SESSION['r'];
					$location=$_SESSION['loc'];
					$cosst=$_SESSION['fru'];
					
											$msg="Dear $name,\n Considering your Average monthly rent Rs-$rent Refundable deposit Rs-$deposit and property located in $location area. The final expenses for Door-step Registered Rent Agreement of $month months is only Rs-$cosst for our registered users(no hidden charges). For more details login to your RoomsOnRent account, click- www.roomsonrent.in/agreement.php Feel free to call for any help and questions.\nRegards\nTeam RoomsOnRent\n9595567981";
											$_COOKIE['mobile']= $mobile;
											$_COOKIE['msg']=$msg;
											include_once("otpsendnew.php");

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
						
						//end
						
						echo "
							<script>
								swal({ 
										title:'Thank you...',
										text:'We send you agreement cost on your given mobile through SMS',
										type:'success' 
										}),function() {
												window.location.href='agreement.php';
											});
							</script>
						";
					}
				}
			}
			else
			{
					echo "<script>swal('Oops...', 'Enter Correct OTP!', 'error');</script>";
					echo "
					<script type='text/javascript'> 
						$(function() {                     
						  document.getElementById('uotp').focus();
								$('html, body').animate({
									scrollTop: $('#calculator').offset().top
								}, 2);
								$('#myModal2').modal('show');
						}); 
					  </script>   
				";
			}
			
		}
	
	?>
  
  
  
						</div>
					  
					  <br/>
					  <p> &nbsp;<br/></p>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		  
		  
		  <!--end-->
  
		  
<!--footer-->
<div class="footer">

	<div class="footer-bottom">
		<div class="container">
			
			<div class="col-md-8">
				<p style="color:#FFF">© 2017 Room On Rent. All Rights Reserved</p>
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
function empty() {
    var x;
    x = document.getElementById("months").value;
    if (x == "") {
        alert("please enter months");
        return false;
    };
	
	var y;
    y = document.getElementById("rent").value;
    if (y == "") {
        alert("please enter rent");
        return false;
    };
	
	var z;
    z = document.getElementById("deposit").value;
    if (z == "") {
        alert("please enter deposit");
        return false;
    };
	
	var a;
    a = document.getElementById("ndeposit").value;
    if (a == "") {
        alert("please enter non-refundable deposit");
        return false;
    };
	
	var b;
    b = document.getElementById("loc").value;
    if (a == "") {
        alert("please select property located in");
        return false;
    };
}
</script>


<script>
$(document).ready(function()
{
	$('#loader').hide();
});
</script>
<script>
$(document).ready(function()
{
	$('form').submit(function()
	{
		$('#loader').show();
	});
});
</script>
<?php
	if(isset($_SESSION['fru']))
	{
		echo "
			<script>
				$(document).ready(function() {
						$('html, body').animate({
							scrollTop: $('#calculator').offset().top
						}, 2);
				});
			</script>	
		";
	}
?>
</body>
</html>