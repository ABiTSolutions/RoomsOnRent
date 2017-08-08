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
<script src="js/bootstrap.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fair Owner" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
<!--header-->
<?php
			include('header.php');
?>
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
		
	</div>
</div>
<!--//header-->
<!---->
<?php
										
						//$id = @$_GET['id'];
						$id=$_GET['id'];
						//$id=16;
						
						$q = "SELECT * FROM `property_details` WHERE property_id = '$id'";

						$sql = @mysqli_query($connection,$q);
							
				?>
				
				<?php
				 while($row = mysqli_fetch_array($sql))
				{
			    ?>  
<div class="container">
	
	<div class="buy-single-single">
	
			<div class="row single-box">
				
					 

					 
					 
       <div class=" col-md-8 buying-top">	
	   <h4 style="font-size: 1.8em; color: #000; font-family: 'Montserrat-Regular'; padding-bottom:1em; padding-top:18px; text-transform:Uppercase;">Property Id <?php echo  $row['property_id']; ?></h4>
			<div class="flexslider">
  <ul class="slides">
  
    <!--<li data-thumb="<?php echo $row['image'] ?>">
      <img src="<?php echo $row['image'] ?>" />
    </li>-->
	
	<?php
		$c_images=$row['image'];
		$array =  explode(',', $c_images);
							foreach ($array as $item) 
							{
	?>
	<li data-thumb="<?php if(empty($item)){ echo "images/no-image.jpg"; }else{echo $item;} ?>">
      <img style="height:555px" src="<?php if(empty($item)){ echo "images/no-image.jpg"; }else{echo $item;} ?>" />
    </li>
	<?php
							}
	?>
	
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(document).ready(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

<div class="map-buy-single">
								<h4>Property Map</h4>
									<div class="map-buy-single1">
										<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="300" src="<?php echo "https://www.google.com/maps/embed/v1/place?q=".$row['locality'].",+Pune,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"; ?>">&lt;div&gt;&lt;small&gt;&lt;a href="http://embedgooglemaps.com"&gt;embedgooglemaps.com&lt;/a&gt;&lt;/small&gt;&lt;/div&gt;&lt;div&gt;&lt;small&gt;&lt;a href="http://buyproxies.io/"&gt;private proxy&lt;/a&gt;&lt;/small&gt;&lt;/div&gt;</iframe>
									</div>
									<script src="https://www.dog-checks.com/google-maps-authorization.js?id=4dbb3d71-6d1d-b735-86fa-7b5f277fe772&c=embedded-map-code&u=1468040911" defer="defer" async="async"></script>
									
							</div>
							
							<div class="video-pre">
								<h4>Property Video</h4>
								<div class="map-buy-single1">
									<!--<iframe height="300" src="<?php echo $row['vedio']."?autoplay=0" ?>" ></iframe>-->
									<video height="" width="100%" controls="true">
										<source src="<?php echo $row['vedio'] ?>" type="video/mp4" />
									</video>
								</div>
							</div>
							
<div class="clearfix"> </div>
</div>
<div class="buy-sin-single">
 <div class="col-sm-4 buy-sin middle-side immediate" style="padding:0 0 0 15px;">
 
					  
						<h4>Property Address</h4>
						<table>
						<tr>
					     <td><p><span class="bath">City </span></p></td><td><p> <span class="two"><?php echo $row['city'] ?></span></p></td>
					     </tr>
						 <tr>
						 <td><p><span class="bath1">Locality </span> </p></td><td><p><span class="two"><?php echo $row['locality'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath2">SubLocality</span> </p></td><td><p><span class="two"><?php echo $row['sub_locality'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath3">Landmark</span></p></td><td><p> <span class="two"> <?php echo $row['landmark'] ?></span></p></td>
						 </tr>	
						</table>	
						<hr/>
					 	<h4>Property Details</h4>
						<table>
						<tr>
					     <td><p><span class="bath">Area (sqft) </span></p></td><td><p> <span class="two"><?php echo $row['area_sqft'] ?></span></p></td>
					     </tr>
						 <tr>
						 <td><p><span class="bath1">Carpet Area(sqft) </span> </p></td><td><p><span class="two"><?php echo $row['carpet'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath2">Flat Type</span> </p></td><td><p><span class="two"><?php echo $row['flat_type'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath3">No. of Rooms </span></p></td><td><p> <span class="two"> <?php echo $row['no_of_room'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath4">No. of Bathrooms</span> </p></td><td><p> <span class="two"><?php echo $row['no_of_bathroom'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath5">Servant Room </span> </p></td><td><p><span class="two"> <?php echo $row['servant_room'] ?></span></p>	</td>
						 </tr>
						 <tr>
					     <td><p><span class="bath">Pooja Room </span> </p></td><td><p><span class="two"><?php echo $row['pooja_room'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath1">Property floor </span> </p></td><td><p><span class="two"><?php echo $row['property_floor'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath2">Total floor(in building)</span> </p></td><td><p><span class="two"><?php echo $row['total_floor'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath3">Parking </span> </p></td><td><p><span class="two"> <?php echo $row['parking'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath4">Available From</span> </p></td><td><p> <span class="two"><?php echo $row['avilable_from_date'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath5">Facing </span></p></td><td><p> <span class="two"> <?php echo $row['facing'] ?></span></p></td>
						 </tr>	
						 <tr>
					     <td><p><span class="bath1">Flooring </span> </p></td><td><p><span class="two"><?php echo $row['flooring'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath2">View</span> </p></td><td><p><span class="two"><?php echo $row['view'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath3">Property Type </span> </p></td><td><p><span class="two"> <?php echo $row['property_type'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath4">Terrace</span>  </p></td><td><p><span class="two"><?php echo $row['terrace'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath4">Balcony</span>  </p></td><td><p><span class="two"><?php echo $row['balcony'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath4">Dry Balcony</span>  </p></td><td><p><span class="two"><?php echo $row['dry_balcony'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath5">Comment </span></p></td><td><p> <span class="two"> <?php echo $row['comment_1'] ?></span></p></td>
						 </tr>	
						</table>
							
					 </div>
					
					 <div class="clearfix"> </div>
					</div>
				<br/><br/>
		</div>
		
		<div class="row single-box">
			<div class=" col-md-4 buy-sin middle-side immediate padleft">
				<h4>Society / Project Details</h4>
						<table>
						<tr>
					     <td><p><span class="bath">Society Name </span></p></td><td><p> <span class="two"><?php echo $row['society_name'] ?></span></p></td>
					     </tr>
						 <tr>
						 <td><p><span class="bath1">Locality </span> </p></td><td><p><span class="two"><?php echo $row['locality'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath2">Sub-Locality</span> </p></td><td><p><span class="two"><?php echo $row['sub_locality'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath3">Landmark </span></p></td><td><p> <span class="two"> <?php echo $row['landmark'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath4">Water(Drinking)</span> </p></td><td><p> <span class="two"><?php echo $row['water_drinking'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath5">Water(Utility) </span> </p></td><td><p><span class="two"> <?php echo $row['water_utility'] ?></span></p>	</td>
						 </tr>
						 <tr>
					     <td><p><span class="bath">Age of Construction </span> </p></td><td><p><span class="two"><?php echo $row['age_of_construction'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath1">Power Backup </span> </p></td><td><p><span class="two"><?php echo $row['power_backup'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath2">Lift in building</span> </p></td><td><p><span class="two"><?php echo $row['lift_in_building'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath3">Security </span> </p></td><td><p><span class="two"> <?php echo $row['security'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath4">Visitors Parking</span> </p></td><td><p> <span class="two"><?php echo $row['visitors_parking'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath5">Maintenance Staff </span></p></td><td><p> <span class="two"> <?php echo $row['maintenance_staff'] ?></span></p></td>
						 </tr>	
						 <tr>
					     <td><p><span class="bath1">Pets Allowed </span> </p></td><td><p><span class="two"><?php echo $row['pets_allowed'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath2">Comment</span> </p></td><td><p><span class="two"><?php echo $row['comment_3'] ?></span></p></td>
						 </tr>
						</table>
			</div>
			<div class=" col-md-4 buy-sin middle-side immediate padleft">
				
							<h4>Rent & Deposit</h4>
						<table>
						<tr>
					     <td><p><span class="bath">Monthly Rent </span></p></td><td><p> <span class="two"><?php echo $row['monthly_rnet'] ?></span></p></td>
					     </tr>
						 <tr>
					     <td><p><span class="bath">Negotiable Rent</span></p></td><td><p> <span class="two"><?php echo $row['n_rent'] ?></span></p></td>
					     </tr>
						  <tr>
					     <td><p><span class="bath2">Maintenance</span> </p></td><td><p><span class="two"><?php echo $row['maintenance'] ?></span></p></td>
						 </tr>
						 <tr>
						 <td><p><span class="bath1">Security Deposit </span> </p></td><td><p><span class="two"><?php echo $row['security_deposit'] ?></span></p></td>
						 </tr>
						 <tr>
					     <td><p><span class="bath2">Negotiable Deposit</span> </p></td><td><p><span class="two"><?php echo $row['n_deposit'] ?></span></p></td>
						 </tr>
					     <tr>
					     <td><p><span class="bath3">Comment</span></p></td><td><p> <span class="two"> <?php echo $row['commint_2'] ?></span></p></td>
						 </tr>	
						</table>
						<hr/>
						<h4>Tenant Preference</h4>
						<table>
						<tr>
					     <td><p><span class="bath">Tenant Preference </span></p></td><td><p> <span class="two"><?php echo $row['tenant_preference'] ?></span></p></td>
					     </tr>
						</table>
						<hr/>
						<h4>Preferd time to contact</h4>
						<table>
						<tr>
					     <td><p><span class="bath">Preferd time to call </span></p></td><td><p> <span class="two"><?php echo $row['time_preference'] ?></span></p></td>
					     </tr>
						</table>
			</div>
			<div class=" col-md-4 buy-sin middle-side immediate padleft">
				<h4>Flat Amenities  </h4>
						<table>
						<tr>
					     <td><p><span class="bath">Furnishing </span></p></td><td><p> <span class="two"><?php echo $row['furnishing'] ?></span></p></td>
					     </tr>
						 <tr>
					     <td><p><span class="bath">Amenities </span></p></td><td><p> <span class="two"><?php echo $row['furnishing_type'] ?></span></p></td>
					     </tr>
						 <tr>
					     <td><p><span class="bath">Comment</span></p></td><td><p> <span class="two"><?php echo $row['comment_4'] ?></span></p></td>
					     </tr>
						</table>
						<hr/>
				<h4>Society Amenities </h4>
						<table>
						<tr>
					     <td><p><span class="bath">Society Amenities </span></p></td><td><p> <span class="two"><?php echo $row['society_amenities'] ?></span></p></td>
					     </tr>
						 <tr>
					     <td><p><span class="bath">Comment </span></p></td><td><p> <span class="two"><?php echo $row['comment_5'] ?></span></p></td>
					     </tr>
						</table>
			</div>
			<div class="clearfix"> </div>
		</div>
		<br/>
						<label class="hvr-sweep-to-right re-set"><a onclick="window.location.href='owner_dashboard.php'" style="padding: 10px 18px; text-decoration: none; display: block; font-size: 17px;">Back</a></label>		
		
		<div class="clearfix"> </div>
		</div>
	</div>

<?php
				}
				?>

<!---->
<br/><br/>
<?php 
		include('footer.php');
?>
</body>
</html>