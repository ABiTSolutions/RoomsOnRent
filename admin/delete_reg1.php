<?php
	session_start();
	include('conn.php');
	include('out.php'); 
	$id=$_GET['id'];
	
	$query="DELETE FROM `registation` WHERE  id='$id'";
	$upload=  mysqli_query($connection,$query);
	
	echo "<script>alert('Owner record is deleted')</script>";
	echo "<script>window.location.href='reg_owner.php'</script>";

?>