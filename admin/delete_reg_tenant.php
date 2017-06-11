<?php
	session_start();
	include('conn.php');
	include('out.php');
	$id=$_GET['id'];
	
	$query="DELETE FROM `tenant_reg` WHERE  id='$id'";
	$upload=  mysqli_query($connection,$query);
	
	$name=$_SESSION['subadminname'];
	$date=date("d/m/Y");
	$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','Delete register tenant of id:- $id')";
	$in=mysqli_query($connection,$qu);
	
	echo "<script>alert('Tenant record is deleted')</script>";
	echo "<script>window.location.href='reg_tenant.php'</script>";

?>