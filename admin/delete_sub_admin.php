<?php
	session_start();
	include('conn.php');
	include('out1.php');
	$id=$_GET['id'];
	
	$query="DELETE FROM `sub_admin` WHERE id='$id'";
	$upload=  mysqli_query($connection,$query);
	
	echo "<script>alert('Sub admin is deleted')</script>";
	echo "<script>window.location.href='create_subadmin.php'</script>";

?>