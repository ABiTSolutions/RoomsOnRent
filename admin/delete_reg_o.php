<?php
	session_start();
	include('conn.php');
	include('out1.php');
	$id=$_GET['id'];
	
	$query="DELETE FROM `tenant_reg` WHERE  id='$id'";
	$upload=  mysqli_query($connection,$query);
	
	echo "<script>alert('Tenant record is deleted')</script>";
	echo "<script>window.location.href='s_reg_tenant.php'</script>";

?>