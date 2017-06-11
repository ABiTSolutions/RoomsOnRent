<?php
session_start();
include('conn.php');
include('out1.php');
$id=$_POST['id'];

$manager=$_POST['subadmin'];
if(isset($_POST['assign']))
{
	$manager=$_POST['subadmin'];
	$id=$_POST['id'];
	
	//echo $manager;
	//echo $id;
	
	$rqy1="SELECT ten_id FROM `sub_admin` where name = '$manager'";
	$rsl1 = @mysqli_query($connection,$rqy1);
	$row1 = mysqli_fetch_row($rsl1);
	$p_id=$row1[0];
	
	//echo $p_id;
	if(preg_match('/\b' . $id . '\b/', $p_id))
	{
		echo "<script>alert('Tenant is already assign')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	else
	{
		$pid=$p_id.''.$id.',';
		$reg_u1="UPDATE `sub_admin` SET ten_id = '$pid' WHERE name = '$manager'";
		$reg_i1=mysqli_query($connection,$reg_u1);
		
		$oq="UPDATE `tenant_reg` SET `manager`='$manager' WHERE id = '$id' ";
		$ou=mysqli_query($connection,$oq);
		
		if(!$reg_i1 && !ou)
		{
			echo "<script>alert('Tenant not assign')</script>";
			echo "<script>window.location.href='agreetenant.php'</script>";
		}
		else
		{
			echo "<script>alert('Tenant assign')</script>";
			echo "<script>window.location.href='agreetenant.php'</script>";
		}	
	}
}

if(isset($_POST['uploadagre']))
{
	$id=$_POST['id'];
	
	$query="SELECT * from `tenant_reg` WHERE id = '$id'";
	$sql = @mysqli_query($connection,$query);
	while($row=@mysqli_fetch_array($sql))
	{
		$targetfolder=$row['agre'];
		$targetfolder1=$row['indexii'];
		$targetfolder2=$row['recep'];
		$targetfolder3=$row['powerofauto'];
	}
	
	if(!empty($_FILES["agree"]["name"]))
	{
		$a=rand(1000,9999);
		$targetfolder = "agreement/";
		$file_name=$_FILES['agree']['name'];
		$ext=pathinfo($file_name,PATHINFO_EXTENSION);
		$imagename=date("d-m-Y").$a."-".time().".".$ext;
		$targetfolder = $targetfolder . $imagename ;
		move_uploaded_file($_FILES['agree']['tmp_name'], $targetfolder);
	}
	if(!empty($_FILES["powerof"]["name"]))
	{
		$a=rand(1000,9999);
		$targetfolder1 = "agreement/";
		$file_name1=$_FILES['powerof']['name'];
		$ext1=pathinfo($file_name1,PATHINFO_EXTENSION);
		$imagename1=date("d-m-Y").$a."-".time().".".$ext1;
		$targetfolder1 = $targetfolder1 . $imagename1 ;
		move_uploaded_file($_FILES['powerof']['tmp_name'], $targetfolder1);
	}
	if(!empty($_FILES["indexii"]["name"]))
	{
		$a=rand(1000,9999);
		$targetfolder2 = "agreement/";
		$file_name2=$_FILES['indexii']['name'];
		$ext2=pathinfo($file_name2,PATHINFO_EXTENSION);
		$imagename2=date("d-m-Y").$a."-".time().".".$ext2;
		$targetfolder2 = $targetfolder2 . $imagename2 ;
		move_uploaded_file($_FILES['indexii']['tmp_name'], $targetfolder2);
	}
	if(!empty($_FILES["receipt"]["name"]))
	{
		$a=rand(1000,9999);
		$targetfolder3 = "agreement/";
		$file_name3=$_FILES['receipt']['name'];
		$ext3=pathinfo($file_name3,PATHINFO_EXTENSION);
		$imagename3=date("d-m-Y").$a."-".time().".".$ext3;
		$targetfolder3 = $targetfolder3 . $imagename3 ;
		move_uploaded_file($_FILES['receipt']['tmp_name'], $targetfolder3);
	}
	
	$astatus=$_POST['sagre'];
	$remark=$_POST['remark'];
	$query="UPDATE `tenant_reg` SET `agre`='$targetfolder',`indexii`='$targetfolder1',`recep`='$targetfolder2',`powerofauto`='$targetfolder3' WHERE id = '$id'";
	
	$upload=  mysqli_query($connection,$query);
	if(!$upload)
	{
		echo "<script>alert('Please try again')</script>";
	}
	else
	{
		echo "<script>alert('Agreements are uploaded')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
}

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$astatus=$_POST['sagre'];
	$remark=$_POST['remark'];
	$follow_date=$_POST['follow_date'];
	$query="UPDATE `tenant_reg` SET `agre_status`='$astatus',`remark`='$remark',`follow_date`='$follow_date' WHERE id = '$id'";
	
	$upload=  mysqli_query($connection,$query);
	if(!$upload)
	{
		echo "<script>alert('Please try again')</script>";
	}
	else
	{
		echo "<script>alert('Status Updated')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
}
if(isset($_POST['sendstage']))
{
	$sendmm=$_POST['sendmm'];
	$id=$_POST['id'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	
	$qu="SELECT * FROM `tenant_reg` where id= $id";
	$sql = @mysqli_query($connection,$qu);
	while($row=@mysqli_fetch_array($sql))
	{
		$tname=$row['name'];
		$manager=$row['manager'];
	}
	
	if(preg_match('/[A-Z]+[a-z]+[0-9]+/', $tname))
		{ 
			$tname=substr($tname, 0, -2);
		}
		else
		{ 
			$tname=$tname;
		}
	
	$qu="SELECT * FROM `sub_admin` where name= '$manager'";
	$sql = @mysqli_query($connection,$qu);
	while($row=@mysqli_fetch_array($sql))
	{
		$mname=$row['name'];
		$mmobile=$row['mobile'];
		$memail=$row['email'];
	}
	
	if($sendmm=='stage01')
	{
											$msg="Are you looking for Brokerage-Free home on Rent? Kindly Visit roomsonrent.in to get 100 percent Brokerage-Free Homes on rent across Pune. Also get Free Consultation by experts on Registered Rental Agreement and tenant-police verification.";
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
											
											//for mail sending
											$mssg="Stage-1 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
											
		//echo "<script>alert('STAGE-1')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage21')
	{
											$msg="Dear $tname,\n 
											Want to save Brokerage?\n
											Contact genuine owners without a Broker. Also get free-consultation on Register Rent Agreement and tenant police verification. Visit today roomsonrent.in.";
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
											
											//for mail sending
											$mssg="Stage-2 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-2')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage22')
	{
											$msg="Dear $tname,\n Kindly visit roomsonrent.in and find Brokerage-Free properties on rent across Pune. And also get the free Consultation on Registered Rent Agreement and Police Verification.";
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
											
											//for mail sending
											$mssg="Stage-2 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-2')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage23')
	{
											$msg="Dear $tname,\n You are missing the Number of Brokerage-Free properties posted every day. Kindly visit roomsonrent.in to get more details about available properties and also get Rs.300 benefit in our Doorstep Agreement Service.";
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
											
											//for mail sending
											$mssg="Stage-2 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-2')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage3')
	{
	
											$msg="Dear $tname,\n Your account has been successfully created on 100 percent Brokerage-Free property portal roomsonrent.in. Founders of RoomsOnRent have appointed me as your Personal Relationship Manager for your RoomsOnRent account and I will be always available to help you without any commercial mindset. Please feel free to contact me for any assistance regarding- finding brokerage-free home, Creating Registered Rental Agreement and doing Tenant-police verification. \nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-3 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
	
		//echo "<script>alert('STAGE-3')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage41')
	{
		$msg="Dear $tname,\n
Are you still looking for Brokerage-Free home? Keep visiting roomsonrent.in for latest properties available for rent.
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-4 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		//echo "<script>alert('STAGE-4')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage42')
	{
		$msg="Dear $tname,\n
Save Rs.300 on Door-step Registered Rental Agreement.Find Brokerage-Free homes on roomsonrent.in and also get assistance in Tenant Verification. Keep visiting for latest Property updates 
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-4 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		//echo "<script>alert('STAGE-4')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage43')
	{
		$msg="Dear $tname,\n
Are you getting Brokerage-Free properties on roomsonrent.in ?
If not, kindly inform us. We will assist you to find better. Purchase the Rs.100/- Our-Plan and get Rs.300/- Benefit on our Door-step Register Rent Agreement service.
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-4 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		//echo "<script>alert('STAGE-4')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage44')
	{
		$msg="Dear $tname,\n
No need to visit Registrar office for agreement as 24*7
Door-step Registered Rental Agreement service is now
Available in your city.
To Calculate agreement Cost Click roomsonrent.in/agreement.php
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-4 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		//echo "<script>alert('STAGE-4')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage45')
	{
		$msg="Dear $tname,\n Notary Rent Agreements are not valid any more. 
Registered Rental Agreement and Tenant verification is compulsory as per new rules of Maharashtra Government. Visit us for door-step service and avail benefit of Rs.300 if you have purchased our Rs.100/- Our-Plan.Calculate your agreement Cost by Clicking roomsonrent.in/agreement
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-4 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		//echo "<script>alert('STAGE-4')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage46')
	{
		$msg="Dear $tname,\n
Calculate Your Register Rent Agreement Cost.
Purchase Our-Plan for Rs100 to get assured 25 Brokerage-Free Properties and get Rs.300 benefit on our Door-step Registered Agreement Service and also assistance in tenant verification. To Calculate Cost Click roomsonrent.in/agreement.php
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-4 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		//echo "<script>alert('STAGE-4')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage5')
	{
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
											
		//echo "<script>alert('STAGE-5')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage51')
	{
											$msg="Dear $tname,\n
You will get Rs.300 benefit on agreement cost as you have already purchased our Plan.
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";

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
											
											//for mail sending
											$mssg="Stage-5 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
											
		//echo "<script>alert('STAGE-5')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage6')
	{
		$msg="Dear $tname,\n
Congratulations!!\n for your new Home, and thank you for choosing us to help you regarding  Registered Rental Agreement . Kindly Confirm the Date, Time and Location for the execution of your Agreement.  To calculate your agreement cost click on roomsonrent.in/agreement.php. It will be our immense pleasure to provide you transparent, cost effective, time saving and hassle-free service. Looking forward for life-time relation with you.
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-6 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
											
		//echo "<script>alert('STAGE-6')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage61')
	{
		$msg="Dear $tname,\n
As Per our telephonic conversation I have uploaded the Standard Draft of Agreement to your RoomsOnRent account which is in a favor of tenant. Kindly login and download the draft (We can make changes if required). Please Confirm Prior appointment for better service. Looking forward for life-time relation with you.
\nRegards\n Your Personal Manager\n $mname\n $mmobile\n Team RoomsOnRent";
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
											
											//for mail sending
											$mssg="Stage-6 Mail is Send to tenant";
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
											
		//echo "<script>alert('STAGE-6')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage7')
	{
													
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-7')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage8')
	{											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
	
		//echo "<script>alert('STAGE-8')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage9')
	{
											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
	
		//echo "<script>alert('STAGE-9')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage10')
	{											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-10')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage11')
	{											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-10')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	if($sendmm=='stage12')
	{											
											$date=date("d/m/Y");
											$query="UPDATE `tenant_reg` SET `stage`='$sendmm',`stage_date`='$date' where id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-10')</script>";
		echo "<script>window.location.href='agreetenant.php'</script>";
	}
	
	
}

 ?>