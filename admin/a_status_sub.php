<?php
session_start();
include('conn.php');
include('out.php'); 

	$pd_id=$_GET['id'];

$reg_u="UPDATE property_details SET a_status = 1 WHERE property_id = '$pd_id'";
$reg_i=mysqli_query($connection,$reg_u);

if(isset($_SESSION['subadminname']))
			{
				$name=$_SESSION['subadminname'];
				$date=date("d/m/Y");
				$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','Inactive the property of property id:- $id')";
				$in=mysqli_query($connection,$qu);
			}	

echo "<script>alert('Property is Inactive')</script>";
echo "<script>window.location.href='owner_details.php'</script>";

?>