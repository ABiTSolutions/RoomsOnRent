<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login - RoomsOnRent</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="#">
				RoomsOnRent				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<!--<a href="#" class="">
							Don't have an account?
						</a>-->
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
		
			<h1>Super-Admin Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="subname" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="subpass" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<!--<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>-->
									
				<input type="submit" onClick="return subone()" name="submit" class="button btn btn-success btn-large" value="Sign In" />
				
			</div> <!-- .actions -->
			
			
			
		</form>
		<?php
			if(isset($_POST['submit']))
			{
				$uname=$_POST['username'];
				//$_SESSION['name']=$name;
				$pass=$_POST['password'];
				
										$qu="SELECT * FROM `main_admin` where uname = '$uname'";
										$sql = @mysqli_query($connection,$qu);
										while($row=@mysqli_fetch_array($sql))
										{
											$uname=$row['uname'];
											$fpass=$_POST['password'];
										}
				/*
				$fname="fairowner";
				$fpass="fairowner@123";
				*/
				if($uname==$uname && $pass==$fpass)
				{
					$_SESSION['superadminname']=$uname;
					echo "<script>window.location.href='super_admin_home.php'</script>";
				}
				else
				{
					echo "<script>alert('Enter Correct Username & Password')</script>";
				}
			}
		?>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<!--<div class="login-extra">
	<a href="#">Reset Password</a>
</div>--> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

<script>
function subone() {
    var a;
    a = document.getElementById("subname").value;
    if (a == "") {
        alert("please Enter username");
        return false;
    };
	var b;
    b = document.getElementById("subpass").value;
    if (b == "") {
        alert("please Enter password");
        return false;
    };
}
</script>

</body>

</html>
