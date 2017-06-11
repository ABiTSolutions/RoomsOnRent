<?php
include('conn.php'); 
session_start();
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
<div id="loader" style="position:fixed; top:0; left:0; width:100%; height:100%;">
	<div>	
		<img src="images/loader.gif" style="position: absolute; top: 30%; bottom: 0; right: 0;left: 0;margin: 0 auto; width: 150px;" />
	</div>
</div>
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
				<a href="<?php echo "super_admin_home.php"; ?>" class="hvr-sweep-to-right more" style="background:#00d5fa; color:#FFF; font-weight:bold; padding:1em" >Back</a>     
			</div>
	<div class=" container">
	<h3><span>Post Property From Back-end</span></h3> 
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
			<h4>Owner Details</h4>
				<br/>
				<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="row">
				<div class="col-md-6">
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Owner Name:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="username" placeholder="Enter Full Name" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Owner Mobile:</label>
					<div class="col-sm-8"> 
					  <input type="number" id="lmobile" class="form-control" name="r_mobile" placeholder="Enter Mobile without +91" value="<?php echo isset($_POST['r_mobile']) ? $_POST['r_mobile'] : '' ?>" >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Owner Email:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">&nbsp;</label>
					<div class="col-sm-8 sub1"> 
					  <label class="hvr-sweep-to-right"><input type="submit" onClick="return lempty()" name="create_account" value="Insert Owner" ></label>
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
								$qu1="SELECT name FROM `registation` where name = '$uname'";
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
										$qu="SELECT mobile FROM `registation` where mobile = '$r_mobile'";
										$sql = @mysqli_query($connection,$qu);
										$row=@mysqli_fetch_row($sql);
										$m=$row[0];
										
										
										if(isset($m))
										{
											echo "<script>alert('Mobile No is already exist')</script>";
											echo "<script>window.location.href='backend2.php'</script>";
										}
										else
										{
											
											//$manager=$_SESSION['subadminname'];
											
											//$manager=$_SESSION['superadminname'];
											$query="INSERT INTO `registation`(`id`, `name`, `email`, `mobile`, `flow_id`, `pd_id`, `date`, `fromwhere`) VALUES ('','".$uname."','".$email."','".$r_mobile."','".$i."','0','".$date."','Backend')";
											$upload=  mysqli_query($connection,$query);
											echo "<script>alert('Owner Is Inserted')</script>";
											
											$name="Super_Admin";
											$date=date("d/m/Y");
											$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','$uname Owner Is Inserted from backed')";
											$in=mysqli_query($connection,$qu);
											
										}
							
					}
				?>
				
				
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" >
			
			<div class="col-loan">
				
				<h4>Property Details</h4>
				<br/>
				<div class="row">
				
				<div class="col-md-6">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Area (sqft):</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="area_sqft" placeholder=""  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Carpet Area(sqft):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="carpet_area" placeholder=""  >
					</div>
				  </div>
				 <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Flat Type:</label>
					<div class="col-sm-8">
					  <select class="form-control" id="flattype" name="flat_type">
						<option value="">---select flat type---</option>
						<option value="1RK">1RK</option>
						<option value="1BHK">1BHK</option>
						<option value="2BHK">2BHK</option>
						<option value="3BHK">3BHK</option>
						<option value="4BHK">4BHK</option>
						<option value="4BHK+">4BHK+</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">No. of Bathrooms:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="no_of_bathrooms"  placeholder=""  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Servant Room:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="servant_room" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="servant_room" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Pooja Room:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="pooja_room" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="pooja_room" value="no"/>No
					  </label>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Property floor:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="property_floor" placeholder=""  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Total floor(in building):</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="total_floor" placeholder=""  >
					</div>
				  </div>
				
				</div>
				<div class="col-md-6">
						
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Parking:</label>
					<div class="col-sm-8">
					  <select name="parking" id="parking" class="form-control">
					    <option value="">---select parking---</option>
						<option value="two wheeler">Two Wheeler</option>
						<option value="four wheeler">Four Wheeler</option>
						<option value="two/four wheeler">Both</option>
						<option value="Dedicated parking is not available">Dedicated parking is not available</option>
						
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Available From:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="available_from" placeholder="01/01/2016"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Facing:</label>
					<div class="col-sm-8">
					  <select name="facing" id="facing" class="form-control">
						<option value="">---select facing---</option>
						<option value="east">East</option>
						<option value="west">West</option>
						<option value="south">South</option>
						<option value="north">North</option>
					  </select>
					</div>
				  </div>
				 <div class="form-group">
					<label class="control-label col-sm-4" for="email">Flooring:</label>
					<div class="col-sm-8">
					  <select name="flooring" class="form-control">
					    <option>---flooring---</option>
						<option value="vitrified">Vitrified</option>
						<option value="wooden">Wooden</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">View:</label>
					<div class="col-sm-8">
					  <select name="view" class="form-control">
					    <option>---select view---</option>
						<option value="garden">Garden</option>
						<option value="main road">Main Road</option>
						<option value="amortizes">Amortizes</option>
						<option value="others">Others</option>
					  </select>
					</div>
				  </div>
				 <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Property Type:</label>
					<div class="col-sm-8">
					  <select name="property_type" id="propertytype" class="form-control">
					    <option value="">---select property type---</option>
						<option value="apartment">Apartment</option>
						<option value="banglow">Banglow</option>
						<option value="row house">Row House</option>
						<option value="residential house">Residential House</option>
						<option value="corporate flat">Corporate Flat</option>
						<option value="service apartment">Service Apartment</option>
					  </select>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Terrace:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="terrace" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="terrace" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Balcony:</label>
					<div class="col-sm-8">
					  <select name="balcony" id="balcony" class="form-control">
					    <option value="">---select balcony---</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="4+">4+</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Dry Balcony:</label>
					<div class="col-sm-8"> 
					  <select name="dry_balcony" class="form-control">
					    <option>---select dry balcony---</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Comment:</label>
					<div class="col-sm-8">
					  <textarea name="comment_1" class="form-control" row="2" placeholder="Additional Comment if any"></textarea>
					</div>
				  </div>
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				<h4>Property Address</h4>
				<br/>
				<div class="row">
				
				<div class="col-md-6">
					<div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>City</label>
					<div class="col-sm-8">
					  <select name="city" id="city" class="form-control">
					    <option value="">---City---</option>
						<option value="Pune">Pune</option>
					  </select>
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd"><span style="color:red">*</span>Locality:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="locality" placeholder="" id="locality" >
					</div>
				   
				  </div>
				
				</div>
				<div class="col-md-6">
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Sub-Locality:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="sub_locality" placeholder=""  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Landmark:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="landmark" placeholder=""  >
					</div>
				  </div>
				 
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				<h4>Rent & Deposit</h4>
				<br/>
				<div class="row">
				
				<div class="col-md-6">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Monthly Rent:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="rent" name="monthly_rent" placeholder=""  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd"><span style="color:red">*</span>Negotiable Rent:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="n_rent" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="n_rent" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd"><span style="color:red">*</span>Maintenance:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="maintenance" value="Including"/>Including
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="maintenance" value="Excluding"/>Excluding
					  </label>
					</div>
				  </div>
				 
				
				</div>
				<div class="col-md-6">
					
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd"><span style="color:red">*</span>Security Deposit:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" id="deposit" name="security_deposit" placeholder=""  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Negotiable Deposit:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="n_deposit" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="n_deposit" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Comment:</label>
					<div class="col-sm-8">
					  <textarea class="form-control" row="4" name="comment_2" placeholder="Additional Comment if any" ></textarea>
					</div>
				  </div>
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				<h4>Society / Project Details</h4>
				<br/>
				<div class="row">
				
				<div class="col-md-6">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Society Name:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="society_name" placeholder=""  >
					</div>
				  </div>
				 
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Drinking):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="water_drinking" placeholder="4hr"  >
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Utility):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="water_utility" placeholder="24hr"  >
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Age of Construction:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="age_of_construction" placeholder="5 Year"  >
					</div>
				  </div>
				
				</div>
				<div class="col-md-6">
				
					<div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Power Backup:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="power_backup" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="power_backup" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Lift in building:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="lift_in_building" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="lift_in_building" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Security:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="security" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="security" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Visitors Parking:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="visitors_parking" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="visitors_parking" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Maintenance Staff:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="maintenance_staff" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="maintenance_staff" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Pets Allowed:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="pets_allowed" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="pets_allowed" value="No"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Comment:</label>
					<div class="col-sm-8">
					  <textarea class="form-control" name="comment_3" row="4" placeholder="Additional Comment if any"></textarea>
					</div>
				  </div>
				  
				 
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				<h4>Tenant Preference</h4>
			
				<div class="row">
				
				<div class="col-md-12">
					
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd">&nbsp;</label>
					<div class="col-sm-10"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="family"/>Family
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="working bachelors"/>Working Bachelors 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="working girls"/>Working Girls 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="student"/>Student
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="company gesthouse"/>Company GestHouse 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="any"/>Any
					  </label>
					</div>
				  </div>		
				
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				<h4><span style="color:red">*</span>Time Preference</h4>
				
				<div class="row">
				
				<div class="col-md-12">
					
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd">&nbsp;</label>
					<div class="col-sm-10"> 
					  <label class="radio-inline">
						<input type="radio" name="time_preference" value="9am - 8pm"/>9am - 8pm
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="time_preference" value="any"/>Any
					  </label>
					</div>
				  </div>		
				
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				<h4>Flat Amenities / Furnishings </h4>
				<br/>
				<div class="row">
				
				<div class="col-md-12">
		
					<div class="form-group">
					<label class="control-label col-sm-2" for="email"><span style="color:red">*</span>Furnishing:</label>
					<div class="col-sm-4">
					  <select id="furnishing" name="furnishing" class="form-control">
					    <option value="">---select furnishing---</option>
						<option value="unfurnish">Unfurnished</option>
						<option value="semifurnish">Semi-Furnished</option>
						<option value="fullyfurnish">Fully-Furnished</option>
					  </select>
					</div>
				  </div>
       			
				
				
				
				<div id="fitem" style="">
				<div class="form-group">
					<label class="control-label col-sm-3" for="email">&nbsp;</label>
					<div class="col-sm-9"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="tv"/>TV
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="bed"/>Bed 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]"  value="sofa"/>Sofa
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]"  value="wardrobe"/>Wardrobe 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]"  value="intercom"/>Intercom 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="table"/>Table
					  </label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="email">&nbsp;</label>
					<div class="col-sm-9"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="dth"/>DTH
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]"  value="bean bag"/>Bean Bag 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="ac"/>AC 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="water purifier"/>Water Purifier 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="modular kitchen"/>Modular Kitchen  
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="hob & chimney"/>Hob & Chimney 
					  </label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="email">&nbsp;</label>
					<div class="col-sm-9"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]"  value="refrigerator"/>Refrigerator 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="microwave"/>Microwave  
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="solar"/>Solar 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="bathtub"/>Bathtub 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="steam"/>Steam 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="geyser"/>Geyser 
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-3" for="email">&nbsp;</label>
					<div class="col-sm-9"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="f_type[]" value="washing machine"/>Washing Machine   
					  </label>
					  
					</div>
				  </div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email">Comment:</label>
					<div class="col-sm-4">
					  <textarea class="form-control" name="comment_4" row="4" placeholder="Additional Comment if any"></textarea>
					</div>
				  </div>
				</div>
				<div class="clearfix"></div>
				</div>
				
				<h4>Project / Society Amenities  </h4>
				<br/>
				<div class="row">
				
				<div class="col-md-12">
		
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">&nbsp;</label>
					<div class="col-sm-10"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="clubhouse"/>ClubHouse 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="swimming pool"/>Swimming Pool 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="kids pool"/>Kids Pool
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="children play area"/>Children Play Area 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="gym"/>Gym 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="park"/>Park
					  </label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">&nbsp;</label>
					<div class="col-sm-10"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="tines court"/>Tines Court 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="cycling track"/>Cycling Track
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="badminton court"/>Badminton Court  
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="multi-purpose hall"/>Multi-purpose Hall
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="amphitheatre"/>Amphitheatre  
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="meditation area"/>Meditation Area  
					  </label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">&nbsp;</label>
					<div class="col-sm-10"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="jogging track"/>Jogging Track 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="shopping centre"/>Shopping Centre  
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="hospital"/>Hospital 
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="temple"/>Temple 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="vast n compliant"/>Vast n Compliant  
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="sewage treatment plant"/>Sewage Treatment Plant 
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email">&nbsp;</label>
					<div class="col-sm-10"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="rain water harvesting"/>Rain Water Harvesting   
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="internet provider"/>Internet Provider    
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="fire safety"/>Fire Safety   
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="pipe gas connection"/>Pipe Gas Connection     
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="garbage chute"/>Garbage Chute      
					  </label>
					</div>
				  </div>
				 
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email">Comment:</label>
					<div class="col-sm-8">
					  <textarea class="form-control" name="comment_5" row="4" placeholder="Additional Comment if any"></textarea>
					</div>
				  </div>
				</div>
				<div class="clearfix"></div>
				</div>
				
				<h4>Graphical Information</h4>
				<br/>
				<div class="row">
				
				<div class="col-md-6">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Images:</label>
					<div class="col-sm-8">
					  <input type="file" name="uploadedimage[]" value="" multiple="multiple" >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Vedio:</label>
					<div class="col-sm-8"> 
					  <input type="file" name="uploadedvedio" value=""  >
					</div>
				  </div>
				  <!--<div class="form-group">
					<label class="control-label col-sm-4" for="email">Map:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="latitude" placeholder="Latitude"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">&nbsp;</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="longitude" placeholder="Longitude"  >
					</div>
				  </div>-->
				 
				
				</div>
				<div class="col-md-6">
				
				  &nbsp;
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				
				<p>I agree to RoomsOnRent' Terms & Conditions. I would like to receive property related communication through Email, Call or SMS from RoomsOnRent or any of its partners.</p>
				
			</div>
			<!---->
			<div class="loan-col1">
				
				<div class="sub1">
					<label class="hvr-sweep-to-right"><input type="submit" name="submit" onClick="return empty()" value="Post" placeholder=""></label>
					<label class="hvr-sweep-to-right re-set"><input type="reset" value="Clear" placeholder=""></label>
				</div>
			</div>
			<!---->
			</form>
			
			<?php
				 	
				if(isset($_POST['submit']))
				{
					$area_sqft=$_POST['area_sqft'];
$carpet_area=$_POST['carpet_area'];
$flat_type=$_POST['flat_type'];
$no_of_rooms=$_POST['no_of_rooms'];

$no_of_bathrooms=$_POST['no_of_bathrooms'];

$servant_room=$_POST['servant_room'];

$pooja_room=$_POST['pooja_room'];

$property_floor=$_POST['property_floor'];

$total_floor=$_POST['total_floor'];

$parking=$_POST['parking'];

$available_from=$_POST['available_from'];
$facing=$_POST['facing'];

$flooring=$_POST['flooring'];
$view=$_POST['view'];
$property_type=$_POST['property_type'];

$terrace=$_POST['terrace'];
$comment_1=$_POST['comment_1'];

$monthly_rent=$_POST['monthly_rent'];
$security_deposit=$_POST['security_deposit'];
$maintenance=$_POST['maintenance'];

$comment_2=$_POST['comment_2'];
$society_name=$_POST['society_name'];
$locality=$_POST['locality'];
$sub_locality=$_POST['sub_locality'];

$landmark=$_POST['landmark'];
$water_drinking=$_POST['water_drinking'];
$water_utility=$_POST['water_utility'];
$age_of_construction=$_POST['age_of_construction'];

$power_backup=$_POST['power_backup'];
$lift_in_building=$_POST['lift_in_building'];

$security=$_POST['security'];

$visitors_parking=$_POST['visitors_parking'];
$maintenance_staff=$_POST['maintenance_staff'];
$pets_allowed=$_POST['pets_allowed'];

$comment_3=$_POST['comment_3'];

$tenant_preference=implode(',',$_POST['tenant_preference']);


$time_preference=$_POST['time_preference'];
$furnishing=$_POST['furnishing'];

$f_type=implode(',',$_POST['f_type']);



$comment_4=$_POST['comment_4'];

$society_amenities=implode(',',$_POST['society_amenities']);

$comment_5=$_POST['comment_5'];

//

$city=$_POST['city'];
$n_rent=$_POST['n_rent'];
$n_deposit=$_POST['n_deposit'];
$balcony=$_POST['balcony'];
$dry_balcony=$_POST['dry_balcony'];




	/*if(!empty($_FILES["uploadedimage"]["name"]))
	{
		$file_name=$_FILES["uploadedimage"]["name"];
		$temp_name=$_FILES["uploadedimage"]["tmp_name"];
		$imgtype=$_FILES["uploadedimage"]["type"];
		$ext=pathinfo($file_name,PATHINFO_EXTENSION);
		$imagename=date("d-m-Y")."-".time().".".$ext;
		$target_path="uploadedimage/".$imagename;
		move_uploaded_file($temp_name,$target_path);
		
	}


$image=$target_path;
*/

				if(count($_FILES['uploadedimage']['name']) > 0)
				{
					//Loop through each file
					for($i=0; $i<count($_FILES['uploadedimage']['name']); $i++) 
					{
					  //Get the temp file path
						$tmpFilePath = $_FILES['uploadedimage']['tmp_name'][$i];

						//Make sure we have a filepath
						if($tmpFilePath != "")
						{
						
							//save the filename
							$shortname = $_FILES['uploadedimage']['name'][$i];

							//save the url and the file
							$filePath = "../uploadedimage/" . date('d-m-Y-H-i-s').'-'.$_FILES['uploadedimage']['name'][$i];

							//Upload the file into the temp dir
							if(move_uploaded_file($tmpFilePath, $filePath)) 
							{
								$filePath=ltrim($filePath, '../');
								$files[] = $filePath;
								//insert into db 
								//use $shortname for the filename
								//use $filePath for the relative url to the file

							}
						  }
					}
				}
				if(is_array($files))
				{
					$image=implode(',',$files);
				}


if(!empty($_FILES["uploadedvedio"]["name"]))
	{
		$file_name1=$_FILES["uploadedvedio"]["name"];
		$temp_name1=$_FILES["uploadedvedio"]["tmp_name"];
		$imgtype1=$_FILES["uploadedvedio"]["type"];
		$ext1=pathinfo($file_name1,PATHINFO_EXTENSION);
		$imagename1=date("d-m-Y")."-".time().".".$ext1;
		$target_path1="../uploadedvedio/".$imagename1;
		move_uploaded_file($temp_name1,$target_path1);
		$target_path1=ltrim($target_path1, '../');
	}
$vedio=$target_path1;
//$vedio=$_POST['vedio'];	

//
			
			$query="SELECT id FROM `property_details` order by id DESC";
			$sql = @mysqli_query($connection,$query);
			$row = mysqli_fetch_row($sql);
			$tmp=$row[0];
			$tmp=$tmp+1;
			$pid="W-".$tmp;
			$_SESSION["pid"]=$pid;
			$oname=$_SESSION['name'];
			
			$date=date("d/m/Y");
			$reg_u="UPDATE registation SET pd_id = '$pid', date='$date' WHERE name = '$oname'";
			$reg_i=mysqli_query($connection,$reg_u);
			
			
			$query="INSERT INTO `property_details`(`id`, `property_id`, `area_sqft`, `carpet`, `flat_type`, `no_of_room`, `no_of_bathroom`, `servant_room`, `pooja_room`, `property_floor`, `total_floor`, `parking`, `avilable_from_date`, `facing`, `flooring`, `view`, `property_type`, `terrace`, `comment_1`, `monthly_rnet`, `security_deposit`, `maintenance`, `commint_2`, `society_name`, `locality`, `sub_locality`, `landmark`, `water_drinking`, `water_utility`, `age_of_construction`, `power_backup`, `lift_in_building`, `security`, `visitors_parking`, `maintenance_staff`, `pets_allowed`, `comment_3`, `tenant_preference`, `time_preference`, `furnishing`, `furnishing_type`, `comment_4`, `society_amenities`, `comment_5`, `image`, `vedio`, `city`, `n_rent`, `n_deposit`, `balcony`, `dry_balcony`, `a_status`) VALUES ('','".$pid."','".$area_sqft."','".$carpet_area."','".$flat_type."','".$no_of_rooms."','".$no_of_bathrooms."','".$servant_room."','".$pooja_room."','".$property_floor."','".$total_floor."','".$parking."','".$available_from."','".$facing."','".$flooring."','".$view."','".$property_type."','".$terrace."','".$comment_1."','".$monthly_rent."','".$security_deposit."','".$maintenance."','".$comment_2."','".$society_name."','".$locality."','".$sub_locality."','".$landmark."','".$water_drinking."','".$water_utility."','".$age_of_construction."','".$power_backup."','".$lift_in_building."','".$security."','".$visitors_parking."','".$maintenance_staff."','".$pets_allowed."','".$comment_3."','".$tenant_preference."','".$time_preference."','".$furnishing."','".$f_type."','".$comment_4."','".$society_amenities."','".$comment_5."','".$image."','".$vedio."','".$city."','".$n_rent."','".$n_deposit."','".$balcony."','".$dry_balcony."','0')";
			$upload=  mysqli_query($connection,$query);
			if(!$upload)
			{
				echo "<script>alert('Please try again')</script>";
			}
			else
			{
				echo "<script>alert('Property is posted')</script>";
						
						$name=$_SESSION['subadminname'];
						$date=date("d/m/Y");
						$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','$pid Property is posted')";
						$in=mysqli_query($connection,$qu);
						
						//echo "<script>window.location.href='index.php'</script>";
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
<script>
$(document).ready(function()
{
	$('#loader').hide();
});
</script>
<script>
$(document).ready(function()
{
	$('form').submit(function()
	{
		$('#loader').show();
	});
});
</script>
</body>
</html>