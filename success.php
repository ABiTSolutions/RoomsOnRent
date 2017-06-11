<?php
	session_start();
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Profile</title>
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
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<style>
.font18
{
	font-size:18px !important;
	margin-top:7px;
	margin-bottom:10px;
}
</style>
</head>
<body>
<!--header-->
<?php
			include('head.php');
?>
<!--//-->	
<?php

$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="GQs7yium";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
		 
       if ($hash != $posted_hash) {
	       //echo "Invalid Transaction. Please try again";
		   }
	   else {
           	   
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
           
		   }         
		   
		   
		   if(isset($_SESSION['name']))
		   {
				$date=date("d/m/Y");
				$name=$_SESSION['name'];
				$reg_u="UPDATE tenant_reg SET pd_id = '1', planc=15, date='$date' WHERE name = '$name'";
								
				//$n=$_SESSION['name'];
						$query = "SELECT * FROM `tenant_reg` WHERE name= '$name'";
						$sql = @mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql))
						{
							$id=$row['id'];
							$manager=$row['manager'];
							$mobile=$row['mobile'];
						}
				
						$msg="Dear $name,\n Thanks for purchasing fair-plan, Now you can enjoy our services and also get Rs.300 discount on rental agreement. Feel free to call. www.fairowner.com  \n\nRegards\nTeam Fair-Owner";
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


		$rqy1="SELECT ten_id FROM `sub_admin` where name = '$manager'";
		$rsl1 = @mysqli_query($connection,$rqy1);
		$row1 = mysqli_fetch_row($rsl1);
		$p_id=$row1[0];
																						
		$pid=$p_id.''.$id.',';
		$reg_u1="UPDATE `sub_admin` SET ten_id = '$pid' WHERE name = '$manager'";
		$reg_i1=mysqli_query($connection,$reg_u1);		
				
				//$name=$_SESSION['subadminname'];
				$date=date("d/m/Y");
				$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','He Purchase Plan')";
				$in=mysqli_query($connection,$qu);
				
				$reg_i=mysqli_query($connection,$reg_u);
		   }
		   
		   
?>
<div class="loan_single" style="background:rgba(39, 218, 147, 0.15)">
	<div class="container">
		<div class="col-md-12">
			
			<div style="margin-top:70px">
			
		
			       <div class="container">
				   <br/><br/><br/>
				   <h3 style="text-align:center">Hi <?php echo $_SESSION['name'] ?>, Thank you for purchasing our plan. Now you can enjoy our services. <br/><br/></h3>
				    <div class="col-md-12">
					    <div style="margin:0 auto; width:300px">
							<img src="images/successful.png" class="img-responsive" />	<br/><br/>
							<p style="font-size:24px; text-align:center"><a href="index.php">Go-to Home</a></p><br/>
						</div><br/><br/>
					</div>
					
					
</div>
<hr>
			
			</div>
		
		</div>
		
		
		<div class="clearfix"> </div>
	</div>
</div>

<!--footer-->
<?php
	include('footer.php');
?>
<!--//footer-->

</body>
</html>