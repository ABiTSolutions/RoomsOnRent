<?php
	session_start();
	include('conn.php');
	include('out.php'); 
	$id=$_GET['id'];
	
	$query="DELETE FROM `registation` WHERE  pd_id='$id'";
	$upload=  mysqli_query($connection,$query);
	
	$query1="DELETE FROM `property_details` WHERE  property_id='$id'";
	$upload1=  mysqli_query($connection,$query1);
	
	if(isset($_SESSION['subadminname']))
			{
				$name=$_SESSION['subadminname'];
				$date=date("d/m/Y");
				$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','Delete the property of property id:- $id')";
				$in=mysqli_query($connection,$qu);
			}	
	
	echo "<script>alert('Property Id=$id is deleted')</script>";
	echo "<script>window.location.href='owner_details.php'</script>";

?>