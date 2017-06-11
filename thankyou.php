<?php
include('conn.php'); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Post</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/styles.css" rel="stylesheet">
<link href="css/sky form.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
<?php
			include('header.php');
?>
<!--//-->	

<div class="loan_single" style="background:rgba(39, 218, 147, 0.15)">
	<div class="container">
		<div class="col-md-12">
			
			<div style="margin-top:100px">
				<div class="col-md-6">
					<div style="width:222px; margin:0 auto;">
					<img src="images/normal_ian-symbol-services-business-trio.png" />
					</div>
				</div>
				<div class="col-md-6">
					<?php
						$pid=$_SESSION["pid"];
						$oname=$_SESSION['name'];
						$query = "SELECT * FROM `registation` WHERE pd_id= '$pid'";
						$sql = @mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql))
						{
							$id=$row['pd_id'];
							$manager=$row['manager'];
							$mobile=$row['mobile'];
						}
						
						$rqy1="SELECT p_id FROM `sub_admin` where name = '$manager'";
						$rsl1 = @mysqli_query($connection,$rqy1);
						$row1 = mysqli_fetch_row($rsl1);
						$p_id=$row1[0];
						
						$pid=$p_id.''.$id.',';
						$reg_u1="UPDATE `sub_admin` SET p_id = '$pid' WHERE name = '$manager'";
						$reg_i1=mysqli_query($connection,$reg_u1);
						
					?>
					<p style="font-size:1.5em; text-align:center; padding-top: 12%;">
						
						Thanks for providing property details. Your permanent property Id: 	<b><?php echo $id; ?></b>.
 You will receive verification call from your personal manager before your 
property goes live.
					</p>
					<br/><br/>
					<div style="width:70%; margin:0 auto;">
					<button style="float:left" type="button" class="btn-u" onclick="window.location.href='owner_dashboard.php'">Back To Home</button>
					
					<button style="float:right" type="button" class="btn-u" onclick="window.location.href='owner_dashboard.php'">View Posted Property</button>
					</div>
				</div>
			</div>
		
		</div>
	
		<div class="clearfix"> </div>
	</div><br/><br/><br/>
</div>

<?php
			include('footer.php');
?>
</body>
</html>