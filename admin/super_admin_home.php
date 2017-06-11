<?php
include('conn.php');
session_start();
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
        <li class="active"><a href="super_admin_home.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
		<li><a href="create_subadmin.php"><i class="icon-sitemap"></i><span>Create Sub-Admin</span> </a> </li>
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
        <div class="span6">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Introduction</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <img src="img/2.jpg" style="width:100%; height:450px" class="hidden-xs" />
            </div>
          </div>
          
        
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> 
			    <a href="super_admin_home.php" class="shortcut">
					<i class="shortcut-icon icon-dashboard"></i>
					<span class="shortcut-label">Dashboard</span> 
				</a>
				<a href="create_subadmin.php" class="shortcut">
					<i class="shortcut-icon icon-sitemap"></i>
					<span class="shortcut-label">Create Sub-Admin</span> 
				</a>
				<a href="s_reg_owner.php" class="shortcut">
					<i class="shortcut-icon icon-user"></i>
					<span class="shortcut-label">Registered Owner</span> 
				</a>
				<a href="s_owner_details.php" class="shortcut">
					<i class="shortcut-icon icon-check"></i>
					<span class="shortcut-label">Property Posted Owner</span> 
				</a>
				<a href="s_reg_tenant.php" class="shortcut">
					<i class="shortcut-icon icon-group"></i> 
					<span class="shortcut-label">Registered Tenant</span> 
				</a>
				<a href="s_tenant_details.php" class="shortcut">
					<i class="shortcut-icon icon-check"></i> 
					<span class="shortcut-label">Plan Purchase Tenant</span> 
				</a>
				<a href="req_agreement.php" class="shortcut">
					<i class="shortcut-icon icon-paste"></i> 
					<span class="shortcut-label">Request for Agreement</span> 
				</a>
				<a href="home_slider.php" class="shortcut">
					<i class="shortcut-icon icon-picture"></i> 
					<span class="shortcut-label">Home Page Slider</span> 
				</a>
				<a href="abuse_property.php" class="shortcut">
					<i class="shortcut-icon icon-ban-circle"></i> 
					<span class="shortcut-label">Abuse Property</span> 
				</a>
				
				<a href="agreeowner.php" class="shortcut">
					<i class="shortcut-icon icon-user"></i>
					<span class="shortcut-label">Owner from Agreement Page</span> 
				</a>
				<a href="agreetenant.php" class="shortcut">
					<i class="shortcut-icon icon-user"></i>
					<span class="shortcut-label">Tenant from Agreement Page</span> 
				</a>
				
				<a href="backend2.php" class="shortcut">
					<i class="shortcut-icon icon-list-alt"></i>
					<span class="shortcut-label">Post Property</span> 
				</a>
				<a href="backendtenant2.php" class="shortcut">
					<i class="shortcut-icon icon-list-alt"></i>
					<span class="shortcut-label">Insert Tenant</span> 
				</a>
				</div>
			  <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
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
