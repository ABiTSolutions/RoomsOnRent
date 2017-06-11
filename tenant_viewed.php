<?php
	session_start();
	include('conn.php');
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
<script src="js/bootstrap.js"></script>
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
<body style="background: rgba(39, 218, 147, 0.08);">
<!--header-->
<?php
			include('header.php');
?>
<!--//-->	
<!--Dealers-->
<div class="dealers" style="padding:6em 0 5em 0">
<div class="container">
	
	<div class="dealer-top">
		<h4>Properties Viewed</h4>
			<div class="deal-top-top">
			
			 <?php
				$sname=$_SESSION['name'];
				$q="SELECT * FROM `tenant_reg` where name='$sname'";
				$s = @mysqli_query($connection,$q);
				 while($row = mysqli_fetch_array($s))
				{
					$pid=$row['vpd_id'];
				}
				$vpdi=explode(',', $pid);
				$vpdid = join("','", $vpdi);
				$query = "select * from property_details WHERE property_id in ('$vpdid')";
				$sql = @mysqli_query($connection,$query);
				 while($row = mysqli_fetch_array($sql))
				{
			    ?>  
				
				<div class="col-md-3 top-deal-top" style="margin:10px 0">
					<div class=" top-deal">
						<a href="<?php echo "single.php?id=".$row['property_id']; ?>" class="mask">
						<?php
							$c_images=$row['image'];
							$array =  explode(',', $c_images);
						?>
						<img src="<?php if(empty($array[0])){ echo "images/no-image.jpg"; }else{echo $array[0];} ?>" class="img-responsive zoom-img" alt="">
							<img class="hidden-xs" src="images/logo2.png" style="position:absolute; z-index:9; right:20%; top:3%; height:150px" />
						</a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="<?php echo "single.php?id=".$row['property_id']; ?>"> Zero Brokerage</a></h5>
								<h5><a href="<?php echo "single.php?id=".$row['property_id']; ?>"> <?php echo $row['flat_type'] ?> in <?php echo $row['locality'] ?></a></h5>
								<p>Rent: Rs. <?php echo $row['monthly_rnet'] ?></p>
								<p>Deposite: Rs. <?php echo $row['security_deposit'] ?></p>
							</div>
							<div class="top-deal2">
								<a href="<?php echo "single.php?id=".$row['property_id']; ?>" class="hvr-sweep-to-right more">Details</a>
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
		
		<!--<div class="nav-page">
		<nav>
      <ul class="pagination">
        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
     </ul>
   </nav>
   </div>-->
	</div>
</div>
</div>
<!--footer-->
<?php
	include('footer.php');
?>
<!--//footer-->

<div style="position:fixed; z-index:9; right:0; bottom:0px; margin:15px;">
	<a href="tenant_dashboard.php" class="hvr-sweep-to-right more" style="background:#27da93; color:#FFF; font-weight:bold; padding:1em" >Back</a>     
</div>

</body>
</html>