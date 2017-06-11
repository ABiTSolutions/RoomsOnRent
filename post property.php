<?php
session_start();
include('conn.php'); 
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
	<h3><span>Post Your Property</span></h3> 
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
			<h4>Looking for a good deal for <span>ROOMS?</span> Post Now!!</h4>
			
			<form action="#" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" >
			
			<div class="col-loan">
			
				<h4>Property Details</h4>
				<br/>
				<div class="row">
				
				<div class="col-md-6">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Area (sqft):</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="area_sqft" placeholder="" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Carpet Area(sqft):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="carpet_area" placeholder="" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Flat Type:</label>
					<div class="col-sm-8">
					  <select class="form-control" name="flat_type">
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
					  <input type="text" class="form-control" name="no_of_rooms" id="pwd" placeholder="" required="">
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">No. of Bathrooms:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="no_of_bathrooms " id="email" placeholder="" required="">
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
					  <input type="text" class="form-control" name="property_floor" placeholder="" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Total floor(in building):</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="total_floor" placeholder="" required="">
					</div>
				  </div>
				
				</div>
				<div class="col-md-6">
						
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Parking:</label>
					<div class="col-sm-8">
					  <select name="parking" class="form-control">
						<option value="two wheeler">Two Wheeler</option>
						<option value="four wheeler">Four Wheeler</option>
						<option value="both">Both</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Available From:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="available_from" placeholder="" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Facing:</label>
					<div class="col-sm-8">
					  <select name="facing" class="form-control">
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
						<option value="vitrified">Vitrified</option>
						<option value="wooden">Wooden</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">View:</label>
					<div class="col-sm-8">
					  <select name="view" class="form-control">
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
					  <select name="property_typw" class="form-control">
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
					<label class="control-label col-sm-4" for="email">Terrace:</label>
					<div class="col-sm-8">
					  <select name="terrace" class="form-control">
						<option value="balcony">Balcony</option>
						<option value="dry">Dry</option>
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
				
				<h4>Rent & Deposit</h4>
				<br/>
				<div class="row">
				
				<div class="col-md-6">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Monthly Rent:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="monthly_rent" placeholder="" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Security Deposit:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="security_deposit" placeholder="" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Maintenance</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="maintenance" placeholder="" required="">
					</div>
				  </div>
				 
				
				</div>
				<div class="col-md-6">
				
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
					  <input type="text" class="form-control" name="society_name" placeholder="" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Locality:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="locality" placeholder="" required="">
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Sub-Locality:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="sub_locality" placeholder="" required="">
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Landmark:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="landmark" placeholder="" required="">
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Drinking):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="water_drinking" placeholder="" required="">
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Utility):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="water_utility" placeholder="" required="">
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Age of Construction:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="age_of_construction" placeholder="" required="">
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
					  <textarea class="form-control" name="comment_3 " row="4" placeholder="Additional Comment if any"></textarea>
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
				
				<h4>Time Preference</h4>
				
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
					<label class="control-label col-sm-2" for="email">Furnishing:</label>
					<div class="col-sm-4">
					  <select name="furnishing" class="form-control">
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
						<input type="checkbox" name="f_type[]" value="solar"/>Solar  
					  </label>
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
					  <textarea class="form-control" name="comment_5 " row="4" placeholder="Additional Comment if any"></textarea>
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
					  <input type="file" name="p_image" value="" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Vedio:</label>
					<div class="col-sm-8"> 
					  <input type="file" value="p_vedio" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Map:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="latitude" placeholder="Latitude" required="">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">&nbsp;</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="longitude" placeholder="Longitude" required="">
					</div>
				  </div>
				 
				
				</div>
				<div class="col-md-6">
				
				  &nbsp;
				</div>
				
				<div class="clearfix"></div>
				</div>
				
				
				<p>I agree to Fair-Owner' Terms & Conditions. I would like to receive property related communication through Email, Call or SMS from Fair-Owner or any of its partners.</p>
				
			</div>
			<!---->
			<div class="loan-col1">
				
				<div class="sub1">
					<label class="hvr-sweep-to-right"><input type="submit" onclick="window.location.href='thankyou.html'" value="Post" placeholder=""></label>
					<label class="hvr-sweep-to-right re-set"><input type="reset" value="Clear" placeholder=""></label>
				</div>
			</div>
			<!---->
			</form>
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