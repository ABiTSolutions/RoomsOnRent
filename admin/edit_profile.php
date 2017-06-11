<?php
session_start();
include('conn.php');
include('out.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Post</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="../js/scripts.js"></script>
<script src="../js/bootstrap.js"></script>
<link href="../css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="#">Home</a></li>
						<li><a  href="#">About Us</a></li>
						<li><a  href="#">Why Fair Owner</a></li>
						<li><a  href="#">How It Works</a></li>
						<li><a  href="#">Agreement</a></li>
						<li><a  href="#">Contact</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="#">
					<img src="images/logo2.png" />
				</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav" style="float:right">
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+91 9595567981</span></li>
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	

<div class="loan_single" style="background:rgba(39, 218, 147, 0.15)">
	<div class="container">
		<div class="col-md-12">
			
			<div style="margin-top:100px">
			
		
			       <div class="container">
    <br><h1 style="color:#028ca5">Edit Profile</h1>
  	<hr>
	<div class="row">
	<?php
	$mobile=$_GET['mobile'];
	$query="SELECT * FROM `registation` where mobile = $mobile";
	$sql = @mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($sql))
	{
								
			$name=$row['name'];
			$email=$row['email'];
			$mobile=$row['mobile'];
			$altno=$row['altno'];
			$address=$row['address'];
			$image=$row['photo'];
	?>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <?php
			if(empty($image))
			{
		  ?>
		  <img src="images/av1.png" class="avatar img-circle" alt="">
          <?php
		  }
		  else{
		  ?>
		  <img src="../<?php echo $image ?>" style="height:192px; width:192px;" class="avatar img-circle" alt="">
		  <?php
		  }
		  ?>
          <h6>Upload a different photo...</h6>
          <input type="file" name="photo" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3><U>Personal info</U></h3><br/>
        
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" value="<?php echo preg_replace('/\d+/u','',$name); ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Mobile:</label>
            <div class="col-lg-8">
              <input class="form-control" name="mobile" type="text" value="<?php echo $mobile; ?>" readonly="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $email ?>">
            </div>
          </div>
		  <div class="form-group">
            <label class="col-lg-3 control-label">Alternate Mobile:</label>
            <div class="col-lg-8">
              <input class="form-control" name="altno" type="text" value="<?php echo $altno ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Address:</label>
            <div class="col-md-8">
              <textarea name="address" class="form-control" rows="5"><?php echo $address ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" name="update" class="btn btn-primary" value="Save Changes">
              <span></span>
			  <a href="reg_owner.php" class="btn btn-default">Back</a>
            </div>
          </div>
        
      </div>
	  </form>
<?php
	  }

			if(isset($_POST['update']))
			{
				$n_name=$_POST['name'];
				if($name!=$n_name)
				{
										$qu1="SELECT name FROM `registation` where name = '$n_name'";
										$sql1 = @mysqli_query($connection,$qu1);
										$roww=@mysqli_fetch_row($sql1);
										$n=$roww[0];
										if(isset($n))
										{
											$ali=rand(10, 99);
											$n_name=$n.$ali;
										}
										
										$_SESSION['name']=$n_name;
				
				}
				$n_email=$_POST['email'];
				$n_altno=$_POST['altno'];
				$n_add=$_POST['address'];
				
					if(!empty($_FILES["photo"]["name"]))
					{
						$file_name=$_FILES["photo"]["name"];
						$temp_name=$_FILES["photo"]["tmp_name"];
						$imgtype=$_FILES["photo"]["type"];
						$ext=pathinfo($file_name,PATHINFO_EXTENSION);
						$imagename=date("d-m-Y")."-".time().".".$ext;
						$target_path="../photo/".$imagename;
						move_uploaded_file($temp_name,$target_path);
						$target_path=ltrim($target_path, '../');
						$image=$target_path;
					}
					
				$mobile=$_GET['mobile'];	
				
				$reg_u="UPDATE `registation` SET `name`='$n_name',`email`='$n_email',`address`='$n_add',`photo`='$image',`altno`='$n_altno' WHERE mobile = $mobile";
				//UPDATE `registation` SET `name`='$n_name',`email`='$n_email',`address`='$n_add',`photo`='$image' WHERE 1
				$reg_i=mysqli_query($connection,$reg_u);
				echo "<script>window.location.href='reg_owner.php'</script>";
				
			}
	  ?>
	  
  </div>
</div>
<hr>
			
			</div>
		
		</div>
		
		
		<div class="clearfix"> </div>
	</div>
</div>

<!--footer-->
<div class="footer">

	<div class="footer-bottom">
		<div class="container">
			
			<div class="col-md-8">
				<p style="color:#FFF">© 2017 RoomsOnRent. All Rights Reserved</p>
			</div>
			<div class="col-md-4 footer-logo">
				<ul class="social" style="padding:0; float:right">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="camera"> </i></a></li>
						<li><a href="#"><i class="dribble"> </i></a></li>
					</ul>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->


</body>
</html>