<?php
include('conn.php');
?>

<?php

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
//$image=$_POST['image'];
$vedio=$_POST['vedio'];

$image = mysqli_real_escape_string($connection,@$_POST['image']);
					
		$query="INSERT INTO `property_details`(`id`, `property_id`, `area_sqft`, `carpet`, `flat_type`, `no_of_room`, `no_of_bathroom`, `servant_room`, `pooja_room`, `property_floor`, `total_floor`, `parking`, `avilable_from_date`, `facing`, `flooring`, `view`, `property_type`, `terrace`, `comment_1`, `monthly_rnet`, `security_deposit`, `maintenance`, `commint_2`, `society_name`, `locality`, `sub_locality`, `landmark`, `water_drinking`, `water_utility`, `age_of_construction`, `power_backup`, `lift_in_building`, `security`, `visitors_parking`, `maintenance_staff`, `pets_allowed`, `comment_3`, `tenant_preference`, `time_preference`, `furnishing`, `furnishing_type`, `comment_4`, `society_amenities`, `comment_5`, `image`, `vedio`) VALUES ('','FO1','".$area_sqft."','".$carpet_area."','".$flat_type."','".$no_of_rooms."','".$no_of_bathrooms."','".$servant_room."','".$pooja_room."','".$property_floor."','".$total_floor."','".$parking."','".$available_from."','".$facing."','".$flooring."','".$view."','".$property_type."','".$terrace."','".$comment_1."','".$monthly_rent."','".$security_deposit."','".$maintenance."','".$comment_2."','".$society_name."','".$locality."','".$sub_locality."','".$landmark."','".$water_drinking."','".$water_utility."','".$age_of_construction."','".$power_backup."','".$lift_in_building."','".$security."','".$visitors_parking."','".$maintenance_staff."','".$pets_allowed."','".$comment_3."','".$tenant_preference."','".$time_preference."','".$furnishing."','".$f_type."','".$comment_4."','".$society_amenities."','".$comment_5."','".$image."','".$vedio."')";
					
				
					$upload=  mysqli_query($connection,$query);
				    
					if(!$upload)
					{
						echo "<script>alert('Please try again')</script>";
					}
					else
					{
						echo "<script>alert('data is inserted')</script>";
					}
					
?>    
                    
                