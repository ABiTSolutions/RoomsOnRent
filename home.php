<?php
include('conn.php'); 
session_start();
error_reporting(E_ERROR);
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Property</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<link href="css/styles.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.css">
<link href="css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
<style>
.dropdown-menu
{
	top: 33px !important;
}
.btn-group
{
	display:block !important;
}
.btn-group .btn
{
	display:block !important;
	width:100% !important;
}
.ui-autocomplete
{
	max-height:300px;
	overflow-y:auto;
}
</style>


<script src="js/jquery.min.js"></script>
<script src="jquery-ui-1.11.4/jquery-ui.js"></script>
<script src="js/scripts.js"></script>
<!--<script src="js/bootstrap.js"></script> --_ANUP-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/bootstrap-multiselect.js" type="text/javascript"></script>

</head>
<body>
	
<div class=" banner-buying" style="min-height: 140px; margin-top: -24%;">
	<div class=" container">
		
		<h3 style="margin-top:2em; color: #016a72;">
		<div class="row">
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="filtter" role="form" style="background: rgba(0, 213, 250, 0.26);">
			  <div class="form-group col-md-2 col-xs-6" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				   <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">City</label>
				  <input type="text" name="city" class="form-control" value="Pune" readonly="" />
			  </div>
			  <div class="form-group col-md-2 col-xs-6" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				   <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">Locality</label>
				   <input type="text" name="locality" class="form-control" id="skills" size="50" placeholder="Locality" />
			  </div>
			  <div class="form-group col-md-2 col-xs-6" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				 
				 <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">Sharing Type</label>
				  <select name="any_hk[]" id="lstFruits" multiple="multiple">
						<option value="1HK">1 Sharing</option>
						<option value="1BHK">2 Sharing</option>
						<option value="2BHK">3 Sharing</option>
						<option value="3BHK">4 Sharing</option>
						<option value="4BHK">4+ Sharing</option>
				 </select>			
			  </div>
			  <div class="form-group col-md-2 col-xs-6" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
					<label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">Furnish Status</label>
				  
				  <select name="furnish[]" id="lstFruits2" multiple="multiple">
						<option value="unfurnish">Unfurnished</option>
						<option value="semifurnish">Semi-Furnished</option>
						<option value="fullyfurnish">Fully-Furnished</option>
				 </select>	
				  
			  </div>
			  <div class="form-group col-md-2 col-xs-6" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				  <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">Maximum Rent</label>
				  <select name="rent" id="rent" class="form-control">
					<option>Select</option>
					<option value="10000">500₹/person</option>
					<option value="10000">1,000₹/person</option>
					<option value="15000">1,200₹/person</option>
					<option value="20000">1,500₹/person</option>
					<option value="25000">2,000₹/person</option>
					<option value="30000">3,000₹/person</option>
					<option value="35000">4,000₹/person</option>
					<option value="40000">5,000₹/person</option>
					<option value="45000">6,000₹/person</option>
					<option value="50000">7,000₹/person</option>
					<option value="60000">7,000+₹/person</option>
				  </select>
				  
			  </div>
			  <div class="form-group col-md-2 col-xs-12" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				  <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;"> &nbsp; </label>
				  <input type="submit" name="filter" value="Search" class="btn btn-primary form-control" style="display:block; background:#00d5fa; border-color:#00a0b8" onClick="return empty()" />
			  </div>
			  <div class="clearfix"> </div>
			</form>
			
			
		</div>
	</h3>
	
		
	</div>
