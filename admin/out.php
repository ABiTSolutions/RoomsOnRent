<?php
if(isset($_SESSION['subadminname']))
{
	
}
else
{
	unset($_SESSION['superadminname']);
	echo "<script>alert('Session is expire please login')</script>";
	echo "<script>window.location.href='login.php'</script>";
}
?>