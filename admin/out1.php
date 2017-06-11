<?php
if(isset($_SESSION['superadminname']))
{
	
}
else
{
	unset($_SESSION['superadminname']);
	echo "<script>alert('Session is expire please login')</script>";
	echo "<script>window.location.href='admin_login.php'</script>";
}
?>