<html>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="mobile" />
		<input type="submit" name="otp" value="OTP" />
	</form>
</html>
<?php
	if(isset($_POST['otp']))
	{	
		include('message.php');
	}
?>