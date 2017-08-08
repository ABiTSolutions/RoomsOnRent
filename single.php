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
								//echo "$('#photos').append('<img src='$item' alt='Aniket Kanade'>');";
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
								<br/><br/>
							</div>
							
<div class="clearfix"> </div>

			<div class=" col-md-6 buy-sin middle-side immediate padleft">
				<h4>Society / Project Details</h4>
						<table>
						<?php
						if(!empty($row['society_name']))
						{
						?>
						<tr>
					     <td><p><span class="bath">Society Name </span></p></td><td><p> <span class="two"><?php echo $row['society_name'] ?></span></p></td>
					     </tr>
						 <?php
						}
						if(!empty($row['locality']))
						{
						?>
						 <tr>
						 <td><p><span class="bath1">Locality </span> </p></td><td><p><span class="two"><?php echo $row['locality'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['sub_locality']))
						{
						?>
						 <tr>
					     <td><p><span class="bath2">Sub-Locality</span> </p></td><td><p><span class="two"><?php echo $row['sub_locality'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['landmark']))
						{
						?>
					     <tr>
					     <td><p><span class="bath3">Landmark </span></p></td><td><p> <span class="two"> <?php echo $row['landmark'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['water_drinking']))
						{
						?>
						 <tr>
					     <td><p><span class="bath4">Water(Drinking)</span> </p></td><td><p> <span class="two"><?php echo $row['water_drinking'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['water_utility']))
						{
						?>
						 <tr>
					     <td><p><span class="bath5">Water(Utility) </span> </p></td><td><p><span class="two"> <?php echo $row['water_utility'] ?></span></p>	</td>
						 </tr>
						 <?php
						}
						if(!empty($row['age_of_construction']))
						{
						?>
						 <tr>
					     <td><p><span class="bath">Age of Construction </span> </p></td><td><p><span class="two"><?php echo $row['age_of_construction'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['power_backup']))
						{
						?>
					     <tr>
					     <td><p><span class="bath1">Power Backup </span> </p></td><td><p><span class="two"><?php echo $row['power_backup'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['lift_in_building']))
						{
						?>
					     <tr>
					     <td><p><span class="bath2">Lift in building</span> </p></td><td><p><span class="two"><?php echo $row['lift_in_building'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['security']))
						{
						?>
					     <tr>
					     <td><p><span class="bath3">Security </span> </p></td><td><p><span class="two"> <?php echo $row['security'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['visitors_parking']))
						{
						?>
						 <tr>
					     <td><p><span class="bath4">Visitors Parking</span> </p></td><td><p> <span class="two"><?php echo $row['visitors_parking'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['maintenance_staff']))
						{
						?>
						 <tr>
					     <td><p><span class="bath5">Maintenance Staff </span></p></td><td><p> <span class="two"> <?php echo $row['maintenance_staff'] ?></span></p></td>
						 </tr>	
						 <?php
						}
						if(!empty($row['pets_allowed']))
						{
						?>
						 <tr>
					     <td><p><span class="bath1">Pets Allowed </span> </p></td><td><p><span class="two"><?php echo $row['pets_allowed'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['comment_3']))
						{
						?>
					     <tr>
					     <td><p><span class="bath2">Comment</span> </p></td><td><p><span class="two"><?php echo $row['comment_3'] ?></span></p></td>
						 </tr>
						 <?php
						 }
						 ?>
						</table>
												<hr/>
						<h4>Abuse Property</h4>
				<p>Click on button if property is abuse</p>
											<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
												 <input type="submit" name="abuse" class="hvr-sweep-to-right more" style="background:#00d5fa; color:#FFF; font-weight:bold; padding:1em" value="Abuse Property" />     
											</form>
											<?php
												
												if(isset($_POST['abuse']))
												{
													$pid=$row['property_id'];
												
													$squl="select * from registation where pd_id='$pid'";
													$exe=mysqli_query($connection,$squl);
													while($row=@mysqli_fetch_array($exe))
													{
														$n=$row['name'];
														$m=$row['mobile'];
														$e=$row['email'];
													}
													$tname=$_SESSION['name'];
													
													$query="INSERT INTO `abuse_property`(`id`, `p_id`, `pname`, `pmobile`, `pemail`, `tname`) VALUES ('','".$pid."','".$n."','".$m."','".$e."','".$tname."')";
													//NSERT INTO `abuse_property`(`id`, `p_id`, `pname`, `pmobile`, `pemail`, `tname`, `tmobile`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
													$upload=  mysqli_query($connection,$query);
														
														if(!$upload)
														{
															echo "<script>alert('Please try again')</script>";
														}
														else
														{
															echo "<script>alert('Thank you for reporting-Abuse Property')</script>";
															
															$name=$_SESSION['name'];
															$date=date("d/m/Y");
															$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','Reporting-Abuse Property $pid')";
															$in=mysqli_query($connection,$qu);
															
														}
												}
											?>
			</div>
			<div class=" col-md-6 buy-sin middle-side immediate padleft">
				
							<h4>Rent & Deposit</h4>
						<table>
						<?php
						if(!empty($row['monthly_rnet']))
						{
						?>
						<tr>
					     <td><p><span class="bath">Monthly Rent </span></p></td><td><p> <span class="two"><?php echo $row['monthly_rnet'] ?></span></p></td>
					     </tr>
						 <?php
						}
						if(!empty($row['n_rent']))
						{
						?>
						 <tr>
					     <td><p><span class="bath">Negotiable Rent</span></p></td><td><p> <span class="two"><?php echo $row['n_rent'] ?></span></p></td>
					     </tr>
						 <?php
						}
						if(!empty($row['maintenance']))
						{
						?>
						  <tr>
					     <td><p><span class="bath2">Maintenance</span> </p></td><td><p><span class="two"><?php echo $row['maintenance'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['security_deposit']))
						{
						?>
						 <tr>
						 <td><p><span class="bath1">Security Deposit </span> </p></td><td><p><span class="two"><?php echo $row['security_deposit'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['n_deposit']))
						{
						?>
						 <tr>
					     <td><p><span class="bath2">Negotiable Deposit</span> </p></td><td><p><span class="two"><?php echo $row['n_deposit'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['commint_2']))
						{
						?>
					     <tr>
					     <td><p><span class="bath3">Comment</span></p></td><td><p> <span class="two"> <?php echo $row['commint_2'] ?></span></p></td>
						 </tr>	
						 <?php
						}
						?>
						</table>

			</div>

