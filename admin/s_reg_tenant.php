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
        <li class="active"><a href="s_reg_tenant.php"><i class="icon-group"></i><span>Registered Tenant</span> </a></li>
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
				<th>Id</th>
				<th>Date</th>
				<th>Assign Manager</th>
				<th>Manager</th>
                <th>Name</th>
                <th>Mobile</th>
				<th>Alternate Mobile</th>
                <th>Email</th>
				<th>Send MSG & Email</th>
                <th>Stage</th>
                <th>Upload Agreement</th>
				<th>Agreement</th>
				<th>Agreement Status</th>
				<th>Remark</th>
				<th>Follow up date</th>
				<th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>Id</th>
				<th>Date</th>
				<th>Assign Manager</th>
				<th>Manager</th>
                <th>Name</th>
                <th>Mobile</th>
				<th>Alternate Mobile</th>
                <th>Email</th>
				<th>Send MSG & Email</th>
                <th>Stage</th>
                <th>Upload Agreement</th>
				<th>Agreement</th>
				<th>Agreement Status</th>
				<th>Remark</th>
				<th>Follow up date</th>
				<th>Action</th>
            </tr>
        </tfoot>
        <tbody>
		<?php
				$qu="SELECT * FROM `tenant_reg` where pd_id='0' ORDER BY id DESC";
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
					<form action="submit_tenant_11.php" method="post" enctype="multipart/form-data">
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['date'] ?></td>
						<td> 
							<select name="subadmin">
								<option>
									<?php if(empty($row['manager']))
										{
											echo "Select manager";
										}
										else
										{
											echo $row['manager'];
										}
									?>
								</option>
								<?php
								$qusub="SELECT * FROM `sub_admin`";
								$sqlsub = @mysqli_query($connection,$qusub);
								while($rowsub=@mysqli_fetch_array($sqlsub))
								{
							?>
								<option value="<?php echo $rowsub['name']; ?>"><?php echo $rowsub['name']; ?></option>
								<?php	
								}
							?>
							</select>
							
							<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
							<br/><br/>
							<input type="submit" name="assign" class="btn btn-success" value="Assign" />
							
						</td>
						<td><?php echo $row['manager']; ?></td>
						<td><a href="edit_profile22.php?mobile=<?php echo $row['mobile'] ?>">
						<?php 
						//echo $row['name']
						$tname=$row['name'];
						echo preg_replace('/\d+/u','',$tname);
						?>
						</a></td>
						<td><?php echo $row['mobile'] ?></td>
						<td><?php echo $row['altno'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td>
							<select name="sendmm">
								<option>
									<?php if(empty($row['stage']))
										{
											echo "Select Stage";
										}
										else
										{
											echo $row['stage'];
										}
									?>
								</option>
								<option value="stage01">Stage-01</option>
								<option value="stage21">Stage-2(1)</option>
								<option value="stage22">Stage-2(2)</option>
								<option value="stage23">Stage-2(3)</option>
								<option value="stage3">Stage-3</option>
								<option value="stage41">Stage-4(1)</option>
								<option value="stage42">Stage-4(2)</option>
								<option value="stage43">Stage-4(3)</option>
								<option value="stage44">Stage-4(4)</option>
								<option value="stage45">Stage-4(5)</option>
								<option value="stage46">Stage-4(6)</option>
								<option value="stage5">Stage-5</option>
								<option value="stage51">Stage-5(1)</option>
								<option value="stage6">Stage-6</option>
								<option value="stage61">Stage-6(1)</option>
								<option value="stage7">Stage-7</option>
								<option value="stage8">Stage-8</option>
								<option value="stage9">Stage-9</option>
								<option value="stage10">Stage-10</option>
								<option value="stage11">Stage-11</option>
								<option value="stage12">Stage-12</option>
							</select>
							<input type="hidden" name="mobile" value="<?php echo $row['mobile'] ?>" />
							<input type="hidden" name="email" value="<?php echo $row['email'] ?>" />
							<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
							<br/><br/><label>Stage Date:</label>
							<input type="text" name="sdate" value="<?php echo $row['stage_date'] ?>" readonly=""/>
							<br/><br/>
							<input type="submit" name="sendstage" class="btn btn-success" value="Send" />
							
						</td>
						<td>
							<?php
								echo $row['stage'];
							?>
						</td>
						<td>
							<label>Upload Agreement</label><input type="file" name="agree" /><br/>
							<label>Upload Power of Autonomy</label><input type="file" name="powerof" /><br/>
							<label>Upload IndexII</label><input type="file" name="indexii" /><br/>
							<label>Upload Receipt</label><input type="file" name="receipt" /><br/><br/>
							<input type="submit" name="uploadagre" class="btn btn-success" value="Upload" />
						</td>
						<td>
							<?php if(empty($row['agre']) && empty($row['indexii']) && empty($row['recep']) && empty($row['powerofauto']))
										{
											echo "Not Uploaded";
										}
										else
										{
											if(!empty($row['agre']))
											{
											 echo "Agreement Uploaded <br/>";
											}
											if(!empty($row['indexii']))
											{
											 echo "IndexII Uploaded <br/>";
											}
											if(!empty($row['recep']))
											{
											 echo "Receipt Uploaded <br/>";
											}
											if(!empty($row['powerofauto']))
											{
											 echo "PowerofAttorney Uploaded <br/>";
											}
											
										}
									?>
						</td>
						<td>
							<input type="text" name="sagre" value="<?php echo isset($row['agre_status']) ? $row['agre_status'] : 'Enter Agreement Status' ?>" />
						</td>
						<td>
							<textarea name="remark" rows="8" placeholder="Enter Remark"><?php echo isset($row['remark']) ? $row['remark'] : 'Enter Remark' ?></textarea>
						</td>
						<td>
							<input type="text" name="follow_date" placeholder="Fair-01/01/2016" value="<?php echo isset($row['follow_date']) ? $row['follow_date'] : 'Enter follow up date' ?>" />
							<br/><br/><br/>
							<?php echo $row['follow_date']; ?>
						</td>
						<td>
						<input type="submit" name="submit" class="btn btn-success" value="Submit" /><br/><br/>
						<a onClick="javascript: return confirm('Please remember tenant records');" href="delete_reg_o.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
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
		responsive:true,
		ordering: false,
		"aoColumns":[
		null,
		null,
		{"bSearchable":false},
		null,
		null,
		null,
		null,
		null,
		{"bSearchable":false},
		null,
		null,
		null,
		null,
		null,
		null,
		null
		]
		
	});
} );
</script>

</body>
</html>
