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
<meta name="fair owner" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style>
.row{
margin-left:0 !important;
margin-right:0 !important;
}
</style>	
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
        <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Introduction</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="" style="padding: 10px;overflow-x:auto;">
				<table id="example" class="table table-striped table-bordered" style="overflow:auto;" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>Property_Id</th>
                <th>Owner Name</th>
                <th>Owner Mobile</th>
                <th>Owner Email</th>
				<th>Who Abuse</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>Property_Id</th>
                <th>Owner Name</th>
                <th>Owner Mobile</th>
                <th>Owner Email</th>
				<th>Who Abuse</th>
            </tr>
        </tfoot>
        <tbody>
		<?php
				$qu="SELECT * FROM `abuse_property` order by id DESC";
				$sql = @mysqli_query($connection,$qu);
				while($row=@mysqli_fetch_array($sql))
				{
					
					/*
					$name=$row['name'];
					$email=$row['email'];
					$mobile=$row['mobile'];
					$pd_id=$row['pd_id'];
					$address=$row['address'];
					*/
		?>
					<tr>
					<form action="#" method="post" enctype="multipart/form-data">
						<td><?php echo $row['p_id'] ?></td>
						<td><?php echo $row['pname'] ?></td>
						<td><?php echo $row['pmobile'] ?></td>
						<td><?php echo $row['pemail'] ?></td>
						<td><?php echo $row['tname'] ?></td>
					</form>	
					</tr>	
		<?php		
				}
		?> 
		
        </tbody>
    </table>
			  </div>
            </div>
			
          </div>
          
        
          <!-- /widget --> 
        </div>
        
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
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/base.js"></script> 
<script>
$(document).ready(function() {
    $('#example').DataTable({
		responsive: true,
		ordering: false
	});
} );
</script>

</body>
</html>