</div>
<div class="buy-sin-single">
 <div class="col-sm-4 buy-sin middle-side immediate" style="padding:0 0 0 15px;">
 
					  
						<h4>Property Address</h4>
						<table>
						<?php
						if(!empty($row['city']))
						{
						?>
						<tr>
					     <td><p><span class="bath">City </span></p></td><td><p> <span class="two"><?php echo $row['city'] ?></span></p></td>
					     </tr>
						<?php
						}
						if(!empty($row['locality']))
						{
						?>
						 <tr>
						 <td><p><span class="bath1">Locality </span> </p></td><td><p><span class="two"><?php echo $row['locality'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['sub_locality']))
						{
						?>
						 <tr>
					     <td><p><span class="bath2">SubLocality</span> </p></td><td><p><span class="two"><?php echo $row['sub_locality'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['landmark']))
						{
						?>
					     <tr>
					     <td><p><span class="bath3">Landmark</span></p></td><td><p> <span class="two"> <?php echo $row['landmark'] ?></span></p></td>
						 </tr>	
						 <?php
						}
							?>
						</table>	
						<hr/>
					 	<h4>Property Details</h4>
						<table>
						<?php
						if(!empty($row['area_sqft']))
						{
						?>
						<tr>
					     <td><p><span class="bath">Area (sqft) </span></p></td><td><p> <span class="two"><?php echo $row['area_sqft'] ?></span></p></td>
					     </tr>
						 <?php
						}
						if(!empty($row['carpet']))
						{
						?>
						 <tr>
						 <td><p><span class="bath1">Carpet Area(sqft) </span> </p></td><td><p><span class="two"><?php echo $row['carpet'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['flat_type']))
						{
						?>
						 <tr>
					     <td><p><span class="bath2">Flat Type</span> </p></td><td><p><span class="two"><?php echo $row['flat_type'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['no_of_room']))
						{
						?>
					     <tr>
					     <td><p><span class="bath3">No. of Rooms </span></p></td><td><p> <span class="two"> <?php echo $row['no_of_room'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['no_of_bathroom']))
						{
						?>
						 <tr>
					     <td><p><span class="bath4">No. of Bathrooms</span> </p></td><td><p> <span class="two"><?php echo $row['no_of_bathroom'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['servant_room']))
						{
						?>
						 <tr>
					     <td><p><span class="bath5">Servant Room </span> </p></td><td><p><span class="two"> <?php echo $row['servant_room'] ?></span></p>	</td>
						 </tr>
						 <?php
						}
						if(!empty($row['pooja_room']))
						{
						?>
						 <tr>
					     <td><p><span class="bath">Pooja Room </span> </p></td><td><p><span class="two"><?php echo $row['pooja_room'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['property_floor']))
						{
						?>
					     <tr>
					     <td><p><span class="bath1">Property floor </span> </p></td><td><p><span class="two"><?php echo $row['property_floor'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['total_floor']))
						{
						?>
					     <tr>
					     <td><p><span class="bath2">Total floor(in building)</span> </p></td><td><p><span class="two"><?php echo $row['total_floor'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['parking']))
						{
						?>
					     <tr>
					     <td><p><span class="bath3">Parking </span> </p></td><td><p><span class="two"> <?php echo $row['parking'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['avilable_from_date']))
						{
						?>
						 <tr>
					     <td><p><span class="bath4">Available From</span> </p></td><td><p> <span class="two"><?php echo $row['avilable_from_date'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['facing']))
						{
						?>
						 <tr>
					     <td><p><span class="bath5">Facing </span></p></td><td><p> <span class="two"> <?php echo $row['facing'] ?></span></p></td>
						 </tr>	
						 <?php
						}
						$fff=$row['flooring'];
						if($fff[0]!='-')
						{
						?>
						 <tr>
					     <td><p><span class="bath1">Flooring </span> </p></td><td><p><span class="two"><?php echo $row['flooring'] ?></span></p></td>
						 </tr>
						 <?php
						}
						$vvv=$row['view'];
						if($vvv[0]!='')
						{
						?>
					     <tr>
					     <td><p><span class="bath2">View</span> </p></td><td><p><span class="two"><?php echo $row['view'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['property_type']))
						{
						?>
					     <tr>
					     <td><p><span class="bath3">Property Type </span> </p></td><td><p><span class="two"> <?php echo $row['property_type'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['terrace']))
						{
						?>
						 <tr>
					     <td><p><span class="bath4">Terrace</span>  </p></td><td><p><span class="two"><?php echo $row['terrace'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['balcony']))
						{
						?>
						 <tr>
					     <td><p><span class="bath4">Balcony</span>  </p></td><td><p><span class="two"><?php echo $row['balcony'] ?></span></p></td>
						 </tr>
						 <?php
						}
						$ddd=$row['dry_balcony'];
						if($ddd[0]!='-')
						{
						?>
						 <tr>
					     <td><p><span class="bath4">Dry Balcony</span>  </p></td><td><p><span class="two"><?php echo $row['dry_balcony'] ?></span></p></td>
						 </tr>
						 <?php
						}
						if(!empty($row['comment_1']))
						{
						?>
						 <tr>
					     <td><p><span class="bath5">Comment </span></p></td><td><p> <span class="two"> <?php echo $row['comment_1'] ?></span></p></td>
						 </tr>	
						 <?php
						 }
						 ?>
						</table>
							<hr/>
					<h4>Flat Amenities  </h4>
						<table>
						<?php
						if(!empty($row['furnishing']))
						{
						?>
						<tr>
					     <td><p><span class="bath">Furnishing </span></p></td><td><p> <span class="two"><?php echo $row['furnishing'] ?></span></p></td>
					     </tr>
						 <?php
						}
						if(!empty($row['furnishing_type']))
						{
						?>
						 <tr>
					     <td><p><span class="bath">Amenities </span></p></td><td><p> <span class="two"><?php echo $row['furnishing_type'] ?></span></p></td>
					     </tr>
						 <?php
						}
						if(!empty($row['comment_4']))
						{
						?>
						 <tr>
					     <td><p><span class="bath">Comment</span></p></td><td><p> <span class="two"><?php echo $row['comment_4'] ?></span></p></td>
					     </tr>
						 <?php
						}
						?>
						</table>
						<hr/>
				<h4>Society Amenities </h4>
						<table>
						<?php
						if(!empty($row['society_amenities']))
						{
						?>
						<tr>
					     <td><p><span class="bath">Society Amenities </span></p></td><td><p> <span class="two"><?php echo $row['society_amenities'] ?></span></p></td>
					     </tr>
						 <?php
						}
						else
						{
						?>
						<tr>
					     <td><p><span class="bath">Society Amenities </span></p></td><td><p> <span class="two">Not Mentioned</span></p></td>
					     </tr>
						<?php
						}
						if(!empty($row['comment_5']))
						{
						?>
						 <tr>
					     <td><p><span class="bath">Comment </span></p></td><td><p> <span class="two"><?php echo $row['comment_5'] ?></span></p></td>
					     </tr>
						 <?php
						}
						?>
						</table>
						<hr/>
						<h4>Tenant Preference</h4>
						<table>
						<?php
						if(!empty($row['tenant_preference']))
						{
						?>
						<tr>
					     <td><p><span class="bath">Tenant Preference </span></p></td><td><p> <span class="two"><?php echo $row['tenant_preference'] ?></span></p></td>
					     </tr>
						 <?php
						}
						?>
						<tr>
					     <td><p><span class="bath">Tenant Preference </span></p></td><td><p> <span class="two">Not Mentioned</span></p></td>
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
					
					 <div class="clearfix"> </div>
					</div>
				<br/><br/>
		</div>
		
		<div class="row single-box">
		
			<div class="clearfix"> </div>
		</div>
		
		
		<div class="clearfix"> </div>
		</div>
	</div>
