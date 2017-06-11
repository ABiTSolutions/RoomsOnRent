<?php
	session_start();
	include('conn.php');
	include('out1.php');
	$id=$_GET['id'];
	
	$query="DELETE FROM `registation` WHERE  pd_id='$id'";
	$upload=  mysqli_query($connection,$query);
	
	$query1="DELETE FROM `property_details` WHERE  property_id='$id'";
	$upload1=  mysqli_query($connection,$query1);
	
	echo "<script>alert('Property Id=$id is deleted')</script>";
	echo "<script>window.location.href='s_owner_details.php'</script>";

?>