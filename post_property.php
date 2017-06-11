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
<!--Scrolling background-->
<link href="css/rolling_background.css" rel="stylesheet">
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<div id="loader" style="position:fixed; top:0; left:0; width:100%; height:100%;">
	<div>	
		<img src="images/loader.gif" style="position: absolute; top: 30%; bottom: 0; right: 0;left: 0;margin: 0 auto; width: 150px;" />
	</div>
</div>
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
</br>
<div class="loan_single">
	<div class="container">
		<div class="loan-col" style="padding:1em 0 2em 0">
			<form name="post" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" >
			
			<div class="col-loan">
			
				<h3 style="font-size: 2em; color: #00d5fa;">Property Details</h3>
				<br/>
			<!--<div class="cd-fixed-bg cd-bg-1">--_ANUP-->
			
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-6 cd-col-top">
					
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="email">Area (sqft):</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="area_sqft" placeholder=""  >
					</div>
				  </div> -->
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Carpet Area(sqft):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="carpet_area" placeholder=""  >
					</div>
				  </div> -->

				  <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Property Type:</label>
					<div class="col-sm-8">
					  <select name="property_type" id="propertytype" class="form-control">
					    <option value="">---select property type---</option>
						<option value="apartment">Single Room</option>
						<option value="banglow">Flat / Apartment</option>
						<option value="row house">Hostel / PG</option>
						<option value="residential house">Residential House</option>
						<!-- <option value="corporate flat">Corporate Flat</option>
						<option value="service apartment">Service Apartment</option> -->
					  </select>
					</div>
				  </div>
				  <!-- <div class="form-group">
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
				  </div> -->
				  
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Sharing Type:</label>
					<div class="col-sm-8">
					  <select class="form-control" id="flattype" name="flat_type">
						<option value="">---select sharing type---</option>
						<option value="1RK">1 Sharing</option>
						<option value="1BHK">2 Sharing</option>
						<option value="2BHK">3 Sharing</option>
						<option value="3BHK">4 Sharing</option>
						<option value="4BHK">5 Sharing</option>
						<option value="4BHK+">6 Sharing</option>
						<option value="4BHK++">6+ Sharing</option>
					  </select>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Parking:</label>
					<div class="col-sm-8">
					  <select name="parking" id="parking" class="form-control">
					    <option value="">---select parking---</option>
						<option value="two wheeler">Two Wheeler</option>
						<option value="four wheeler">Four Wheeler</option>
						<option value="two/four wheeler">Both</option>
						<option value="Dedicated parking is not available">Parking NOT available</option>
						
					  </select>
					</div>
				  </div>
				  
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="email">No. of Bathrooms:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="no_of_bathrooms"  placeholder=""  >
					</div>
				  </div> -->
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Servant Room:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="servant_room" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="servant_room" value="no"/>No
					  </label>
					</div>
				  </div> -->
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Pooja Room:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="pooja_room" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="pooja_room" value="no"/>No
					  </label>
					</div>
				  </div> -->
				  
				  <!-- <div class="form-group">
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
				  </div> -->
				
				</div>
				<div class="col-md-6 cd-col-top">
						
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Parking:</label>
					<div class="col-sm-8">
					  <select name="parking" id="parking" class="form-control">
					    <option value="">---select parking---</option>
						<option value="two wheeler">Two Wheeler</option>
						<option value="four wheeler">Four Wheeler</option>
						<option value="two/four wheeler">Both</option>
						<option value="Dedicated parking is not available">Parking NOT available</option>
						
					  </select>
					</div>
				  </div> -->
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Available From:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="available_from" placeholder="01/01/2016"  >
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
				  
				  <!-- <div class="form-group">
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
				  </div> -->
				 <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="email">Flooring:</label>
					<div class="col-sm-8">
					  <select name="flooring" class="form-control">
					    <option>---flooring---</option>
						<option value="vitrified">Vitrified</option>
						<option value="wooden">Wooden</option>
					  </select>
					</div>
				  </div> -->
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="email">View:</label>
					<div class="col-sm-8">
					  <select name="view" class="form-control">
					    <option>---select---</option>
						<option value="garden">Garden</option>
						<option value="main road">Main Road</option>
						<option value="amortizes">Amortizes</option>
						<option value="others">Others</option>
					  </select>
					</div>
				  </div> -->
				  <!-- <div class="form-group">
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
				  </div> -->
				  
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Terrace:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="terrace" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="terrace" value="no"/>No
					  </label>
					</div>
				  </div> -->
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Balcony:</label>
					<div class="col-sm-8">
					  <select name="balcony" id="balcony" class="form-control">
					    <option value="">---balcony---</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="4+">4+</option>
					  </select>
					</div>
				  </div> -->
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Dry Balcony:</label>
					<div class="col-sm-8"> 
					  <select name="dry_balcony" class="form-control">
					    <option>---select dry balcony---</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					  </select>
					</div>
				  </div> -->
				  
				</div>
				</div> 
				
				<div class="clearfix"></div>
				
				<!--</div>--_ANUP-->
				<br/>
				
				<h3 style="font-size: 2em; color: #00d5fa;">Property Address</h3>
				<br/>
				<div class="cd-fixed-bg">
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-6 cd-col-top">
					<div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>City</label>
					<div class="col-sm-8">
					  <select name="city" id="city" class="form-control">
					    <option value="">---City---</option>
						<option value="Pune">Amravati</option>
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
				<div class="col-md-6 cd-col-top">
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
				</div>
				</br>
				<h3 style="font-size: 2em; color: #00d5fa;">Rent & Deposit</h3>
				<br/>
				<div class="cd-fixed-bg">
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-6 cd-col-top">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email"><span style="color:red">*</span>Monthly Rent:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="rent" name="monthly_rent" placeholder="₹ / person"  >
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
						<input type="radio" name="maintenance" value="Including" id="Including" />Including
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="maintenance" value="Excluding" id="Excluding" />Excluding
					  </label>
					</div>
					
				  </div>
				 
				
				</div>
				<div class="col-md-6">
					
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd"><span style="color:red">*</span>Security Deposit:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" id="deposit" name="security_deposit" placeholder="₹ / person"  >
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
				  
				</div>
				
				<div class="clearfix"></div>
				</div>
				</div>
				
				</br>
				<h3 style="font-size: 2em; color: #00d5fa;">Society / Property Details</h3>
				<br/>
				<div class="cd-fixed-bg">
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-6 cd-col-top">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Society Name:</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="society_name" placeholder=""  >
					</div>
				  </div>
				 
				   <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Drinking):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="water_drinking" placeholder="5hr"  >
					</div>
				  </div>
				   <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Utility):</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="water_utility" placeholder="24hr"  >
					</div>
				  </div> -->
				   <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Age of Construction:</label>
					<div class="col-sm-8"> 
					  <input type="text" class="form-control" name="age_of_construction" placeholder="5 Year"  >
					</div>
				  </div> -->
					<div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Drinking):</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="water_drinking" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="water_drinking" value="no"/>No
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Water(Utility):</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="water_utility" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="water_utility" value="no"/>No
					  </label>
					</div>
				  </div>
				  
				</div>
				</br>
				
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
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Lift in building:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="lift_in_building" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="lift_in_building" value="no"/>No
					  </label>
					</div>
				  </div> -->
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
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Maintenance Staff:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="maintenance_staff" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="maintenance_staff" value="no"/>No
					  </label>
					</div>
				  </div> -->
				  <!-- <div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Pets Allowed:</label>
					<div class="col-sm-8"> 
					  <label class="radio-inline">
						<input type="radio" name="pets_allowed" value="yes"/>Yes
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="pets_allowed" value="No"/>No
					  </label>
					</div>
				  </div> -->
				  
				  
				 
				</div>
				
				<div class="clearfix"></div>
				</div>
				</div>
				</br>
				
				<h3 style="font-size: 2em; color: #00d5fa;">Tenant Preference</h3>
			
				<div class="cd-fixed-bg">
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-12 cd-col-top">
					
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd">&nbsp;</label>
					<div class="col-sm-10"> 
					  <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="family"/>Family
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="student Boys"/>Student Boys
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="student Girls"/>Student Girls
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="working bachelors"/>Working Boys 
					  </label>
					   <label class="checkbox-inline">
						<input type="checkbox" name="tenant_preference[]" value="working girls"/>Working Girls 
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
				</div>
				</br>
				
				<h3 style="font-size: 2em; color: #00d5fa;"><span style="color:red">*</span>Preferred time to call </h3>
				
				<div class="cd-fixed-bg">
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-12 cd-col-top">
					
				  <div class="form-group">
					<label class="control-label col-sm-2" for="pwd">&nbsp;</label>
					<div class="col-md-2"></div>
					<div class="col-md-6"> 
					<label class="radio-inline">
						<input type="radio" name="time_preference" value="10am - 7pm"/>10am to 7pm
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="time_preference" value="9am - 8pm"/>9am to 9pm
					  </label>
					  <label class="radio-inline">
						<input type="radio" name="time_preference" value="any"/>Any time
					  </label>
					</div>
					<div class="col-md-2"></div>
				  </div>		
				
				</div>
				
				<div class="clearfix"></div>
				</div>
				</div>
				</br>
				
				<h3 style="font-size: 2em; color: #00d5fa;">Room Amenities / Furnishings </h3>
				<br/>
				<div class="cd-fixed-bg">
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-12 cd-col-top">
		
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
				  
				  
				</div>
				<div class="clearfix"></div>
				</div>
				</div>
				</br>
				
				<h3 style="font-size: 2em; color: #00d5fa;">Property / Society Amenities  </h3>
				<br/>
				<div class="cd-fixed-bg">
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-12 cd-col-top">
		
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
					   <!-- <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="vast n compliant"/>Vast n Compliant  
					  </label> -->
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
					  <!-- <label class="checkbox-inline">
						<input type="checkbox" name="society_amenities[]" value="garbage chute"/>Garbage Chute      
					  </label> -->
					</div>
				  </div>
				 
				</div>
				<div class="clearfix"></div>
				</div>
				</div>
				</br>
				
				<h3 style="font-size: 2em; color: #00d5fa;">Add images & video</h3>
				<br/>
				<div class="cd-fixed-bg">
				<!-- <div class="row">  --_ANUP-->
				<div class="cd-row">
				
				<!-- <div class="col-md-6">  --_ANUP-->
				<div class="col-md-6 cd-col-top">
					
				  <div class="form-group">
					<label class="control-label col-sm-4" for="email">Images:</label>
					<div class="col-sm-8">
					  <input type="file" name="uploadedimage[]" value="" multiple="multiple" >
					</div>
				  </div>
				  
				</div>
				<div class="col-md-6 cd-col-top">
				<div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Video:</label>
					<div class="col-sm-8"> 
					  <input type="file" name="uploadedvedio" value=""  >
					</div>
				  </div>
				</div>
				
				<div class="clearfix"></div>
				</div>
				</div>
				</br>
				
				<h3 style="font-size: 2em; color: #00d5fa;">Additional Comments if any</h3>
				<br/>
				<div class="row">
				
					<div class="col-md-12">
						<div class="form-group">
					<label class="control-label col-sm-2" for="email"></label>
					<div class="col-sm-8">
					  <textarea class="form-control" name="comment_5" row="6" placeholder="Type Comments if any" ></textarea>
					</div>
				  </div>
					</div>
				</div>
				</br>
				
				<!--<p>I agree to Fair-Owner' Terms & Conditions. I would like to receive property related communication through Email, Call or SMS from Fair-Owner or any of its partners.</p>
				-->
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-6">
						<div style="padding: 5px 30px;">
							<section>
								<label class="checkbox"><input type="checkbox" name="terms" id="terms"><i></i>I agree to RoomsOnRent's Terms & Conditions.</label>
							</section>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
			<!---->
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="loan-col1">
						<div class="sub1">
							<label class="hvr-sweep-to-right" style="width: 100%; text-align: center;" ><input type="submit" name="submit" onClick="return empty()" value="Post Property" placeholder="" style="font-size: 1em; padding: 20px 70px;" ></label>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
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
					$image=implode(',',$files);
				}


