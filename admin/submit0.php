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
	
	$rqy1="SELECT p_id FROM `sub_admin` where name = '$manager'";
	$rsl1 = @mysqli_query($connection,$rqy1);
	$row1 = mysqli_fetch_row($rsl1);
	$p_id=$row1[0];
	
	//echo $p_id;
	if(preg_match('/\b' . $id . '\b/', $p_id))
	{
		echo "<script>alert('Property is already assign')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	else
	{
		$pid=$p_id.''.$id.',';
		$reg_u1="UPDATE `sub_admin` SET p_id = '$pid' WHERE name = '$manager'";
		$reg_i1=mysqli_query($connection,$reg_u1);
		
		$oq="UPDATE `registation` SET `manager`='$manager' WHERE pd_id = '$id' ";
		$ou=mysqli_query($connection,$oq);
		
		if(!$reg_i1 && !$ou)
		{
			echo "<script>alert('property not assign')</script>";
			echo "<script>window.location.href='s_owner_details.php'</script>";
		}
		else
		{
			echo "<script>alert('property assign')</script>";
			echo "<script>window.location.href='s_owner_details.php'</script>";
		}	
	}
}


if(isset($_POST['uploadagre']))
{
	$id=$_POST['id'];
	
	$query="SELECT * from `registation` WHERE id = '$id'";
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
		$targetfolder = "agreement/";
		$file_name=$_FILES['agree']['name'];
		$ext=pathinfo($file_name,PATHINFO_EXTENSION);
		$imagename=date("d-m-Y")."-".time().".".$ext;
		$targetfolder = $targetfolder . $imagename ;
		move_uploaded_file($_FILES['agree']['tmp_name'], $targetfolder);
	}
	if(!empty($_FILES["powerof"]["name"]))
	{
		$targetfolder1 = "agreement/";
		$file_name1=$_FILES['powerof']['name'];
		$ext1=pathinfo($file_name1,PATHINFO_EXTENSION);
		$imagename1=date("d-m-Y")."-".time().".".$ext1;
		$targetfolder1 = $targetfolder1 . $imagename1 ;
		move_uploaded_file($_FILES['powerof']['tmp_name'], $targetfolder1);
	}
	if(!empty($_FILES["indexii"]["name"]))
	{
		$targetfolder2 = "agreement/";
		$file_name2=$_FILES['indexii']['name'];
		$ext2=pathinfo($file_name2,PATHINFO_EXTENSION);
		$imagename2=date("d-m-Y")."-".time().".".$ext2;
		$targetfolder2 = $targetfolder2 . $imagename2 ;
		move_uploaded_file($_FILES['indexii']['tmp_name'], $targetfolder2);
	}
	if(!empty($_FILES["receipt"]["name"]))
	{
		$targetfolder3 = "agreement/";
		$file_name3=$_FILES['receipt']['name'];
		$ext3=pathinfo($file_name3,PATHINFO_EXTENSION);
		$imagename3=date("d-m-Y")."-".time().".".$ext3;
		$targetfolder3 = $targetfolder3 . $imagename3 ;
		move_uploaded_file($_FILES['receipt']['tmp_name'], $targetfolder3);
	}
	
	$astatus=$_POST['sagre'];
	$remark=$_POST['remark'];
	$query="UPDATE `registation` SET `agre`='$targetfolder',`indexii`='$targetfolder1',`recep`='$targetfolder2',`powerofauto`='$targetfolder3' WHERE pd_id = '$id'";
	
	$upload=  mysqli_query($connection,$query);
	if(!$upload)
	{
		echo "<script>alert('Please try again')</script>";
	}
	else
	{
		echo "<script>alert('Agreements are uploaded')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
}

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$astatus=$_POST['sagre'];
	$remark=$_POST['remark'];
	$follow_date=$_POST['follow_date'];
	$query="UPDATE `registation` SET `agre_status`='$astatus',`remark`='$remark',`follow_date`='$follow_date' WHERE pd_id = '$id'";
	
	$upload=  mysqli_query($connection,$query);
	if(!$upload)
	{
		echo "<script>alert('Please try again')</script>";
	}
	else
	{
		echo "<script>alert('Status Updated')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
}
if(isset($_POST['sendstage']))
{
	$sendmm=$_POST['sendmm'];
	$id=$_POST['id'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	
	$qu="SELECT * FROM `registation` where pd_id= '$id'";
	$sql = @mysqli_query($connection,$qu);
	while($row=@mysqli_fetch_array($sql))
	{
		$oname=$row['name'];
		$manager=$row['manager'];
		$p_id=$row['pd_id'];
	}
	
	if(preg_match('/[A-Z]+[a-z]+[0-9]+/', $oname))
		{ 
			$oname=substr($oname, 0, -2);
		}
		else
		{ 
			$oname=$oname;
		}
	
	$qu1="SELECT * FROM `sub_admin` where name= '$manager'";
	$sql1 = @mysqli_query($connection,$qu1);
	while($row1=@mysqli_fetch_array($sql1))
	{
		$mname=$row1['name'];
		$mmobile=$row1['mobile'];
		$memail=$row1['email'];
	}
	
	if($sendmm=='stage1')
	{
											$msg="We are just a click away, post your property on brokerage-free platform to avail benefits in Finding Tenants, Registered rental agreement and Tenant Verification at reasonable cost available at your doorstep. roomsonrent.in. \n\nRegards\nTeam RoomsOnRent\n$mmobile";
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
											$subject="RoomsOnRent - One stop solution for Tenant Finding, Rental Agreement and Tenant Verification";
											$mssg=nl2br("
											Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n

												We provide one stop solution for property owners across Pune.\n\n

												Problems generally faced by Owner's:\n
												'Searching for inhabitants is the start of a long procedure which begins with property posting on various Platforms, further to concluding the best occupant alternative accessible, in the wake of settling the occupant, one needs to discover and arrange with rental agreement agents and after-ward at last executing the assertion by contributing least a large portion of a day's opportunity from your bustling calendar, extraordinarily taken out for rental assignation at the Registrar's office'.

												How RoomsOnRent helps:\n
												RoomsOnRent as a service provider has simplified this process for people who own properties across Pune i.e. by providing a platform where one can advertise his/her property at absolutely no cost, i.e. it is 100% free, we also market your property on different online platforms other than RoomsOnRent.
												\n
												Post your property Now: \n
												http://roomsonrent.in/

\n
												Doorstep Rental Agreement:\n
												While executing rental ascension we again help our enlisted clients with entryway step rental understanding at a truly low cost as you have officially posted your property with us you will get an advantage of that. For genuine Rental Agreement cost visit:
\n
												http://roomsonrent.in/Agreement
\n

												Tenant Verification:\n
												After rental understanding we will likewise help you with your Tenant Verification conventions easily, our officials seeking your rental ascension are very much aware of the procedure and will advise you in regards to the same.

\n
												Anticipating give you the best administration in the business sector.

\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
											
		//echo "<script>alert('STAGE-1')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage2')
	{
											$msg="To get Rs.300 discount on Doorstep Registered Rental Agreement. Post you property for no cost now! also get assistance in Tenant Verification. roomsonrent.in \n\nRegards\nTeam RoomsOnRent\n$mmobile";
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
											$subject="RoomsOnRent - One stop solution for Tenant Finding, Rental Agreement and Tenant Verification";
											$mssg=nl2br("
											Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n

												We provide one stop solution for property owners across Pune.\n\n

												Problems generally faced by Owner's:\n
												'Searching for inhabitants is the start of a long procedure which begins with property posting on various Platforms, further to concluding the best occupant alternative accessible, in the wake of settling the occupant, one needs to discover and arrange with rental agreement agents and after-ward at last executing the assertion by contributing least a large portion of a day's opportunity from your bustling calendar, extraordinarily taken out for rental assignation at the Registrar's office'.

												How RoomsOnRent helps:\n
												RoomsOnRent as a service provider has simplified this process for people who own properties across Pune i.e. by providing a platform where one can advertise his/her property at absolutely no cost, i.e. it is 100% free, we also market your property on different online platforms other than RoomsOnRent.
												\n
												Post your property Now: \n
												http://roomsonrent.in/

\n
												Doorstep Rental Agreement:\n
												While executing rental ascension we again help our enlisted clients with entryway step rental understanding at a truly low cost as you have officially posted your property with us you will get an advantage of that. For genuine Rental Agreement cost visit:
\n
												http://roomsonrent.in/Agreement
\n

												Tenant Verification:\n
												After rental understanding we will likewise help you with your Tenant Verification conventions easily, our officials seeking your rental ascension are very much aware of the procedure and will advise you in regards to the same.

\n
												Anticipating give you the best administration in the business sector.

\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-2')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage3')
	{
	
	$msg="We are just a click away, post your property on brokerage-free platform to avail benefits in Finding Tenants, Registered rental agreement and Tenant Verification at reasonable cost available at your doorstep. roomsonrent.in. \n\nRegards\nTeam RoomsOnRent\n$mmobile";
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
											$subject="RoomsOnRent - One stop solution for Tenant Finding, Rental Agreement and Tenant Verification";
											$mssg=nl2br("
											Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n

												We provide one stop solution for property owners across Pune.\n\n

												Problems generally faced by Owner's:\n
												'Searching for inhabitants is the start of a long procedure which begins with property posting on various Platforms, further to concluding the best occupant alternative accessible, in the wake of settling the occupant, one needs to discover and arrange with rental agreement agents and after-ward at last executing the assertion by contributing least a large portion of a day's opportunity from your bustling calendar, extraordinarily taken out for rental assignation at the Registrar's office'.

												How RoomsOnRent helps:\n
												RoomsOnRent as a service provider has simplified this process for people who own properties across Pune i.e. by providing a platform where one can advertise his/her property at absolutely no cost, i.e. it is 100% free, we also market your property on different online platforms other than RoomsOnRent.
												\n
												Post your property Now: \n
												http://roomsonrent.in/

\n
												Doorstep Rental Agreement:\n
												While executing rental ascension we again help our enlisted clients with entryway step rental understanding at a truly low cost as you have officially posted your property with us you will get an advantage of that. For genuine Rental Agreement cost visit:
\n
												http://roomsonrent.in/Agreement
\n

												Tenant Verification:\n
												After rental understanding we will likewise help you with your Tenant Verification conventions easily, our officials seeking your rental ascension are very much aware of the procedure and will advise you in regards to the same.

\n
												Anticipating give you the best administration in the business sector.

\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
	
		//echo "<script>alert('STAGE-3')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage4')
	{
		$msg="Dear $oname, \n\n your property has been effectively posted on roomsonrent.in with Property ID $p_id, Kindly spare This ID for future references.Once you get Tenant kindly visit us for door step rental agreement and Tenant Verification at discounted cost as you have become our registered user. roomsonrent.in \n\nRegards\nTeam RoomsOnRent\nYour Personal Manager\n$mname\n$mmobile";
		
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
											$subject="Property Posting Confirmation on roomsonrent.in";
											$mssg=nl2br("Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n
												Sir, Group ''RoomsOnRent'' Has appointed me your Personal Relationship Manager for your RoomsOnRent Account. I am there to help you with every one of the procedures in regards to occupants. It incorporates Tenant discovering, Registered Rental  Agreement, Tenants Verification. Your solicitation for property posting has been satisfied and now lives on our site. 
\n
												Lasting property ID for your property is $p_id, compassionately keep it for future references. You can see your promotion now by tapping on 
roomsonrent.in
\n
We likewise help with the Doorstep Rental Agreement and Tenant Verification for our enrolled clients at very low costing(Rs 300 Less than others). 
\n
For any question or elucidation, Feel Free to call me.
\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
		//echo "<script>alert('STAGE-4')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage5')
	{
		//echo "<script>alert('i am in s-5')</script>";
		$msg="Dear $oname, \nTenants prefer to contact Owners with 100 percentage complete ad, Its request, please go to your RoomsOnRent account and complete your property ad by adding photos or Video by clicking roomsonrent.in for a better response. You can also whatsapp on given number. \n\nRegards\nTeam RoomsOnRent\nYour Personal Manager\n$mname\n$mmobile";
		
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
											$subject="Photos/Video missing in property ID $p_id";
											$mssg=nl2br("Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n
												Occupants want to contact Owners with 100% finish promotion. \n
We have a decent stream of inquiries in location, daily new clients is going to our site for brokerage-free properties. \n
Be that as it may, your property won't not get a decent reaction as it is not 100% finish promotion, since it is inadequate with regards to property photographs/Video.\n
We ask for you to sympathetically share photographs on roomsonrent.into make your property 100% finish and to show signs of improvement reaction. \n
We likewise help with doorstep rental understanding and Tenant Verification for our enlisted clients at low costing.\n
\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;		
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
											
		//echo "<script>alert('STAGE-5')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage6')
	{
		$msg="Dear $oname, \n\nTenants prefer to contact Owners with 100 percentage complete ad, Its request, please go to your RoomsOnRent account and  complete your property ad by adding photos or Video for a better response. Agreement and Tenant verification can be done at your doorstep. roomsonrent.in \n\nRegards\nTeam RoomsOnRent\nYour Personal Manager\n$mname\n$mmobile";
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
											$subject="Photos/Video missing in property ID $p_id";
											$mssg=nl2br("Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n
												Occupants want to contact Owners with 100% finish promotion. \n
We have a decent stream of inquiries in location, daily new clients is going to our site for brokerage-free properties. \n
Be that as it may, your property won't not get a decent reaction as it is not 100% finish promotion, since it is inadequate with regards to property photographs/Video.\n
We ask for you to sympathetically share photographs on roomsonrent.into make your property 100% finish and to show signs of improvement reaction. \n
We likewise help with doorstep rental understanding and Tenant Verification for our enlisted clients at low costing.\n
\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile
											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;	
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
											
		//echo "<script>alert('STAGE-6')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage7')
	{
		$msg="Dear $oname, \n\nTenants prefer to contact Owners with 100 percentage complete ad, Its request, please go to your RoomsOnRent account and  complete your property ad by adding photos or Video for a better response. Agreement and Tenant verification can be done at your doorstep. roomsonrent.in \n\nRegards\nTeam RoomsOnRent\nYour Personal Manager\n$mname\n$mmobile";											
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
											$subject="Photos/Video missing in property ID $p_id";
											$mssg=nl2br("Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n
												Occupants want to contact Owners with 100% finish promotion. \n
We have a decent stream of inquiries in location, daily new clients is going to our site for brokerage-free properties. \n
Be that as it may, your property won't not get a decent reaction as it is not 100% finish promotion, since it is inadequate with regards to property photographs/Video.\n
We ask for you to sympathetically share photographs on roomsonrent.into make your property 100% finish and to show signs of improvement reaction. \n
We likewise help with doorstep rental understanding and Tenant Verification for our enlisted clients at low costing.\n
\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;	
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		//echo "<script>alert('STAGE-7')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage81')
	{
											$msg="Dear $oname, \n\nNo need to visit Registrar office for agreement as 24*7 Doorstep Registered rental agreement service is now available in your city. Send enquiries at roomsonrent.in \n\nRegards\nTeam RoomsOnRent\nYour Personal Manager\n$mname\n$mmobile";
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
											
$subject="Rental agreement and Tenant Verification update.";
											$mssg=nl2br("Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n
												According to the new standards of Maharashtra Government. Notary Agreements  are not any more legitimate and can't be displayed in court if there should be an occurrence of any question, in this manner it is necessary for every single property Owner to go for Registered Rental Agreement as it were. \n
Likewise Tenant Verification is currently obligatory, the same number of against social/hostile to national exercises happened in Pune in the last few years, therefore to keep an appropriate record Police has made Tenant check necessary. \n
Get in touch with us once your property rent out, we are just a click away.

\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;											
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
	
		//echo "<script>alert('STAGE-8')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage82')
	{
											$msg="Dear $oname, \n\nNotary agreements are not valid any more. Registered Rental Agreement and Tenant verification is compulsory as per new rules ofMaharashtra Government. Visit us roomsonrent.in fordoorstep serviceand  avail benefit of  Rs.300 as you are our registered user.\n\nRegards\nTeam RoomsOnRent\nYour Personal Manager\n$mname\n$mmobile";
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
$subject="Rental agreement and Tenant Verification update.";
											$mssg=nl2br("Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n
												According to the new standards of Maharashtra Government. Notary Agreements  are not any more legitimate and can't be displayed in court if there should be an occurrence of any question, in this manner it is necessary for every single property Owner to go for Registered Rental Agreement as it were. \n
Likewise Tenant Verification is currently obligatory, the same number of against social/hostile to national exercises happened in Pune in the last few years, therefore to keep an appropriate record Police has made Tenant check necessary. \n
Get in touch with us once your property rent out, we are just a click away.

\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;
											$_COOKIE['email']= $email;
											
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
	
		//echo "<script>alert('STAGE-8')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage83')
	{
											$msg="Dear $oname, \n\nRegistered Rental Agreement now available also on weekends and Government holidays at your doorstep. Hassle free service across Pune at lowest possible cost. Call now to avail this service. roomsonrent.in \n\nRegards\nTeam RoomsOnRent\nYour Personal Manager\n$mname\n$mmobile";
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
											$subject="Rental agreement and Tenant Verification update.";
											$mssg=nl2br("Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n
												According to the new standards of Maharashtra Government. Notary Agreements  are not any more legitimate and can't be displayed in court if there should be an occurrence of any question, in this manner it is necessary for every single property Owner to go for Registered Rental Agreement as it were. \n
Likewise Tenant Verification is currently obligatory, the same number of against social/hostile to national exercises happened in Pune in the last few years, therefore to keep an appropriate record Police has made Tenant check necessary. \n
Get in touch with us once your property rent out, we are just a click away.

\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;
											$_COOKIE['email']= $email;
											
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
	
		//echo "<script>alert('STAGE-8')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage9')
	{
											$msg="Dear $oname, \n\nDear $oname, Congratulations for your new tenant, and thank you for choosing us to help you in Registered Rental Agreement Process.Kindly Conform the Date, Time & Location for the execution of your Agreement. \n\nRegards\nTeam RoomsOnRent\nYour Personal Manager\n$mname\n$mmobile";
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
											$subject="Register Rent Agreement Request Conformation ";
											$mssg=nl2br("Dear $oname,
													\n
												Greetings from RoomsOnRent!!\n\n
Hi, Team ''RoomsOnRent'' Has appointed me your Personal Relationship Manager for your RoomsOnRent Account. I am there to help you with every one of the procedures in regards to occupants. It incorporates Tenant discovering arrangement, Registered Rental Ascension, Tenants Verification. Further to our telephonic discussion, we give Doorstep Registered Rental Agreement crosswise over Pune. \n
Reasonable Owner as an administration supplier has disentangled the rushed procedure of ascension which prior was to visit SRO office and to invest least a large portion of a day's energy. As time is cash subsequently, we bring all gadgets at your place whenever the timing is ideal. While executing rental ascension we help you with most focused, cost in the business sector.\n
Likewise, take a note that on the off chance that you have posted property Ad on roomsonrent.in we can give you an Rs 300 Discount on Registered Rental Agreements cost. PFA Sample Draft of Agreement which is a standard organization that implies we cannot evacuate any of the conditions, but rather we can include according to our prerequisite.\n
Ascension structure is likewise appended with self-affirmation structure as required. It would be ideal if you fill the type of assertion with the goal that we can make your draft for understanding. Required \n
Documents Required For  Execution Of Agreement- \n
Adhar Card and Pan Card Of all Parties i.e. Proprietor, Tenant, And Two Witnesses.\n
Light Bill/Index 2/Property Tax Receipt, Any 1 Document of the property to be leased. \n
Whole Process Will Be completed within 60 minutes. After rental assumption we will likewise help you with your Tenant Police Verification customs for which our official wanting understanding is very much aware and help you in like manner. Anticipating furnish you with the best administration in the business sector.\n

\n\n\n
												Thanks and Regards\n
												Team RoomsOnRent\n
												$manager\n
												$mmobile

											");
											$_COOKIE['mssg']=$mssg;
											$_COOKIE['subject']=$subject;
											$_COOKIE['email']= $email;
											include_once("mail.php");
											
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
	
		//echo "<script>alert('STAGE-9')</script>";
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage10')
	{
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage11')
	{
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage12')
	{
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage13')
	{
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	if($sendmm=='stage14')
	{
											$date=date("d/m/Y");
											$query="UPDATE `registation` SET `stage`='$sendmm',`stage_date`='$date' where pd_id='$id'";
											$upload=  mysqli_query($connection,$query);
		
		echo "<script>window.location.href='s_owner_details.php'</script>";
	}
	
}

 ?>