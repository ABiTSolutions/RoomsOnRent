<?php
session_start();
include('conn.php');
?>
<?php
$profpic = "images/4 - Copy.jpg";
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Profile</title>
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
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
background-size : cover;
}
</style>

</head>
<body>
<!--header-->
<?php
			include('header.php');
?>
<!--//-->	

<?php
$name=$_SESSION['name'];
$query="SELECT * FROM `registation` where name = '$name'";
							$sql = @mysqli_query($connection,$query);
								
								 while($row = mysqli_fetch_array($sql))
									{
							
										$name=$row['name'];
										$email=$row['email'];
										$mobile=$row['mobile'];
										$address=$row['address'];
										$image=$row['photo'];
										$altno=$row['altno'];
?>


<div class="loan_single" style="background:rgba(39, 218, 147, 0.15)">
	<div class="container">
		<div class="col-md-12">
			
			<div style="margin-top:100px">
			
		
			       <div class="container">
    <h1 style="color:#00d5fa">Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
			<?php
			if(empty($image))
			{
		  ?>
		  <img src="images/av1.png" class="avatar img-circle" alt="avatar"><br/><br/>
          <?php
		  }
		  else{
		  ?>
		  <img src="<?php echo $image ?>" style="height:192px; width:192px;" class="avatar img-circle" alt="avatar"><br/><br/>
		  <?php
		  }
		  ?>
          <h3><?php $tname=$name; echo preg_replace('/\d+/u','',$tname); ?></h3>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        

			  <table class="table table-user-information">
                    <tbody>
                      
                        <tr>
                        <td><b>Name:</b></td>
                        <td><?php $tname=$name; echo preg_replace('/\d+/u','',$tname); ?></td>
                      </tr>
                      <tr>
                        <td><b>Email:</b></td>
                        <td><a href="#"><?php echo $email ?></a></td>
                      </tr>
					  
                         <tr>
                        <td><b>Mobile:</b></td>
                        <td><?php echo $mobile ?>
                        </td>
                           
                      </tr>
					  <tr>
                        <td><b>Alternate Mobile:</b></td>
                        <td><?php echo $altno ?>
                        </td>
                           
                      </tr>
					  <tr>
                        <td><b>Address:</b></td>
                        <td><?php echo $address ?>
                        </td>
                           
                      </tr>
					  
					  <tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					  </tr>
					  
					  <tr>
                        <td><b> &nbsp; </b></td>
                        <td><h3><a href="edit_profile.php">Edit Profile</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="owner_dashboard.php">Back</a></h3><br/></td>
                      </tr>
                     
                    </tbody>
                  </table>

      </div>
  </div>
</div>
<hr>
			<br/><br/>
			</div>
		
		</div>
		
		
		<div class="clearfix"> </div>
	</div>
</div>
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