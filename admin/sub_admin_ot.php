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
		<li class="active"><a href="create_subadmin.php"><i class="icon-sitemap"></i><span>Create Sub-Admin</span> </a> </li>
		<li><a href="s_reg_owner.php"><i class="icon-user"></i><span>Registered Owner</span> </a> </li>
        <li><a href="s_owner_details.php"><i class="icon-check"></i><span>Property Posted Owner</span> </a> </li>
        <li><a href="s_reg_tenant.php"><i class="icon-group"></i><span>Registered Tenant</span> </a></li>
		<li><a href="s_tenant_details.php"><i class="icon-check"></i><span>Plan Purchase Tenant</span> </a></li>
		<li><a href="req_agreement.php"><i class="icon-paste"></i><span>Request for Agreement</span> </a></li>
		 <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
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
		<div class="span4"> &nbsp; </div>
        <div class="span4">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Edit Sub-Admin</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content" style="padding:20px">
              
			  <?php
				$id=$_GET['id'];
				$qu="select * from sub_admin WHERE id= $id";
				$sql = @mysqli_query($connection,$qu);
				while($row=@mysqli_fetch_array($sql))
				{
			  ?>
			  
			  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		
			<div class="login-fields">
				
				<div class="field">
					<p style="font-size: 16px;font-weight: bold;">Assigned-Owner:</p>
					<hr/>
					<?php
						$owner_id=$row['p_id'];
						$o=explode(',',$owner_id);
						foreach($o as $oi)
						{
							//echo $oi."<br/>";
					?>
						<span class="login-checkbox">
							<input name="owner_id[]" type="checkbox" class="field login-checkbox" value="<?php echo $oi; ?>" checked />
							<label class="choice" for="Field"><?php echo $oi; ?> &nbsp;&nbsp;&nbsp; </label> 
						</span>
					<?php	
							
						}
					?><br/>
				</div> <!-- /field -->
				<div style="clear:both"></div>
				<div class="field">
					<p style="font-size: 16px;font-weight: bold;">Assigned-Tenant:</p>
					<hr/>
					<?php
						$tenant_id=$row['ten_id'];
						$t=explode(',',$tenant_id);
						foreach($t as $ti)
						{
							//echo $oi."<br/>";
					?>
						<span class="login-checkbox">
							<input name="tenant_id[]" type="checkbox" class="field login-checkbox" value="<?php echo $ti; ?>" checked />
							<label class="choice" for="Field"><?php echo $ti; ?> &nbsp;&nbsp;&nbsp; </label> 
						</span>
					<?php	
							
						}
					?>
					<br/>
				</div> <!-- /field -->
				<div style="clear:both"></div>
			</div> <!-- /login-fields -->
				
				
				
				<input style="float:none" name="submit" type="submit" class="button btn btn-primary btn-large" value="Update" />
				
				<a href="create_subadmin.php" class="button btn btn-default btn-large">Back</a><br/><br/>
				
				 <!-- .actions -->
			 
		</form>
		<?php } ?>
		<?php
			if(isset($_POST['submit']))
			{
				
				$owner_id=implode(',',$_POST['owner_id']);
				$tenant_id=implode(',',$_POST['tenant_id']);
				
				$query="UPDATE `sub_admin` SET `p_id`='$owner_id',`ten_id`='$tenant_id' WHERE id=$id";
				
				$upload=  mysqli_query($connection,$query);
				    
					if(!$upload)
					{
						echo "<script>alert('Please try again')</script>";
					}
					else
					{
						echo "<script>alert('Sub-Admin assign owner & tenant is Updated')</script>";
						echo "<script>window.location.href='create_subadmin.php'</script>";
					}
			}
		?>
			  
            </div>
          </div>
          <br/><br/><br/><br/>
		  
        
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
		<div class="span4"> &nbsp; </div>
	
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
