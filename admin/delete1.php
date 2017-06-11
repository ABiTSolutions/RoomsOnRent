<?php
	session_start();
	include('conn.php');
	include('out.php'); 
	$id=$_GET['id'];
	
	$query="DELETE FROM `tenant_reg` WHERE id='$id'";
	$upload=  mysqli_query($connection,$query);
	
	echo "<script>alert('Tenant is deleted')</script>";
	echo "<script>window.location.href='tenant_details.php'</script>";

?>