if(!empty($_FILES["uploadedvedio"]["name"]))
	{
		$file_name1=$_FILES["uploadedvedio"]["name"];
		$temp_name1=$_FILES["uploadedvedio"]["tmp_name"];
		$imgtype1=$_FILES["uploadedvedio"]["type"];
		$ext1=pathinfo($file_name1,PATHINFO_EXTENSION);
		$imagename1=date("d-m-Y")."-".time().".".$ext1;
		$target_path1="uploadedvedio/".$imagename1;
		move_uploaded_file($temp_name1,$target_path1);
		
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
			$reg_u="UPDATE registation SET pd_id = '$pid', date = '$date' WHERE name = '$oname'";
			$reg_i=mysqli_query($connection,$reg_u);
			
			
			$ss="select * from registation WHERE name = '$oname'";
			$qq=mysqli_query($connection,$ss);
			while($row = mysqli_fetch_array($qq))
			{
				$man=$row['manager'];
				$id=$row['pd_id'];
			}
			
			if(!empty($man))
			{
			
				//echo "<script>alert('not empty man')</script>";
				$subsql="select p_id from sub_admin WHERE name = '$man'";
				$rsl1 = @mysqli_query($connection,$subsql);
				$row1 = mysqli_fetch_row($rsl1);
				$p_id=$row1[0];				
				
					$pidd=$p_id.''.$id.',';
					$reg_u1="UPDATE `sub_admin` SET p_id = '$pidd' WHERE name = '$man'";
					$reg_i1=mysqli_query($connection,$reg_u1);
								
			}
			
			
			$queryinsert="INSERT INTO `property_details`(`id`, `property_id`, `area_sqft`, `carpet`, `flat_type`, `no_of_room`, `no_of_bathroom`, `servant_room`, `pooja_room`, `property_floor`, `total_floor`, `parking`, `avilable_from_date`, `facing`, `flooring`, `view`, `property_type`, `terrace`, `comment_1`, `monthly_rnet`, `security_deposit`, `maintenance`, `commint_2`, `society_name`, `locality`, `sub_locality`, `landmark`, `water_drinking`, `water_utility`, `age_of_construction`, `power_backup`, `lift_in_building`, `security`, `visitors_parking`, `maintenance_staff`, `pets_allowed`, `comment_3`, `tenant_preference`, `time_preference`, `furnishing`, `furnishing_type`, `comment_4`, `society_amenities`, `comment_5`, `image`, `vedio`, `city`, `n_rent`, `n_deposit`, `balcony`, `dry_balcony`, `a_status`) VALUES ('','".$pid."','".$area_sqft."','".$carpet_area."','".$flat_type."','".$no_of_rooms."','".$no_of_bathrooms."','".$servant_room."','".$pooja_room."','".$property_floor."','".$total_floor."','".$parking."','".$available_from."','".$facing."','".$flooring."','".$view."','".$property_type."','".$terrace."','".$comment_1."','".$monthly_rent."','".$security_deposit."','".$maintenance."','".$comment_2."','".$society_name."','".$locality."','".$sub_locality."','".$landmark."','".$water_drinking."','".$water_utility."','".$age_of_construction."','".$power_backup."','".$lift_in_building."','".$security."','".$visitors_parking."','".$maintenance_staff."','".$pets_allowed."','".$comment_3."','".$tenant_preference."','".$time_preference."','".$furnishing."','".$f_type."','".$comment_4."','".$society_amenities."','".$comment_5."','".$image."','".$vedio."','".$city."','".$n_rent."','".$n_deposit."','".$balcony."','".$dry_balcony."','0')";
			$uploadinsert=  mysqli_query($connection,$queryinsert);
			if(!$uploadinsert)
			{
				echo "<script>alert('Please try again')</script>";
			}
					else
					{
						echo "<script>alert('Your Property is posted')</script>";
						
						$name=$_SESSION['name'];
						$date=date("d/m/Y");
						$qu="INSERT INTO `notificationi`(`id`, `name`, `date`, `description`) VALUES ('','$name','$date','$pid Property is posted')";
						$in=mysqli_query($connection,$qu);
						
						echo "<script>window.location.href='thankyou.php'</script>";
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
function empty() {
    var x;
    x = document.getElementById("parking").value;
    if (x == "") {
        alert("please select parking type");
		document.getElementById("parking").focus();
        return false;
    };
	
	var y;
    y = document.getElementById("facing").value;
    if (y == "") {
        alert("please select facing");
		document.getElementById("facing").focus();
        return false;
    };
	
	var z;
    z = document.getElementById("balcony").value;
    if (z == "") {
        alert("please select balcony");
		document.getElementById("balcony").focus();
        return false;
    };
	
	var a;
    a = document.getElementById("flattype").value;
    if (a == "") {
        alert("please select flat type");
		document.getElementById("flattype").focus();
        return false;
    };
	
	var b;
    b = document.getElementById("propertytype").value;
    if (a == "") {
        alert("please select property type");
		document.getElementById("propertytype").focus();
        return false;
    };
	
	var c;
    c = document.getElementById("city").value;
    if (c == "") {
        alert("please enter city");
		document.getElementById("city").focus();
        return false;
    };
	
	var d;
    d = document.getElementById("locality").value;
    if (d == "") {
        alert("please enter locality");
		document.getElementById("locality").focus();
        return false;
    };
	
	
	
	var e;
    e = document.getElementById("rent").value;
    if (e == "") {
        alert("please enter rent");
		document.getElementById("rent").focus();
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
		document.getElementById("deposit").focus();
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
		document.getElementById("furnishing").focus();
        return false;
    };
	
	if(document.getElementById('terms').checked==false){
		 alert('Please agree for our terms & contidions');
		 document.getElementById("terms").focus();
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