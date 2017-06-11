<?php
session_start();
include('out.php'); 
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
		include('headerSub.php');
?>
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
		<li><a href="backend.php"><i class="icon-list-alt"></i><span>Post Property</span> </a> </li>
		<li><a href="backendtenant.php"><i class="icon-list-alt"></i><span>Insert Tenant</span> </a> </li>
		<li><a href="reg_owner.php"><i class="icon-user"></i><span>Registered Owner</span> </a> </li>
        <li><a href="owner_details.php"><i class="icon-check"></i><span>Property Posted Owner</span> </a> </li>
        <li><a href="reg_tenant.php"><i class="icon-group"></i><span>Registered Tenant</span> </a></li>
		<li><a href="tenant_details.php"><i class="icon-check"></i><span>Plan Purchase Tenant</span> </a></li>
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
			    <a href="index.php" class="shortcut">
					<i class="shortcut-icon icon-dashboard"></i>
					<span class="shortcut-label">Dashboard</span> 
				</a>
				<a href="reg_owner.php" class="shortcut">
					<i class="shortcut-icon icon-user"></i>
					<span class="shortcut-label">Registered Owner</span> 
				</a>
				<a href="owner_details.php" class="shortcut">
					<i class="shortcut-icon icon-check"></i>
					<span class="shortcut-label">Property Posted Owner</span> 
				</a><br/>
				<a href="reg_tenant.php" class="shortcut">
					<i class="shortcut-icon icon-group"></i> 
					<span class="shortcut-label">Registered Tenant</span> 
				</a>
				<a href="tenant_details.php" class="shortcut">
					<i class="shortcut-icon icon-check"></i> 
					<span class="shortcut-label">Plan Purchase Tenant</span> 
				</a>
				<a href="backend.php" class="shortcut">
					<i class="shortcut-icon icon-list-alt"></i>
					<span class="shortcut-label">Post Property</span> 
				</a>
				<a href="backendtenant.php" class="shortcut">
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
