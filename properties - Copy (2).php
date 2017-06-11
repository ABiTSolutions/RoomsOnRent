<?php
include('conn.php'); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Property</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="index.html">Home</a></li>
						<li><a  href="about.html">About Us</a></li>
						<li><a  href="why.html">Why Fair Owner</a></li>
						<li><a  href="how.html">How It Works</a></li>
						<li><a  href="agreement.html">Agreement</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.html">
					<img src="images/logo.png" />
				</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav" style="float:right" >
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+91 8888599993</span></li>
				<li>
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Your Personal Manageer<span class="caret" style="display:inline-block"></span></a>
					  
					  <ul class="dropdown-menu" style="left:auto; right:0; top:35px">
						<li style="display:block"><a href="#" style="color:#000; margin:0;"><b>Call Your Personal Manager</b></a></li>
						<li style="display:block"><a href="#" style="color:#000; margin:0;">Mobile: 9922334455</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Email: info@domain.com</a></li>
					  </ul>
					  
					</div>
					
					
				</li>
				<li>
					<div class="dropdown">
					  <a  class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i>Hi <?php echo $_SESSION['name']; ?> <span class="caret" style="display:inline-block"></span></a>
					  
					  <ul class="dropdown-menu" style="left:auto; right:0; top:35px">
						<li style="display:block"><a href="profile.html" style="color:#000; margin:0;">Profile</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Post Property</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">View Property</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Agreement</a></li>
						<li style="display:block"><a href="#" style="color:#000;  margin:0;">Logout</a></li>
					  </ul>
					  
					</div>
					
				</li>
				
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
<div class=" banner-buying" style="min-height: 140px;">
	<div class=" container">
		
		<h3 style="margin-top:2em">
		<div class="row">
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" style="width:80%; margin:0 auto; padding:7px; background:#27da93" role="form">
			  <div class="col-md-2" style="padding-left:2px; padding-right:2px;">
				  <input type="text" name="city" class="form-control" placeholder="Pune" readonly="" />
			  </div>
			  <div class="col-md-2" style="padding-left:2px; padding-right:2px;">
				  <input type="text" name="locality" class="form-control" placeholder="Locality" value="<?php echo isset($_POST['locality']) ? $_POST['locality'] : '' ?>" />
			  </div>
			  <div class="col-md-2" style="padding-left:2px; padding-right:2px;">
				  <select name="type" class="form-control">
					<option>Any BHK</option>
					<option value="1HK">1HK</option>
					<option value="1BHK">1BHK</option>
					<option value="2BHK">2BHK</option>
				  </select>
			  </div>
			  <div class="col-md-2" style="padding-left:2px; padding-right:2px;">
				  <select name="furnishing" class="form-control">
					<option>Furnishing</option>
					<option value="unfurnish">Unfurnished</option>
					<option value="semifurnish">Semi-Furnished</option>
					<option value="fullyfurnish">Fully-Furnished</option>
				  </select>
			  </div>
			  <div class="col-md-2" style="padding-left:2px; padding-right:2px;">
				  <select name="rent" class="form-control">
					<option>Maximum Rent</option>
					<option value="10000">Rs. 10,000</option>
					<option value="15000">Rs. 15,000</option>
					<option value="20000">Rs. 20,000</option>
					<option value="25000">Rs. 25,000</option>
					<option value="30000">Rs. 30,000</option>
					<option value="35000">Rs. 35,000</option>
					<option value="40000">Rs. 40,000</option>
					<option value="45000">Rs. 45,000</option>
					<option value="50000">Rs. 50,000</option>
					<option value="60000">Rs. 50,000 + </option>
				  </select>
			  </div>
			  <div class="col-md-2" style="padding-left:2px; padding-right:2px;">
				  <input type="submit" name="filter" value="Apply Filter" class="btn btn-primary form-control" style="display:block; background:#17c37f; border-color:#17c37f" />
			  </div>
			  <div class="clearfix"> </div>
			</form>
			
			
		</div>
	</h3>
	
		
	</div>
