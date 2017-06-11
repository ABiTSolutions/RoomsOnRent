<?php
	session_start();
	include('conn.php');
	include('out1.php');
	$id=$_GET['id'];
	
	$query1="DELETE FROM `slider` WHERE id='$id'";
	$upload1=  mysqli_query($connection,$query1);
	
	echo "<script>window.location.href='home_slider.php'</script>";

?>