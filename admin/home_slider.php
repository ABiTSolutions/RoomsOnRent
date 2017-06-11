<?php
session_start();
include('conn.php');
include('out1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - RoomsOnRent</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="fair-owner" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php
		include('header.php');
?>
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
       <ul class="mainnav">
        <li ><a href="super_admin_home.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
		<li ><a href="create_subadmin.php"><i class="icon-sitemap"></i><span>Create Sub-Admin</span> </a> </li>
		<li ><a href="s_reg_owner.php"><i class="icon-user"></i><span>Registered Owner</span> </a> </li>
        <li ><a href="s_owner_details.php"><i class="icon-check"></i><span>Property Posted Owner</span> </a> </li>
        <li ><a href="s_reg_tenant.php"><i class="icon-group"></i><span>Registered Tenant</span> </a></li>
		<li ><a href="s_tenant_details.php"><i class="icon-check"></i><span>Plan Purchase Tenant</span> </a></li>
		<li ><a href="req_agreement.php"><i class="icon-paste"></i><span>Request for Agreement</span> </a></li>
		 <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home_slider.php">Home Page Slider</a></li>
            <li><a href="abuse_property.php">Abuse Property</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Insert Slider Images</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content" style="padding:20px">
              
			  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" >
		
			<div class="login-fields">
				
				<p>Insert Slider Image:</p>
				
				<div class="field">
					<label for="firstname">Name:</label>
					<input type="text" style="padding:11px 15px 10px 10px" name="name" value="" placeholder="Enter Slider Name" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Image:</label>	
					<input type="file" style="padding:11px 15px 10px 10px" name="uploadedimage" value="" class="login" />
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
						
				<input style="float:none" name="submit" type="submit" class="button btn btn-primary btn-large" value="Insert" />
				
				 <!-- .actions -->
			
		</form>
		
			<?php
			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				if(!empty($_FILES["uploadedimage"]["name"]))
				{
					$file_name=$_FILES["uploadedimage"]["name"];
					$temp_name=$_FILES["uploadedimage"]["tmp_name"];
					$imgtype=$_FILES["uploadedimage"]["type"];
					$ext=pathinfo($file_name,PATHINFO_EXTENSION);
					$imagename=date("d-m-Y")."-".time().".".$ext;
					$target_path="slider/".$imagename;
					move_uploaded_file($temp_name,$target_path);
					
				}
				$image=$target_path;
				$query="INSERT INTO `slider`(`id`, `name`, `images`) VALUES ('','".$name."','".$image."')";
				$upload=  mysqli_query($connection,$query);
				    
					if(!$upload)
					{
						echo "<script>alert('Please try again')</script>";
					}
					else
					{
						echo "<script>alert('Image is inserted')</script>";
						echo "<script>window.location.href='home_slider.php'</script>";
					}
			}
		?>
				
            </div>
          </div>
          
		  
        
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
		<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
		<div class="span8">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Slider Details</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				<div class="" style="padding: 10px;overflow-x:auto;">
				<table id="example" class="table table-striped table-bordered" style="overflow:auto;" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>Id</th>
                <th>Name</th>
				<th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>Id</th>
                <th>Name</th>
				<th>Action</th>
            </tr>
        </tfoot>
        <tbody>
		<?php
				$qu="SELECT * FROM `slider` order by id DESC";
				$sql = @mysqli_query($connection,$qu);
				while($row=@mysqli_fetch_array($sql))
				{
		?>
					<tr>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td>
							 <a onClick="javascript: return confirm('Please confirm deletion');" href="slider_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>	
		<?php		
				}
		?> 
		
        </tbody>
    </table>
			  </div>
            </div>
            <!-- /widget-content --> 
          </div>
          
          <!-- /widget -->
        </div>

        <!-- /span6 --> 

	  </form>
	  
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<?php
		include('footer.php');
?>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/bootstrap.js"></script>
 
<script src="js/base.js"></script> 

</body>
</html>
