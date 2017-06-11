<?php
session_start();
include('conn.php');
$name=$_SESSION['name'];
$query="SELECT * FROM `registation` where name = '$name'";
$sql = @mysqli_query($connection,$query);
while($row = mysqli_fetch_array($sql))
{
	$pd_id=$row['pd_id'];
	$mobile=$row['mobile'];
	$name=$row['name'];
}
$reg_u="UPDATE property_details SET a_status = 0 WHERE property_id = '$pd_id'";
$reg_i=mysqli_query($connection,$reg_u);

$date=date("d/m/Y");
$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','Inactive the property of property id:- $pd_id')";
$in=mysqli_query($connection,$qu);


$msg="Dear $name,\nYour property Id $pd_id ad is successfully reactivated. We will start sending you new tenant inquires. Feel free to contact us for Rent agreement. Thanks for having Trust on us. www.roomsonrent.in  \n\nRegards\nTeam RoomsOnRent";
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




//echo "<script>alert('Your Property is Activate')</script>";
echo "<script>window.location.href='owner_dashboard.php'</script>";

?>