</div>
<!--//header-->
<!--Dealers-->
<div class="dealers" style="padding:16em 0 5em 0">
<div class="container">
	
	<div class="dealer-top">
		<h4 style="margin-left: 1.2%;">Recently Added Properties</h4>
			<div class="deal-top-top">
				
				<?php
				
				if(isset($_POST['filter']) || isset($_GET['city']))
				{
						$city=$_GET['city'];
						
						$locality=$_GET['locality'];						
						$a_localit="'".implode("','",explode(",",$locality))."'";
						$a_locality=substr($a_localit,0,-3);
						
						if(!isset($_GET['id']))
						{
							$any_hk=$_GET['any_hk'];
							$a_any_hk = join("','", $any_hk);
							$any_hk_url = implode(",", $any_hk);
							//echo "any hk id not set";
						}
						
						if(isset($_GET['id']))
						{
							$hk=$_GET['any_hk'];
							$a_hk="'".implode("','",explode(",",$hk))."'";
							$a_any_hk=$a_hk;
							//echo $a_any_hk;
						}
						
						
						
						if(!isset($_GET['id']))
						{
							$furnish=$_GET['furnish'];
							$a_furnish = join("','", $furnish);
							$a_furnish_url = implode(",", $furnish);
						}
						if(isset($_GET['id']))
						{
							$furnish=$_GET['furnish'];
							$a_furnish="'".implode("','",explode(",",$furnish))."'";
							$a_furnish=$a_furnish;
							//echo $a_furnish;
						}
						//$rent=0;
						$rent=$_GET['rent'];
						
						$start=0;
						$limit=16;
						if(isset($_GET['id']))
							{
								$id=$_GET['id'];
								$start=($id-1)*$limit;
							}
							else{
								$id=1;
							}
						
						if(!isset($_GET['id']))
						{   
							
							/*if(isset($_GET['city']))
							{
								$query = "SELECT * FROM property_details WHERE city IN ('$city') ORDER BY id DESC LIMIT $start, $limit";
							}
							if(isset($_GET['city']) && !empty($_GET['locality']))
							{
								$query = "SELECT * FROM property_details WHERE city IN ('$city') && locality IN ($a_locality) ORDER BY id DESC LIMIT $start, $limit";
							}
							if(isset($_GET['city']) && !empty($_GET['locality']) && isset($_GET['any_hk']))
							{
								$query = "SELECT * FROM property_details WHERE city IN ('$city') && locality IN ($a_locality) && flat_type IN ('$a_any_hk') ORDER BY id DESC LIMIT $start, $limit";
							}
							if(isset($_GET['city']) && !empty($_GET['locality']) && isset($_GET['any_hk']) && isset($_GET['furnish']))
							{
								$query = "SELECT * FROM property_details WHERE city IN ('$city') && locality IN ($a_locality) && flat_type IN ('$a_any_hk') && furnishing IN ('$a_furnish') ORDER BY id DESC LIMIT $start, $limit";
							}
							if(isset($_GET['city']) && !empty($_GET['locality']) && isset($_GET['any_hk']) && isset($_GET['furnish']) && $_GET['rent'] != "Select" )
							{
								$query = "SELECT * FROM property_details WHERE city IN ('$city') && locality IN ($a_locality) && flat_type IN ('$a_any_hk') && furnishing IN ('$a_furnish') && monthly_rnet <= $rent ORDER BY id DESC LIMIT $start, $limit";
							}
							*/
							
							$query = "SELECT * FROM property_details WHERE city IN ('$city')";
							$qq=" ORDER BY id DESC LIMIT $start, $limit";
							if(!empty($_GET['locality']))
							{
								 $query .= ' && locality IN ('.$a_locality.') ';
							}
							if(isset($_GET['any_hk']))
							{
								 $query .= " && flat_type IN ('$a_any_hk') ";
							}
							if(isset($_GET['furnish']))
							{
								 $query .= " && furnishing IN ('$a_furnish') ";
							}
							if($_GET['rent'] != "Select")
							{
								 $query .= ' && monthly_rnet <='.$rent;
							}
							$query=$query.$qq;
							//echo $query;
						}
						if(isset($_GET['id']))
						{   
							//$query = "SELECT * FROM property_details WHERE city IN ('$city') || locality IN ($a_locality) || flat_type IN ($a_any_hk) || furnishing IN ($a_furnish) || monthly_rnet <= $rent ORDER BY id DESC LIMIT $start, $limit";
							//echo $query;
							$query = "SELECT * FROM property_details WHERE city IN ('$city')";
							$qq=" ORDER BY id DESC LIMIT $start, $limit";
							if(!empty($_GET['locality']))
							{
								 $query .= " && locality IN ($a_locality) ";
							}
							if(!empty($_GET['any_hk']))
							{
								 $query .= " && flat_type IN ($a_any_hk) ";
							}
							if(!empty($_GET['furnish']))
							{
								 $query .= " && furnishing IN ($a_furnish) ";
							}
							if($_GET['rent'] != "Select")
							{
								 $query .= ' && monthly_rnet <='.$rent;
							}
							$query=$query.$qq;
							//echo $query;
						}
						
						$sql = @mysqli_query($connection,$query);
						$i=0;
				
				if(mysqli_num_rows($sql)==0)
				{
					echo "<h2 style='text-align:center; margin:70px 0;'><span style='font-size: 20px;'>No proerty found</span><br/>(Just Call Your Personal Manager, He Will Take Care Of The Rest.)</h2>";
				}
				else
			{
				 while($row = mysqli_fetch_array($sql))
				{
						$i++;
						//echo "<script>alert('test')</script>";
			    ?>  
				
				<div class="col-md-3 col-xs-12 top-deal-top" style="margin:10px 0">
					<div class=" top-deal">
						<a <?php if($row['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?> href="<?php if($row['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row['property_id'];} ?>" class="mask">
						<?php
							$c_images=$row['image'];
							$array =  explode(',', $c_images);
						?>
						<img src="<?php if(empty($array[0])){ echo "images/no-image.jpg"; }else{echo $array[0];} ?>" class="img-responsive zoom-img" style="height:190px;margin: 0 auto; width:100%;">
							<?php
								if(!empty($array[0]))
								{
							?>
							<img class="hidden-xs" src="images/fairowner.png" style="position:absolute; z-index:9; right:20%; top:3%; height:150px" />
							
							<?php
							}
												if($row['a_status']==1)
												{
												?>
													<img src="images/sold.png" class="sold" />
												<?php
												}
												?>
						</a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a <?php if($row['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row['property_id']; } ?>"> Zero Brokerage</a></h5>
								<h5><a <?php if($row['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row['property_id']; } ?>"> <?php echo $row['flat_type'] ?> in <?php echo $row['locality'] ?></a></h5>
								<p>Rent: Rs. <?php echo $row['monthly_rnet'] ?></p>
								<p>Deposite: Rs. <?php echo $row['security_deposit'] ?></p>
							</div>
							<div class="top-deal2">
								<a <?php if($row['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row['property_id'];} ?>" class="hvr-sweep-to-right more">Details</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
										<?php
											if (($i % 4) == 0) 
											{
										?>
												<div class="clearfix"> </div>
										<?php
											}
				
				
				}
				
			?>	
				
			
						
																	
										<div class="clearfix"> </div>
		</div>		
						
		<div class="nav-page">
			<nav>
			  <?php
				//fetch all the data from database.
				
				if(!isset($_GET['id']))
				{
							$query = "SELECT * FROM property_details WHERE city IN ('$city')";
							$qq=" ORDER BY id DESC LIMIT $start, $limit";
							if(!empty($_GET['locality']))
							{
								 $query .= ' && locality IN ('.$a_locality.') ';
							}
							if(!empty($_GET['any_hk']))
							{
								 $query .= " && flat_type IN ('$a_any_hk') ";
							}
							if(!empty($_GET['furnish']))
							{
								 $query .= " && furnishing IN ('$a_furnish') ";
							}
							if($_GET['rent'] != "Select")
							{
								 $query .= ' && monthly_rnet <='.$rent;
							}
					//echo $query;
				
				}
				
				if(isset($_GET['id']))
				{
							$query = "SELECT * FROM property_details WHERE city IN ('$city')";
							$qq=" ORDER BY id DESC LIMIT $start, $limit";
							if(!empty($_GET['locality']))
							{
								 $query .= " && locality IN ($a_locality) ";
							}
							if(!empty($_GET['any_hk']))
							{
								 $query .= " && flat_type IN ($a_any_hk) ";
							}
							if(!empty($_GET['furnish']))
							{
								 $query .= " && furnishing IN ($a_furnish) ";
							}
							if($_GET['rent'] != "Select")
							{
								 $query .= ' && monthly_rnet <='.$rent;
							}
					//echo $query;
				
				}
					
				$rows=mysqli_num_rows(mysqli_query($connection,$query));
				//calculate total page number for the given table in the database 
				$total=ceil($rows/$limit);
				?>
			  <ul class='pagination'>

				<?php
				//show all the page link with page number. When click on these numbers go to particular page. 
						if($id>1)
						{
							//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
							echo"<li class=''><a href='?id=".($id-1)."&city=".$city."&locality=".$locality."&any_hk=".$any_hk_url."&furnish=".$a_furnish_url."&rent=".$rent."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
						}
						for($i=1;$i<=$total;$i++)
						{
							/*"&city=".$city.
							"&locality=".$locality.
							"a_locality=".$a_locality.
							"a_any_hk=".$a_any_hk.
							"a_furnish=".$a_furnish.
							"rent=".$rent.*/
							
							if($i==$id) 
							{ 
								echo "<li class='active'><a href='#'>".$i." <span class='sr-only'>(current)</span></a></li>"; 
							}
							else 
							{ 
								echo "<li><a href='?id=".$i."&city=".$city."&locality=".$locality."&any_hk=".$any_hk_url."&furnish=".$a_furnish_url."&rent=".$rent."'>".$i."</a></li>";
							}
						}
						if($id!=$total)
						{
							////Go to previous page to show next 10 items.
							echo "<li><a href='?id=".($id+1)."&locality=".$locality."&any_hk=".$any_hk_url."&furnish=".$a_furnish_url."&rent=".$rent."' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
						}
				?>
				</ul>
			</nav>
		</div>		
									

			
		<?php		
			}						
				?>
				<div class="clearfix"> </div>
		</div>		
						
		
		<?php
		}
		
				else
				{	
						//$id = @$_GET['id'];
						//$id=16;
						$start=0;
						$limit=16;
						if(isset($_GET['id']))
							{
								$id=$_GET['id'];
								$start=($id-1)*$limit;
							}
							else{
								$id=1;
							}
							
							if(!isset($_GET['id']))
							{
								$saddress=$_SESSION['saddress'];
							}
							if(isset($_GET['id']))
							{
								$saddress=$_GET['saddress'];
							}
							/*$iparr = split ("\,", $saddress);    _ANUP*/
							
							if($iparr[0]!="")
							{
								$sadd=$iparr[0];
								$query = "SELECT * FROM `property_details` WHERE locality='$sadd' ORDER BY id DESC LIMIT $start, $limit";
								//echo $query;
								$sql = @mysqli_query($connection,$query);
								$j=0;
								if(mysqli_num_rows($sql)==0)
							{
								echo "<h2 style='text-align:center; margin:70px 0;'><span style='font-size: 20px;'>No proerty found</span><br/>(Just Call Your Personal Manager, He Will Take Care Of The Rest.)</h2>";
							}
							else
						{
								
								
								 while($row1 = mysqli_fetch_array($sql))
									{
										$j++;
									?>  
									
									<div class="col-md-3 col-xs-12 top-deal-top" style="margin:10px 0">
										<div class=" top-deal">
											<a <?php if($row1['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row1['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row1['property_id'];} ?>" class="mask">
											<?php
												$c_images=$row1['image'];
												$array =  explode(',', $c_images);
											?>
											<img src="<?php if(empty($array[0])){ echo "images/no-image.jpg"; }else{echo $array[0];} ?>" class="img-responsive zoom-img" style="height:190px;margin: 0 auto; width:100%;">
											<?php
												if(!empty($array[0]))
												{
											?>
											<img class="hidden-xs" src="images/fairowner.png" style="position:absolute; z-index:9; right:20%; top:3%; height:150px" />
											
											<?php
											}
												if($row1['a_status']==1)
												{
												?>
													<img src="images/sold.png" class="sold" />
												<?php
												}
												?>
											</a>
											<div class="deal-bottom">
												<div class="top-deal1">
													<h5><a <?php if($row1['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row1['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row1['property_id'];} ?>"> Zero Brokerage</a></h5>
													<h5><a <?php if($row1['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row1['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row1['property_id'];} ?>"> <?php echo $row1['flat_type'] ?> in <?php echo $row1['locality'] ?></a></h5>
													<p>Rent: Rs. <?php echo $row1['monthly_rnet'] ?></p>
													<p>Deposite: Rs. <?php echo $row1['security_deposit'] ?></p>
												</div>
												<div class="top-deal2">
													<a <?php if($row1['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row1['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row1['property_id'];} ?>" class="hvr-sweep-to-right more">Details</a>
												</div>
											<div class="clearfix"> </div>
											</div>
										</div>
									</div>
										<?php
											if (($j % 4) == 0) 
											{
										?>
												<div class="clearfix"> </div>
										<?php
											}
										
								
									}
								?>	
									
									
																	
										<div class="clearfix"> </div>
		</div>		
						
		<div class="nav-page">
			<nav>
			  <?php
				//fetch all the data from database.
				$rows=mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `property_details` WHERE locality='$sadd'"));
				//calculate total page number for the given table in the database 
				$total=ceil($rows/$limit);
				?>
			  <ul class='pagination'>

				<?php
				//show all the page link with page number. When click on these numbers go to particular page. 
						if($id>1)
						{
							//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
							echo"<li class=''><a href='?id=".($id-1)."&saddress=".$saddress."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
						}
						for($i=1;$i<=$total;$i++)
						{
							if($i==$id) 
							{ 
								echo "<li class='active'><a href='#'>".$i." <span class='sr-only'>(current)</span></a></li>"; 
							}
							else 
							{ 
								echo "<li><a href='?id=".$i."&saddress=".$saddress."'>".$i."</a></li>";
							}
						}
						if($id!=$total)
						{
							////Go to previous page to show next 10 items.
							echo "<li><a href='?id=".($id+1)."&saddress=".$saddress."' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
						}
				?>
				</ul>
			</nav>
		</div>		
									
								
									
									
									
							<?php		
								}	
								
							}
							else
							{
								
								$start=0;
								$limit=16;
								if(isset($_GET['id']))
									{
										$id=$_GET['id'];
										$start=($id-1)*$limit;
									}
									else{
										$id=1;
									}
								
								
								$query = "SELECT * FROM `property_details` ORDER BY id DESC LIMIT $start, $limit";
								$sql = @mysqli_query($connection,$query);
								
								$k=0;
								 while($row2 = mysqli_fetch_array($sql))
									{
									    $k++;
									
									?>  
									
									<div class="col-md-3 col-xs-12 top-deal-top" style="margin:10px 0">
										<div class=" top-deal">
											<a <?php if($row2['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row2['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row2['property_id']; }?>" class="mask">
											<?php
												$c_images=$row2['image'];
												$array =  explode(',', $c_images);
											?>
											<img src="<?php if(empty($array[0])){ echo "images/no-image.jpg"; }else{echo $array[0];} ?>" class="img-responsive zoom-img" style="height:190px;margin: 0 auto; width:100%;">
												<?php
													if(!empty($array[0]))
													{
												?>
												<img class="hidden-xs" src="images/fairowner.png" style="position:absolute; z-index:9; right:20%; top:3%; height:150px" />
												
												<?php
												}
												if($row2['a_status']==1)
												{
												?>
													<img src="images/sold.png" class="sold" />
												<?php
												}
												?>
											</a>
											<div class="deal-bottom">
												<div class="top-deal1">
													<h5><a <?php if($row2['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row2['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row2['property_id']; }?>"> Zero Brokerage</a></h5>
													<h5><a <?php if($row2['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row2['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row2['property_id']; }?>"> <?php echo $row2['flat_type'] ?> in <?php echo $row2['locality'] ?></a></h5>
													<p>Rent: Rs. <?php echo $row2['monthly_rnet'] ?></p>
													<p>Deposite: Rs. <?php echo $row2['security_deposit'] ?></p>
												</div>
												<div class="top-deal2">
													<a <?php if($row2['a_status']==1){ echo "data-toggle='modal' data-target='#myModal2'";} ?>  href="<?php if($row2['a_status']==1){ echo "#"; } else {echo "single.php?id=".$row2['property_id']; }?>" class="hvr-sweep-to-right more">Details</a>
												</div>
											<div class="clearfix"> </div>
											</div>
										</div>
									</div>
									
								<?php
									if (($k % 4) == 0) 
									{
								?>
									<div class="clearfix"> </div>
								<?php
									}
								
									
									}
									if(!$query)
									{
										echo "<h2 style='text-align:center; margin:70px 0;'><span style='font-size: 20px;'>No proerty found</span><br/>(Just Call Your Personal Manager, He Will Take Care Of The Rest.)</h2>";
									}
									
							?>		
									
									
									
									
										<div class="clearfix"> </div>
		</div>		
						
		<div class="nav-page">
			<nav>
			  <?php
				//fetch all the data from database.
				$rows=mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `property_details` ORDER BY id"));
				//calculate total page number for the given table in the database 
				$total=ceil($rows/$limit);
				?>
			  <ul class='pagination'>

				<?php
				//show all the page link with page number. When click on these numbers go to particular page. 
						if($id>1)
						{
							//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
							echo"<li class=''><a href='?id=".($id-1)."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
						}
						for($i=1;$i<=$total;$i++)
						{
							if($i==$id) 
							{ 
								echo "<li class='active'><a href='#'>".$i." <span class='sr-only'>(current)</span></a></li>"; 
							}
							else 
							{ 
								echo "<li><a href='?id=".$i."'>".$i."</a></li>";
							}
						}
						if($id!=$total)
						{
							////Go to previous page to show next 10 items.
							echo "<li><a href='?id=".($id+1)."' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
						}
				?>
				</ul>
			</nav>
		</div>		
									
									
									
									
						<?php			
							}
						?>
				
		<?php
		}
		?>

		
		
		
		
		
		
		
	</div>
</div>
</div>

<!-- Modal -->
		  <div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog modal-md">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				
				<div class="modal-body">
				<button style="    position: absolute;
			right: -15px;
			top: -18px;
			background: #FFF;
			border-radius: 50%;
			padding: 3px 6px;
			border: 2px Solid #000; opacity:1;" type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="columns" style="border:1px solid #ccc">
					  <ul class="price">
						<li class="header" style="background-color:#b32505">Sorry!</li>
					  </ul>
					  <br/>
					  <h3 style="text-align:center">Sorry this property is rented out, please find another or call your personal manager...</h3>
					  <br/>
					  <!--<p style="text-align:center">You will start receiving tenant inquires.<br/>
					  Are you sure to active your property ad.<br/><br/>-->
					  </p>
					  <p> &nbsp;<br/></p>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		  
		  
		  <!--end-->





<script>
/*
function empty() {
    var x;
    x = document.getElementById("skills").value;
    if (x == "") {
        alert("please select locality");
        return false;
    };
	
	var a;
    a = document.getElementById("rent").value;
    if (a == "") {
        alert("please select max rent");
        return false;
    };
	
}*/
</script>
<script>
    $(function() {
        function split( val ) {
            return val.split( /,\s*/ );
        }
        function extractLast( term ) {
            return split( term ).pop();
        }
        
        $( "#skills" ).bind( "keydown", function( event ) {
            if ( event.keyCode === $.ui.keyCode.TAB &&
                $( this ).autocomplete( "instance" ).menu.active ) {
                event.preventDefault();
            }
        })
        .autocomplete({
            minLength: 1,
            source: function( request, response ) {
                // delegate back to autocomplete, but extract the last term
                $.getJSON("locality.php", { term : extractLast( request.term )},response);
            },
            focus: function() {
                // prevent value inserted on focus
                return false;
            },
            select: function( event, ui ) {
                var terms = split( this.value );
                // remove the current input
                terms.pop();
                // add the selected item
                terms.push( ui.item.value );
                // add placeholder to get the comma-and-space at the end
                terms.push("");
                this.value = terms.join(",");
                return false;
            }
        });
    });
</script>
<script type="text/javascript">
        $(function () {
            $('#lstFruits').multiselect({
                includeSelectAllOption: true
            });
            $('#btnSelected').click(function () {
                var selected = $("#lstFruits option:selected");
                var message = "";
                selected.each(function () {
                    message += $(this).text() + " " + $(this).val() + "\n";
                });
                alert(message);
            });
        });
</script>
<script type="text/javascript">
        $(function () {
            $('#lstFruits2').multiselect({
                includeSelectAllOption: true
            });
            $('#btnSelected').click(function () {
                var selected = $("#lstFruits2 option:selected");
                var message = "";
                selected.each(function () {
                    message += $(this).text() + " " + $(this).val() + "\n";
                });
                alert(message);
            });
        });
</script>
</body>
</html>
<?php
unset($_SESSION['saddress']);
?>