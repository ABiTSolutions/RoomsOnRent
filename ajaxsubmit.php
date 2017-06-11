<?php
session_start();
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$mobile2=$_POST['mobile1'];


$_COOKIE['mobile']= $mobile2;
$_COOKIE['otp']=rand(1000, 9999);
$_COOKIE['a1']=$_COOKIE['otp'];
										

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

?>