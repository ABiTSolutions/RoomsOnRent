<?php
session_start();
include('conn.php');
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
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<style>
		.col-sm-6 {
    width: 45% !important;
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
        <div class="span4">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Create Sub-Admin</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content" style="padding:20px">
              
			  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		
			<div class="login-fields">
				
				<p>Create Sub-Admin account:</p>
				
				<div class="field">
					<label for="firstname">Username:</label>
					<input type="text" style="padding:11px 15px 10px 10px" name="username" value="" placeholder="Username" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Password:</label>	
					<input type="text" style="padding:11px 15px 10px 10px" name="password" value="" placeholder="Password" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="mobile">Mobile:</label>
					<input type="text" style="padding:11px 15px 10px 10px" name="mobile" value="" placeholder="Mobile" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="email">Email Address:</label>
					<input type="text" style="padding:11px 15px 10px 10px" id="email" name="email" value="" placeholder="Email" class="login"/>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<label>Permission</label>
				<span class="login-checkbox">
					<input name="update" type="checkbox" class="field login-checkbox" value="update" />
					<label class="choice" for="Field">Update &nbsp;&nbsp;&nbsp;&nbsp;</label>
				</span>
				<span class="login-checkbox">
					<input name="delete" type="checkbox" class="field login-checkbox" value="delete" />
					<label class="choice" for="Field">Delete</label>
				</span>
			</div>
						
				<input style="float:none" name="submit" type="submit" class="button btn btn-primary btn-large" value="create" />
				
				 <!-- .actions -->
			
		</form>
		<?php
			if(isset($_POST['submit']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$mobile=$_POST['mobile'];
				$email=$_POST['email'];
				$upd=$_POST['update'];
				$del=$_POST['delete'];
				
				$query="INSERT INTO `sub_admin`(`id`, `name`, `password`, `mobile`, `email`, `updte`, `dele`) VALUES ('','".$username."','".$password."','".$mobile."','".$email."','".$upd."','".$del."')";
				$upload=  mysqli_query($connection,$query);
				    
					if(!$upload)
					{
						echo "<script>alert('Please try again')</script>";
					}
					else
					{
						echo "<script>alert('Your Sub-Admin is created')</script>";
						echo "<script>window.location.href='create_subadmin.php'</script>";
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
              <h3>Sub-Admin Details</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				<div class="" style="padding: 10px;overflow-x:auto;">
				<table id="example" class="table table-striped table-bordered" style="overflow:auto;" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>Id</th>
                <th>Username</th>
				<th>Password</th>
                <th>Mobile</th>
                <th>Email</th>
				<th>Permission</th>
				<th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>Id</th>
                <th>Username</th>
				<th>Password</th>
                <th>Mobile</th>
                <th>Email</th>
				<th>Permission</th>
				<th>Action</th>
            </tr>
        </tfoot>
        <tbody>
		<?php
				$qu="SELECT * FROM `sub_admin` order by id DESC";
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
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['password'] ?></td>
						<td><?php echo $row['mobile'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['updte']." ".$row['dele'] ?></td>
						<td>
						  <div style="width:210px;">
							<a style="float:left; margin-right:5px" href="sub_admin_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Update</a>
							<a style="float:left; margin-right:5px" href="sub_admin_ot.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Assign</a>
                            <a style="float:left; margin-right:5px" onClick="javascript: return confirm('Please confirm deletion');" href="delete_sub_admin.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
						  </div>
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
        <div class="span4">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Assign Owner</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				<div class="" style="padding: 10px;overflow-x:auto;">
				<table id="example" class="table table-striped table-bordered" style="overflow:auto;" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>Assign</th>
				<th>Property Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>Assign</th>
				<th>Property Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
        </tfoot>
        <tbody>
		<?php
				$qu="SELECT * FROM `registation` where pd_id LIKE 'W%' order by id DESC ";
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
						<td><input type="checkbox" name="owner[]" value="<?php echo $row['pd_id'] ?>" /></td>
						<td><?php echo $row['pd_id'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['mobile'] ?></td>
						<td><?php echo $row['email'] ?></td>
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
		<div class="span4">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Assign Tenant</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				<div class="" style="padding: 10px;overflow-x:auto;">
				<table id="example" class="table table-striped table-bordered" style="overflow:auto;" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>Assign</th>
				<th>Id</th>
				<th>Plan</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>Assign</th>
				<th>Id</th>
				<th>Plan</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
        </tfoot>
        <tbody>
		<?php
				$qu="SELECT * FROM `tenant_reg` order by id DESC";
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
						<td><input type="checkbox" name="tenant[]" value="<?php echo $row['id'] ?>" /></td>
						<td><?php echo $row['id'] ?></td>
						<td>
						<?php 
							if($row['planc']==0)
							{
								echo "No";
							}
							else
							{
								echo "Yes";
							}
						?>
						</td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['mobile'] ?></td>
						<td><?php echo $row['email'] ?></td>
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
		<div style="position:fixed; right:5px; bottom:10px">
			<input type="submit" class="btn btn-primary btn-large" name="assign" value="Assign" />
		</div>
	  </form>


	<?php
		if(isset($_POST['assign']))
		{
			$sub_admin=$_POST['subadmin'];
			
			//$owne=implode("', '", $_POST['owner']);
			//$s_name=$_POST['sname'];
			$ow=$_POST['owner'];
			$owne = join("','", $ow);
			
			$oq="UPDATE `registation` SET `manager`='$sub_admin' WHERE pd_id IN ('$owne')";
			$ou=mysqli_query($connection,$oq);
			
			$te=$_POST['tenant'];
			$tent = join("','", $te);
			
			$tq="UPDATE `tenant_reg` SET `manager`='$sub_admin' WHERE id IN ('$tent')";
			$tu=mysqli_query($connection,$tq);
			
			$qy="SELECT p_id, ten_id FROM `sub_admin` WHERE id='$sub_admin'";
			$sql = @mysqli_query($connection,$qy);
			while($ro=@mysqli_fetch_array($sql))
			{
				$ow=$ro['p_id'];
				$ten=$ro['ten_id'];
			}
			
			$o=implode(',',$_POST['owner']);
			$t=implode(',',$_POST['tenant']);
			
			$owner=$ow.','.$o;
			$tenant=$ten.','.$t;
			
			$query="UPDATE `sub_admin` SET `p_id`='$owner',`ten_id`='$tenant' WHERE id=$sub_admin";
			$upload=mysqli_query($connection,$query);
			
			if(!$upload)
			{
				echo "<script>alert('Please try again')</script>";
			}
			else
			{
				echo "<script>alert('Owner & Tenant Assign')</script>";
				echo "<script>window.location.href='create_subadmin.php'</script>";
			}
		}
	
	?>
	  
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
		responsive: true
	});
} );
</script>

</body>
</html>