</div>
<!--//header-->
<!--Dealers-->
<div class="dealers" style="padding:3em 0 5em 0">
<div class="container">
	
	<div class="dealer-top">
		<h4>Properties</h4>
			<div class="deal-top-top">
				
				<?php
				
				if(isset($_POST['filter']))
				{
						$city=$_POST['city'];
						$locality=$_POST['locality'];
						$type=$_POST['type'];
						$furnishing=$_POST['furnishing'];
						$rent=$_POST['rent'];
						
						//$id = @$_GET['id'];
						//$id=16;
						$start=0;
						$limit=1;
						if(isset($_GET['id']))
							{
								$id=$_GET['id'];
								$start=($id-1)*$limit;
							}
							else{
								$id=1;
							}
							
						  $query = "SELECT * FROM `property_details` WHERE city='$city' || locality='$locality' || flat_type='$type' || furnishing='$furnishing' || monthly_rnet='$rent' ORDER BY id DESC LIMIT $start, $limit";
						

						$sql = @mysqli_query($connection,$query);
				
				 while($row = mysqli_fetch_array($sql))
				{
			    ?>  
				
				<div class="col-md-3 top-deal-top" style="margin:10px 0">
					<div class=" top-deal">
						<a href="<?php echo "single.php?id=".$row['id']; ?>" class="mask">
						<img src="<?php echo $row['image'] ?>" class="img-responsive zoom-img" alt="">
							<img src="images/fairowner.png" style="position:absolute; z-index:9; right:20%; top:3%; height:150px" />
						</a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="<?php echo "single.php?id=".$row['id']; ?>"> Zero Brokerage</a></h5>
								<h5><a href="<?php echo "single.php?id=".$row['id']; ?>"> <?php echo $row['flat_type'] ?> in <?php echo $row['locality'] ?></a></h5>
								<p>Rent: Rs. <?php echo $row['monthly_rnet'] ?></p>
								<p>Deposite: Rs. <?php echo $row['security_deposit'] ?></p>
							</div>
							<div class="top-deal2">
								<a href="<?php echo "single.php?id=".$row['id']; ?>" class="hvr-sweep-to-right more">Details</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
				<?php
				}
				?>
				<div class="clearfix"> </div>
		</div>		
						
		<div class="nav-page">
			<nav>
			  <?php
				
				//fetch all the data from database.
				$rows=mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `property_details` WHERE city='$city' || locality='$locality' || flat_type='$type' || furnishing='$furnishing' || monthly_rnet='$rent'"));
				//calculate total page number for the given table in the database 
				$total=ceil($rows/$limit);
				?>
			  <ul class='pagination'>

				<?php
				//show all the page link with page number. When click on these numbers go to particular page. 
						if($id>1)
						{
							//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
							echo"<li class='disabled'><a href='?id=".($id-1)."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
						}
						for($i=1;$i<=$total;$i++)
						{
							if($i==$id) 
							{ 
								echo "<li class='active'><a href='#'>".$i." <span class='sr-only'>(current)</span></a></li>"; 
							}
							else 
							{ 
								echo "<li><a href='?id=".$i."'>".$i."</a></li>";
							}
						}
						if($id!=$total)
						{
							////Go to previous page to show next 10 items.
							echo "<li><a href='?id=".($id+1)."' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
						}
				?>
				</ul>
			</nav>
		</div>
		
		<?php
		}
		
				else
				{	
						//$id = @$_GET['id'];
						//$id=16;
						$start=0;
						$limit=1;
						if(isset($_GET['id']))
							{
								$id=$_GET['id'];
								$start=($id-1)*$limit;
							}
							else{
								$id=1;
							}
							$saddress=$_SESSION['saddress'];
						$query = "SELECT * FROM `property_details` WHERE locality='$saddress' ORDER BY id DESC LIMIT $start, $limit";
						

						$sql = @mysqli_query($connection,$query);
				
				 while($row = mysqli_fetch_array($sql))
				{
			    ?>  
				
				<div class="col-md-3 top-deal-top" style="margin:10px 0">
					<div class=" top-deal">
						<a href="<?php echo "single.php?id=".$row['id']; ?>" class="mask">
						<img src="<?php echo $row['image'] ?>" class="img-responsive zoom-img" alt="">
							<img src="images/fairowner.png" style="position:absolute; z-index:9; right:20%; top:3%; height:150px" />
						</a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="<?php echo "single.php?id=".$row['id']; ?>"> Zero Brokerage</a></h5>
								<h5><a href="<?php echo "single.php?id=".$row['id']; ?>"> <?php echo $row['flat_type'] ?> in <?php echo $row['locality'] ?></a></h5>
								<p>Rent: Rs. <?php echo $row['monthly_rnet'] ?></p>
								<p>Deposite: Rs. <?php echo $row['security_deposit'] ?></p>
							</div>
							<div class="top-deal2">
								<a href="<?php echo "single.php?id=".$row['id']; ?>" class="hvr-sweep-to-right more">Details</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
				<?php
				}
			
				?>
				
			<div class="clearfix"> </div>
		</div>		
						
		<div class="nav-page">
			<nav>
			  <?php
				//fetch all the data from database.
				$rows=mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `property_details` WHERE locality='$saddress'"));
				//calculate total page number for the given table in the database 
				$total=ceil($rows/$limit);
				?>
			  <ul class='pagination'>

				<?php
				//show all the page link with page number. When click on these numbers go to particular page. 
						if($id>1)
						{
							//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
							echo"<li class='disabled'><a href='?id=".($id-1)."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
						}
						for($i=1;$i<=$total;$i++)
						{
							if($i==$id) 
							{ 
								echo "<li class='active'><a href='#'>".$i." <span class='sr-only'>(current)</span></a></li>"; 
							}
							else 
							{ 
								echo "<li><a href='?id=".$i."'>".$i."</a></li>";
							}
						}
						if($id!=$total)
						{
							////Go to previous page to show next 10 items.
							echo "<li><a href='?id=".($id+1)."' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
						}
				?>
				</ul>
			</nav>
		</div>
		
		<?php
		}
		?>

		
		
		
		
		
		
		
		
	</div>
</div>
</div>
<!--footer-->
<?php
	include('footer.php');
?>
<!--//footer-->
</body>
</html>