<?php
				}
				?>

<!---->
<br/><br/>
<!--footer-->

<div style="position:fixed; z-index:9; right:0; bottom:0px; margin:15px;">
						<form name="form" id="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >	 
							 <!--
							 <a href="#" onclick="this.form.submit()" data-toggle="modal" data-target="#ownerdetails" class="hvr-sweep-to-right more" style="background:#27da93; color:#FFF; font-weight:bold; padding:1em" >Contact Owner</a>  
							 <input type="hidden" name="contactowner" value="helloworld" />
							 -->
							 <input type="hidden" name="contactowner" value="helloworld" />
							 <input class="hvr-sweep-to-right more" style="background:#00d5fa; color:#FFF; font-weight:bold; padding:1em" type="submit" name="conowner" value="Contact Owner" />
							 
						</form>
					 </div>
					 <?php
					  if(isset($_POST['contactowner']))
					  {
						echo "<script>
								 $(window).load(function(){
									 $('#ownerdetails').modal('show');
								 });
							</script>";
						$name=$_SESSION['name'];
						$query="SELECT * FROM `tenant_reg` where name = '$name'";
						$sql = @mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql))
						{
							$pd=$row['pd_id'];
							$planc=$row['planc'];
						}
						if($pd=='1' && $planc>=1)
						{
					 ?>
					 		   <!-- Modal -->
								  <div class="modal fade" id="ownerdetails" role="dialog">
									<div class="modal-dialog modal-sm">
									
									  <!-- Modal content-->
									  <div class="modal-content">
										
										<div class="modal-body">
										
										<?php
											$id=$_GET['id'];
											$qy="SELECT * FROM `registation` where pd_id = '$id'";
											$sl = @mysqli_query($connection,$qy);
											while($row = mysqli_fetch_array($sl))
											{
												$name=$row['name'];
												$email=$row['email'];
												$mobile=$row['mobile'];
											}
											
											$oname=$_SESSION['name'];
											
											$rqy="SELECT planc FROM `tenant_reg` where name = '$oname'";
											$rsl = @mysqli_query($connection,$rqy);
											$row = mysqli_fetch_row($rsl);
											$plan=$row[0];
											$plan=$plan-1;
											
											$rqy1="SELECT vpd_id FROM `tenant_reg` where name = '$oname'";
											$rsl1 = @mysqli_query($connection,$rqy1);
											$row1 = mysqli_fetch_row($rsl1);
											
											$vpd=$row1[0];
											
											$pid=$_GET['id'];
											
											if($plan != 0)
											{
												
												if(preg_match('/\b' . $pid . '\b/', $vpd))
												{
													echo "";
												}
												else
												{
													$reg_u="UPDATE tenant_reg SET planc = $plan WHERE name = '$oname'";
													$reg_i=mysqli_query($connection,$reg_u);
												
													$vpdid=$vpd.''.$pid.',';
													$reg_u1="UPDATE tenant_reg SET vpd_id = '$vpdid' WHERE name = '$oname'";
													$reg_i1=mysqli_query($connection,$reg_u1);
												}
											}
											else
											{
												if(preg_match('/\b' . $pid . '\b/', $vpd))
												{
													echo "";
												}
												else
												{
													$reg_u="UPDATE tenant_reg SET planc = $plan,`pd_id`='0' WHERE name = '$oname'";
													$reg_i=mysqli_query($connection,$reg_u);
													
													$vpdid=$vpd.''.$pid.',';
													$reg_u1="UPDATE tenant_reg SET vpd_id = '$vpdid' WHERE name = '$oname'";
													$reg_i1=mysqli_query($connection,$reg_u1);
												}
											}
											
										?>
										
										
										<button style="    position: absolute;
									right: -15px;
									top: -18px;
									background: #FFF;
									border-radius: 50%;
									padding: 3px 6px;
									border: 2px Solid #000; opacity:1;" type="button" class="close" data-dismiss="modal">&times;</button>
											<div class="columns">
											  <ul class="price">
												<li class="header" style="background-color:#b32505">Owner Details</li>
												<li class="grey">Name: <?php echo $name ?></li>
												<!--<li>Email: <?php echo $email ?></li>-->
												<li>Mobile: <?php echo $mobile ?></li>
												<li style="color:#FFF; background:#27da93" class="grey"><a href="exchange.php?name=<?php echo $name;?>&email=<?php echo $email?>&mobile=<?php echo $mobile?>&id=<?php echo $id?>" style="color:#FFF; background:#27da93" class="button">Exchange Contacts</a></li>
											  </ul>
											</div>

										</div>
									   
									  </div>
									  
									</div>
								  </div>
					 <?php
						}
						else
						{
					 ?>
								
								<!-- Modal -->
								  <div class="modal fade" id="ownerdetails" role="dialog">
									<div class="modal-dialog">
									
									  <!-- Modal content-->
									       <div class="modal-content">
        
        <div class="modal-body">
		<button style="    position: absolute;
    right: -15px;
    top: -18px;
    background: #FFF;
    border-radius: 50%;
    padding: 3px 6px;
    border: 2px Solid #000; opacity:1;" type="button" class="close" data-dismiss="modal">&times;</button>
			<div class="columns">
<ul class="price">
				<li class="header" style="background-color:#b32505; font-size: 20px;">
				<span>Fair Plan -</span> <span>Rs.100 Only/-</span><br>
				<span style="font-size: 16px;">Save Brokerage, Time &amp; efforts</span>
				</li>
				<li> 
					<span style="font-size: 20px;margin-left: 5px;color: #52a081;float: left;"><i class="glyphicon glyphicon-time"></i> </span>
					<span>Validity <b>90 days</b></span>
				</li>
<li> <span style="font-size: 20px;margin-left: 5px;color: #52a081;float: left;"><i class="glyphicon glyphicon-home"></i></span>
					 <span>Contact 25 verified owners</span>
				</li>
				<li> 
					<span style="font-size: 20px;margin-left: 5px;color: #52a081;float: left;"><i class="glyphicon glyphicon-file"></i></span>
					<span>Save Rs.300 on doorstep Rental Agreement</span>
				</li>
				
				<li> 
					<span style="font-size: 20px;margin-left: 5px;color: #52a081;float: left;"><i class="glyphicon glyphicon-user"></i></span> 
					<span>Get personal Relation-ship manager for any assistance</span>
				</li>
				<li style="
    color: #ca4425;
    font-size: 22px;
">"Purchase Plan &amp; Get Relax"</li>
				<li style="/* color:#FFF; *//* background:#27da93 */" class="grey"><a href="PayUMoney.php" style="color:#FFF;background:#27da93;padding: 17px;border-radius: 10px;" class="button">Purchase Now</a></li>
			  </ul>
			</div>

        </div>
       
      </div>
									  
									</div>
								  </div>	
					<?php
						}
						
					?>
							
					<?php
					}
					?>

<!--footer-->					
<?php
	include('footer.php');
?>
<!--//footer-->
</body>
</html>