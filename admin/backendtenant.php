<?php
include('conn.php'); 
session_start();
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
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+91 8888599993</span></li>
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
<div class=" banner-buying">
			<div style="position:fixed; z-index:9; right:0; bottom:0px; margin:15px;">
				<a href="<?php echo "index.php";?>" class="hvr-sweep-to-right more" style="background:#00d5fa; color:#FFF; font-weight:bold; padding:1em" >Back</a>     
			</div>
	<div class=" container">
	<h3><span>Post Tenant From Back-end</span></h3> 
	<!---->
	<div class="clearfix"> </div>
		<!--initiate accordion-->
      		
	</div>
</div>
<!--//header-->
<!---->
<div class="loan_single">
	<div class="container">
		<div class="loan-col" style="padding:1em 0 2em 0">
			<!--<h4>Looking for a good deal for a <span>HOME?</span> Post Now!!</h4>-->
			<h4>Tenant Details</h4>
				<br/>
				<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="row">
				<div class="col-md-6">
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Tenant Name:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="username" placeholder="Enter Full Name" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Tenant Mobile:</label>
					<div class="col-sm-8"> 
					  <input type="number" id="lmobile" class="form-control" name="r_mobile" placeholder="Enter Mobile without +91" value="<?php echo isset($_POST['r_mobile']) ? $_POST['r_mobile'] : '' ?>" >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Tenant Email:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">&nbsp;</label>
					<div class="col-sm-8 sub1"> 
					  <label class="hvr-sweep-to-right"><input type="submit" onClick="return lempty()" name="create_account" value="Insert Tenant" ></label>
					</div>
				  </div>
				 
				</div>
				</div>
				</form>  
				<?php
					if(isset($_POST['create_account']))
					{
					
								$date=date("d/m/Y");
								$uname=$_POST['username'];
								$qu1="SELECT name FROM `tenant_reg` where name = '$uname'";
								$sql1 = @mysqli_query($connection,$qu1);
								$roww=@mysqli_fetch_row($sql1);
								$uname1=$roww[0];
								if(isset($uname1))
								{
									$ali=rand(10, 99);
									$uname=$uname.$ali;
								}
								$r_mobile=$_POST['r_mobile'];
								$email=$_POST['email'];
								$_SESSION['name']=$uname;
								$i=1;
										$qu="SELECT mobile FROM `tenant_reg` where mobile = '$r_mobile'";
										$sql = @mysqli_query($connection,$qu);
										$row=@mysqli_fetch_row($sql);
										$m=$row[0];
										
										
										if(isset($m))
										{
											echo "<script>alert('Mobile No is already exist')</script>";
											echo "<script>window.location.href='backendtenant.php'</script>";
										}
										else
										{
											$manager=$_SESSION['subadminname'];
											
											$query="INSERT INTO `tenant_reg`(`id`, `name`, `email`, `mobile`, `flow_id`, `pd_id`, `date`, `manager`, `fromwhere`) VALUES ('','".$uname."','".$email."','".$r_mobile."','".$i."','0','".$date."','".$manager."','Backend')";
											$upload=  mysqli_query($connection,$query);
											echo "<script>alert('Tenant Is Inserted')</script>";
											
											$query="SELECT id FROM `tenant_reg` order by id DESC";
											$sql = @mysqli_query($connection,$query);
											$row = mysqli_fetch_row($sql);
											$tmp=$row[0];
											$tmp=$tmp;
											//$pid="W-".$tmp;
											$_SESSION["pid"]=$tmp;
											
											$m=$_SESSION['subadminname'];
			
											$rqy1="SELECT ten_id FROM `sub_admin` where name = '$m'";
											$rsl1 = @mysqli_query($connection,$rqy1);
											$row1 = mysqli_fetch_row($rsl1);
											$p_id=$row1[0];
											
											
												$pidd=$p_id.''.$tmp.',';
												$reg_u1="UPDATE `sub_admin` SET ten_id = '$pidd' WHERE name = '$m'";
												$reg_i1=mysqli_query($connection,$reg_u1);
				
											
											
											$name=$_SESSION['subadminname'];
											$date=date("d/m/Y");
											$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','$uname Tenant Is Inserted from backed')";
											$in=mysqli_query($connection,$qu);
											
										}
							
					}
				?>
				
			
		</div>
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


<script>
	$(document).ready(function(){
		$("#furnish").change(function(){
			$(this).find("option:selected").each(function(){
				if($(this).attr("value")=="semifurnish")
				{
					$("#fitem").show();
				}
				if($(this).attr("value")=="fullyfurnish")
				{
					$("#fitem").show();
				}
				else
				{
					$("#fitem").hide();
				}
			});	
		});
	});
</script>
<script>
function lempty() {
    var x;
    x = document.getElementById("lmobile").value;
    if (/^\d{10}$/.test(x)) {
		//ok
	}
	else
	{
		alert("Please enter 10 digit mobile No!");
        return false;
    };
	
}
</script>
<script>
function empty() {
    var x;
    x = document.getElementById("parking").value;
    if (x == "") {
        alert("please select parking type");
        return false;
    };
	
	var y;
    y = document.getElementById("facing").value;
    if (y == "") {
        alert("please select facing");
        return false;
    };
	
	var z;
    z = document.getElementById("balcony").value;
    if (z == "") {
        alert("please select balcony");
        return false;
    };
	
	var a;
    a = document.getElementById("flattype").value;
    if (a == "") {
        alert("please select flat type");
        return false;
    };
	
	var b;
    b = document.getElementById("propertytype").value;
    if (a == "") {
        alert("please select property type");
        return false;
    };
	
	var c;
    c = document.getElementById("city").value;
    if (c == "") {
        alert("please enter city");
        return false;
    };
	
	var d;
    d = document.getElementById("locality").value;
    if (d == "") {
        alert("please enter locality");
        return false;
    };
	
	
	
	var e;
    e = document.getElementById("rent").value;
    if (e == "") {
        alert("please enter rent");
        return false;
    };
	
    if ((post.n_rent[0].checked == false) && (post.n_rent[1].checked == false)) {
        alert("please choose negotiable rent");
        return false;
    };
	
    if ((post.maintenance[0].checked == false) && (post.maintenance[1].checked == false)) {
        alert("please choose maintenance: Including or Excluding");
        return false;
    };
	
	var h;
    h = document.getElementById("deposit").value;
    if (h == "") {
        alert("please enter deposit");
        return false;
    };
	
	if ((post.time_preference[0].checked == false) && (post.time_preference[1].checked == false)) {
        alert("please choose time preference");
        return false;
    };
	
	var i;
    i = document.getElementById("furnishing").value;
    if (i == "") {
        alert("please select furnishing type");
        return false;
    };
}
</script>
</body>
</html>