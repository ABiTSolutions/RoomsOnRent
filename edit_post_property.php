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
<link href="css/styles.css" rel="stylesheet">
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
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Edit Posted Property</span></h3> 
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
			<?php
			
				$id=$_GET['id'];
				$q = "SELECT * FROM `property_details` WHERE property_id = '$id'";
				$sql = @mysqli_query($connection,$q);
				 while($row = mysqli_fetch_array($sql))
				{
			    
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
					  <input type="text" class="form-control" name="area_sqft" placeholder="" value="<?php echo $row['area_sqft'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Carpet Area(sqft):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="carpet_area" placeholder="" value="<?php echo $row['carpet'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Flat Type:</label>
					<div class="col-sm-8">
					  <select class="form-control" name="flat_type">
						<option value=""><?php echo $row['flat_type'] ?></option>
						<option value="1RK">1RK</option>
						<option value="1BHK">1BHK</option>
						<option value="2BHK">2BHK</option>
						<option value="3BHK">3BHK</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">No. of Rooms:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="no_of_rooms" value="<?php echo $row['no_of_room'] ?>"  >
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">No. of Bathrooms:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="no_of_bathrooms"  value="<?php echo $row['no_of_bathroom'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Servant Room:</label>
					<div class="col-sm-8"> 
						<input type="text" class="form-control" name="servant_room" value="<?php echo $row['servant_room'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Pooja Room:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="pooja_room" value="<?php echo $row['pooja_room'] ?>"/>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Property floor:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="property_floor" value="<?php echo $row['property_floor'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Total floor(in building):</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="total_floor" value="<?php echo $row['total_floor'] ?>"  >
					</div>
				  </div>
				
				</div>
				<div class="col-md-6">
						
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Parking:</label>
					<div class="col-sm-8">
					  <select name="parking" class="form-control">
					    <option><?php echo $row['parking'] ?></option>
						<option value="two wheeler">Two Wheeler</option>
						<option value="four wheeler">Four Wheeler</option>
						<option value="two/four wheeler">Both</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Available From:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="available_from" value="<?php echo $row['avilable_from_date'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Facing:</label>
					<div class="col-sm-8">
					  <select name="facing" class="form-control">
						<option><?php echo $row['facing'] ?></option>
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
					    <option><?php echo $row['flooring'] ?></option>
						<option value="vitrified">Vitrified</option>
						<option value="wooden">Wooden</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">View:</label>
					<div class="col-sm-8">
					  <select name="view" class="form-control">
					    <option><?php echo $row['view'] ?></option>
						<option value="garden">Garden</option>
						<option value="main road">Main Road</option>
						<option value="amortizes">Amortizes</option>
						<option value="others">Others</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Property Type:</label>
					<div class="col-sm-8">
					  <select name="property_type" class="form-control">
					    <option><?php echo $row['property_type'] ?></option>
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
						<input type="text" class="form-control" name="terrace" value="<?php echo $row['terrace'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Balcony:</label>
					<div class="col-sm-8">
					  <select name="balcony" class="form-control">
					    <option><?php echo $row['balcony'] ?></option>
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
					    <option><?php echo $row['dry_balcony'] ?></option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Comment:</label>
					<div class="col-sm-8">
					  <textarea name="comment_1" class="form-control" row="2"><?php echo $row['comment_1'] ?></textarea>
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
					<label class="control-label col-sm-4" for="email">City</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="city" value="<?php echo $row['city'] ?>"  >
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Locality:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="locality" value="<?php echo $row['locality'] ?>"  >
					</div>
				  </div>
				   
				  
				
				</div>
				<div class="col-md-6">
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Sub-Locality:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="sub_locality" value="<?php echo $row['sub_locality'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Landmark:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="landmark" value="<?php echo $row['landmark'] ?>"  >
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
					<label class="control-label col-sm-4" for="email">Monthly Rent:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="monthly_rent" value="<?php echo $row['monthly_rnet'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Negotiable Rent:</label>
					<div class="col-sm-8"> 
						<input type="text" class="form-control" name="n_rent" value="<?php echo $row['n_rent'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Maintenance:</label>
					<div class="col-sm-8"> 
						<input type="text" class="form-control" name="maintenance" value="<?php echo $row['maintenance'] ?>"/>
					</div>
				  </div>
				 
				
				</div>
				<div class="col-md-6">
					
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Security Deposit:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="security_deposit" value="<?php echo $row['security_deposit'] ?>"  >
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Negotiable Deposit:</label>
					<div class="col-sm-8"> 
						<input type="text" class="form-control" name="n_deposit" value="<?php echo $row['n_deposit'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Comment:</label>
					<div class="col-sm-8">
					  <textarea class="form-control" row="4" name="comment_2" ><?php echo $row['commint_2'] ?></textarea>
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
					  <input type="text" class="form-control" name="society_name" value="<?php echo $row['society_name'] ?>"  >
					</div>
				  </div>
				 
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Drinking):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="water_drinking" value="<?php echo $row['water_drinking'] ?>"  >
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Utility):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="water_utility" value="<?php echo $row['water_utility'] ?>"  >
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Age of Construction:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="age_of_construction" value="<?php echo $row['age_of_construction'] ?>"  >
					</div>
				  </div>
				
				</div>
				<div class="col-md-6">
				
					<div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Power Backup:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="power_backup" value="<?php echo $row['power_backup'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Lift in building:</label>
					<div class="col-sm-8"> 
						<input type="text" class="form-control" name="lift_in_building" value="<?php echo $row['lift_in_building'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Security:</label>
					<div class="col-sm-8"> 
						<input type="text" name="security" class="form-control" value="<?php echo $row['security'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Visitors Parking:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="visitors_parking" value="<?php echo $row['visitors_parking'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Maintenance Staff:</label>
					<div class="col-sm-8"> 
						<input type="text" class="form-control" name="maintenance_staff" value="<?php echo $row['maintenance_staff'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Pets Allowed:</label>
					<div class="col-sm-8"> 
						<input type="text" class="form-control" name="pets_allowed" value="<?php echo $row['pets_allowed'] ?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Comment:</label>
					<div class="col-sm-8">
					  <textarea class="form-control" name="comment_3" row="4"><?php echo $row['comment_3'] ?></textarea>
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
					<div class="col-sm-4"> 
						<input type="text" class="form-control" name="tenant_preference" value="<?php echo $row['tenant_preference'] ?>"/>
					</div>
				  </div>		
				
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				<h4>Time Preference</h4>
				
				<div class="row">
				
				<div class="col-md-12">
					
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd">&nbsp;</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="time_preference" value="<?php echo $row['time_preference'] ?>"/>
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
					<label class="control-label col-sm-2" for="email">Furnishing:</label>
					<div class="col-sm-4">
					  <select name="furnishing" class="form-control">
					    <option><?php echo $row['furnishing'] ?></option>
						<option value="unfurnish">Unfurnished</option>
						<option value="semifurnish">Semi-Furnished</option>
						<option value="fullyfurnish">Fully-Furnished</option>
					  </select>
					</div>
				  </div>
       			
				
				
				
				<div id="fitem" style="">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Furnishing Amenities</label>
					<div class="col-sm-4"> 
						<textarea class="form-control" name="f_type" row="4"><?php echo $row['furnishing_type'] ?></textarea>
					</div>
				</div>
				
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email">Comment:</label>
					<div class="col-sm-4">
					  <textarea class="form-control" name="comment_4" row="4"><?php echo $row['comment_4'] ?></textarea>
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
					<div class="col-sm-4"> 
						<textarea class="form-control" name="society_amenities"> <?php echo $row['society_amenities'] ?></textarea>
					</div>
				</div>
				  <div class="form-group">
					<label class="control-label col-sm-2" for="email">Comment:</label>
					<div class="col-sm-4">
					  <textarea class="form-control" name="comment_5" row="4"><?php echo $row['comment_5'] ?></textarea>
					</div>
				  </div>
				</div>
				<div class="clearfix"></div>
				</div>
				
				<h4>Graphical Information</h4>
				<br/>
			<div class="row" style="margin-bottom:10px;">
				
				<h3>Images</h3>
				  
					<?php
							$c_images=$row['image'];
							//$c_images =substr($c_images, 0, -1);
							$array =  explode(',', $c_images);
							$i=0;
							foreach ($array as $item) 
							{
							$i++;
					?>
					<div class="col-md-2">
						<?php
							if(empty($c_images))
							{ 
						?>
							<img src="../images/default.jpg" style="width:100%; height:auto;" /> 
						<?php
							}
						?>
						<label>
						
						<?php
							if(!empty($item))
							{
						?>
							<input type="checkbox" name="image[]" value="<?php echo $item; ?>" checked="" />
							<img src="<?php echo $item; ?>" style="width:100%; height:auto;" />
						<?php 
							}
						?>
						</label>
						
					</div>
					<?php 
						if(($i % 6) == 0)
						{
							echo "<div style='clear:both'></div>";
						}
					?>
					<?php
												//echo "$('#photos').append('<img src='$item' alt='Aniket Kanade'>');";
											}
					?>
					
				 
			</div>
				<div class="row">
				
				<div class="col-md-6">
				 <?php  
					if(1==1)
					{
				 ?>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Images:</label>
					<div class="col-sm-8">
					  <input type="file" name="uploadedimage[]" value="" multiple="multiple" >
					</div>
				  </div>
				</div>
				</div>
				
				<div class="row" style="margin-bottom:10px;">
				<h3>Video</h3>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<video height="" width="100%" controls="true">
										<source src="<?php echo $row['vedio'] ?>" type="video/mp4" />
						</video>
						<input type="hidden" name="vedio" value="<?php echo $row['vedio'] ?>" />
					</div>
					<div class="col-md-6"></div>
				</div>
				
				<div class="row">	
				<div class="col-md-6">
				<?php
					}
					if(1==1)
					{
				?>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Vedio:</label>
					<div class="col-sm-8"> 
					  <input type="file" name="uploadedvedio" value=""  >
					</div>
				  </div>
				<?php
					}
				?>
				</div>
				
				<div class="col-md-6">
				
				  &nbsp;
				</div>
				
				<div class="clearfix"></div>
				</div>
				
			</div>
			<!---->
			<div class="loan-col1">
				
				<div class="sub1">
					<label class="hvr-sweep-to-right"><input type="submit" name="submit" onclick="#" value="Post" placeholder=""></label>
					<label class="hvr-sweep-to-right re-set"><a onclick="window.location.href='index.php'" style="    padding: 11px 15px;">Back</a>
				</div>
			</div>
			<!---->
			</form>
			<?php
			}
			?>
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

$tenant_preference=$_POST['tenant_preference'];


$time_preference=$_POST['time_preference'];
$furnishing=$_POST['furnishing'];

$f_type=$_POST['f_type'];



$comment_4=$_POST['comment_4'];

$society_amenities=$_POST['society_amenities'];

$comment_5=$_POST['comment_5'];

//

$city=$_POST['city'];
$n_rent=$_POST['n_rent'];
$n_deposit=$_POST['n_deposit'];
$balcony=$_POST['balcony'];
$dry_balcony=$_POST['dry_balcony'];



/*
	if(!empty($_FILES["uploadedimage"]["name"]))
	{
		$file_name=$_FILES["uploadedimage"]["name"];
		$temp_name=$_FILES["uploadedimage"]["tmp_name"];
		$imgtype=$_FILES["uploadedimage"]["type"];
		$ext=pathinfo($file_name,PATHINFO_EXTENSION);
		$imagename=date("d-m-Y")."-".time().".".$ext;
		$target_path="../uploadedimage/".$imagename;
		move_uploaded_file($temp_name,$target_path);
		
	}


$image=$target_path;
*/
$old_image=implode(',',$_POST['image']);

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
							$filePath = "uploadedimage/" . date('d-m-Y-H-i-s').'-'.$_FILES['uploadedimage']['name'][$i];

							//Upload the file into the temp dir
							if(move_uploaded_file($tmpFilePath, $filePath)) 
							{

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
					$nimage=implode(',',$files);
				}
				//echo "<script>alert('$old_image')</script>";
				
				$image=$old_image.",".$nimage;
				//$image=substr($image, 0, -1);

				$vedio=$_POST['vedio'];	
				
if(!empty($_FILES["uploadedvedio"]["name"]))
	{
		$file_name1=$_FILES["uploadedvedio"]["name"];
		$temp_name1=$_FILES["uploadedvedio"]["tmp_name"];
		$imgtype1=$_FILES["uploadedvedio"]["type"];
		$ext1=pathinfo($file_name1,PATHINFO_EXTENSION);
		$imagename1=date("d-m-Y")."-".time().".".$ext1;
		$target_path1="uploadedvedio/".$imagename1;
		move_uploaded_file($temp_name1,$target_path1);
		
		$vedio=$target_path1;
	}

//$vedio=$_POST['vedio'];	


			//$reg_u="UPDATE registation SET pd_id = '$pid' WHERE name = '$oname'";
			//$reg_i=mysqli_query($connection,$reg_u);
			$id=$_GET['id'];
			$query="UPDATE `property_details` SET `area_sqft`='$area_sqft',`carpet`='$carpet_area',`flat_type`='$flat_type',`no_of_room`='$no_of_rooms',`no_of_bathroom`='$no_of_bathrooms',`servant_room`='$servant_room',`pooja_room`='$pooja_room',`property_floor`='$property_floor',`total_floor`='$total_floor',`parking`='$parking',`avilable_from_date`='$available_from',`facing`='$facing',`flooring`='$flooring',`view`='$view',`property_type`='$property_type',`terrace`='$terrace',`comment_1`='$comment_1',`monthly_rnet`='$monthly_rent',`security_deposit`='$security_deposit',`maintenance`='$maintenance',`commint_2`='$comment_2',`society_name`='$society_name',`locality`='$locality',`sub_locality`='$sub_locality',`landmark`='$landmark',`water_drinking`='$water_drinking',`water_utility`='$water_utility',`age_of_construction`='$age_of_construction',`power_backup`='$power_backup',`lift_in_building`='$lift_in_building',`security`='$security',`visitors_parking`='$visitors_parking',`maintenance_staff`='$maintenance_staff',`pets_allowed`='$pets_allowed',`comment_3`='$comment_3',`tenant_preference`='$tenant_preference',`time_preference`='$time_preference',`furnishing`='$furnishing',`furnishing_type`='$f_type',`comment_4`='$comment_4',`society_amenities`='$society_amenities',`comment_5`='$comment_5',`image`='$image',`vedio`='$vedio',`city`='$city',`n_rent`='$n_rent',`n_deposit`='$n_deposit',`balcony`='$balcony',`dry_balcony`='$dry_balcony' WHERE property_id='$id'";
			
			//$query="INSERT INTO `property_details`(`id`, `property_id`, `area_sqft`, `carpet`, `flat_type`, `no_of_room`, `no_of_bathroom`, `servant_room`, `pooja_room`, `property_floor`, `total_floor`, `parking`, `avilable_from_date`, `facing`, `flooring`, `view`, `property_type`, `terrace`, `comment_1`, `monthly_rnet`, `security_deposit`, `maintenance`, `commint_2`, `society_name`, `locality`, `sub_locality`, `landmark`, `water_drinking`, `water_utility`, `age_of_construction`, `power_backup`, `lift_in_building`, `security`, `visitors_parking`, `maintenance_staff`, `pets_allowed`, `comment_3`, `tenant_preference`, `time_preference`, `furnishing`, `furnishing_type`, `comment_4`, `society_amenities`, `comment_5`, `image`, `vedio`, `city`, `n_rent`, `n_deposit`, `balcony`, `dry_balcony`, `a_status`) VALUES ('','".$pid."','".$area_sqft."','".$carpet_area."','".$flat_type."','".$no_of_rooms."','".$no_of_bathrooms."','".$servant_room."','".$pooja_room."','".$property_floor."','".$total_floor."','".$parking."','".$available_from."','".$facing."','".$flooring."','".$view."','".$property_type."','".$terrace."','".$comment_1."','".$monthly_rent."','".$security_deposit."','".$maintenance."','".$comment_2."','".$society_name."','".$locality."','".$sub_locality."','".$landmark."','".$water_drinking."','".$water_utility."','".$age_of_construction."','".$power_backup."','".$lift_in_building."','".$security."','".$visitors_parking."','".$maintenance_staff."','".$pets_allowed."','".$comment_3."','".$tenant_preference."','".$time_preference."','".$furnishing."','".$f_type."','".$comment_4."','".$society_amenities."','".$comment_5."','".$image."','".$vedio."','".$city."','".$n_rent."','".$n_deposit."','".$balcony."','".$dry_balcony."','0')";
					
				
					$upload=  mysqli_query($connection,$query);
				    
					if(!$upload)
					{
						echo "<script>alert('Please try again')</script>";
					}
					else
					{
						echo "<script>alert('Property is updated')</script>";
						echo "<script>window.location.href='owner_dashboard.php'</script>";
					}
	
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

</body>
</html>