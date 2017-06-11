<?php
include('conn.php'); 
if(isset($_POST['name']))
{
$name=trim($_POST['name']);
$query2=mysqli_query($connection,"SELECT locality,sub_locality,landmark,city FROM `property_details` WHERE locality like '%$name%' || sub_locality like '%$name%' || landmark like '%$name%' || city like '%$name%' ");


echo "<ul>";
while($query3=mysqli_fetch_array($query2))
{
?>

<li onclick='fill("<?php echo $query3['locality'].",".$query3['sub_locality'].",".$query3['landmark'].",Pune"; ?>")'><?php echo $query3['locality'].",".$query3['sub_locality'].",".$query3['landmark'].",Pune"; ?></li>
<?php
}
}
?>
</ul>