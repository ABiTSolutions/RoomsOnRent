<?php
session_Start();
include('conn.php');

$name=$_GET['name'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];
$id=$_GET['id'];	

$qu="SELECT * FROM `registation` where pd_id = '$id'";
										$sql = @mysqli_query($connection,$qu);
										while($row=@mysqli_fetch_array($sql))
										{
											$oname=$row['name'];
											$omobile=$row['mobile'];
											$oemail=$row['email'];
										}

$tenant=$_SESSION['name'];
$qu="SELECT * FROM `tenant_reg` where name = '$tenant'";
										$sql = @mysqli_query($connection,$qu);
										while($row=@mysqli_fetch_array($sql))
										{
											$tname=$row['name'];
											$tmobile=$row['mobile'];
											$temail=$row['email'];
										}

											$msg="Hi $oname,\n congratulations!! You have received a tenant inquiry.\n Tenant Name-$tname \n Mobile No.- $tmobile \n If your property has been rented out call your personal relationship manager to stop receiving unwanted inquiries and calls. \n www.roomsonrent.in";  
											$_COOKIE['mobile']= $mobile;
											$_COOKIE['msg']=$msg;
											include_once("sendtoowner.php");

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
											
											//for mail sending
											$mssg="Hi $oname,\n congratulations!! You have received a tenant inquiry.\n Tenant Name-$tname \n Mobile No.- $tmobile \n If your property has been rented out call your personal relationship manager to stop receiving unwanted inquiries and calls. \n www.roomsonrent.in";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											

											//send to tenant
											

											$msg="Hi $tname, \n you have just contacted owner. \n Owner Name- $oname \n Mobile No.- $omobile \n Contact us for Rs. 300/- discount on Rental Agreement once you get your home. \n Thanks for using roomsonrent.in";  
											$_COOKIE['mobile']= $tmobile;
											$_COOKIE['msg']=$msg;
											include_once("sendtoowner.php");

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
											
											//for mail sending
											$mssg="Hi $tname, \n you have just contacted owner. \n Owner Name- $oname \n Mobile No.- $omobile \n Contact us for Rs. 300/- discount on Rental Agreement once you get your home. \n Thanks for using roomsonrent.in";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $temail;
											include_once("mail.php");
		
		echo "<script>alert('We shar your details with owner')</script>";
		
		$sname=$_SESSION['name'];
		$date=date("d/m/Y");
		$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$sname','$date','Exchange contact details with $name')";
		$in=mysqli_query($connection,$qu);
		
		echo "<script>window.location.href='index.php'</script>";

?>