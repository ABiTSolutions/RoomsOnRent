<?php
	session_start();
	include('conn.php');
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
<style>
.font18
{
	font-size:18px !important;
	margin-top:7px;
	margin-bottom:10px;
}
</style>
</head>
<body>
<!--header-->
<?php
			include('header.php');
			include('bgImage.php');
?>
<!--//-->	

<div class="loan_single">
	<div class="container">
		<div class="col-md-12">
			<!-- <div style="position:fixed; z-index:9; right:0; top:40px; margin:15px;">
				<a href="<?php echo "logout.php"; ?>" class="hvr-sweep-to-right more" style="background:#00d5fa; color:#FFF; font-weight:bold; padding:1em" >Logout</a>     
			</div>  -->
			<div style="margin-top:50px">
			
		
			       <div class="container">
				    <h3 style="text-align:center; color: lemonchiffon;">Hi <span style="color: #6565ce; text-transform: capitalize;"><?php $tname=$_SESSION['name']; echo preg_replace('/\d+/u','',$tname); ?></span>, Welcome to your RoomsOnRent account. <br/><br/></h3>
					<div class="col-md-6">
					    <div class="" style="">
								<div class="col-md-6">
									<img src="images/manager.png" class="img-responsive" />
								</div>
								<div class="col-md-6">
									
									<div style="margin-top:17%; color: floralwhite;">
									<h4 class="mg">Your Personal Manager</h4><br/>
									<?php
								
									$name=$_SESSION['name'];
									$query="SELECT manager FROM `tenant_reg` where name = '$name'";
									$sql = @mysqli_query($connection,$query);
									$row = mysqli_fetch_row($sql);
									$mid=$row[0];
								if(empty($mid))
								{	
									echo "<b>NAME:</b> &nbsp;&nbsp;&nbsp;&nbsp;Mr. Anup<br/><b>MOBILE:</b> &nbsp;+91 9595567981<br/> <b>EMAIL:</b> &nbsp;&nbsp;&nbsp;&nbsp;abitsolutionsin@gmail.com";
								}
								else
								{
									
									$query1="SELECT * FROM `sub_admin` where name = '$mid'";
									$sql1 = @mysqli_query($connection,$query1);
									while($row1 = mysqli_fetch_array($sql1))
									{
										$name=$row1['name'];
										$mobile=$row1['mobile'];
										$email=$row1['email'];
									}
									
									echo "<b>NAME:</b> &nbsp;&nbsp;&nbsp;&nbsp;$name<br/><b>MOBILE:</b> &nbsp;$mobile<br/> <b>EMAIL:</b> &nbsp;&nbsp;&nbsp;&nbsp;$email ";
								}
							?>        </div>
								</div> 
								
						    </div>
					   <!--<div class="text-center">
							<img src="images/hand.png" class="img-responsive center-block" style="height:200px" />
					   </div>-->
					   <p>&nbsp;<br/>&nbsp;<br/></p>
						<h3 style=" text-align:center; line-height:1.5em; font-size:20px; color: floralwhite;"><br/><br/>Hi <span style="color: #6565ce; text-transform: capitalize;"><?php $tname=$_SESSION['name']; echo preg_replace('/\d+/u','',$tname); ?></span>, Team RoomsOnRent has appoint me as your Personal Relationship Manager, and I will be available here to help you. Feel free to contact me if your not getting property according to your requirement & to get assistance while using our services. 
						
						</h3>
						<br/>
					</div>
	<div class="col-md-6 bdleft">
      <!-- left column -->
	  <div class="col-md-4">
        <div class="text-center">
          <a href="tenant_profile.php">
		  <img src="images/profile.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Your Profile</h3>
		  </a>
        </div>
      </div>
	  <div class="col-md-4">
        <div class="text-center">
          <a href="properties.php?city=Pune&locality=&rent=Select&filter=Apply+Filter">
		  <img src="images/find.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Find Properties</h3>
		  </a>
        </div>
      </div>
      
	 <!--<div class="col-md-4">
        <div class="text-center">
          <a href="logout.php">
		  <img src="images/logout.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#27da93;" class="font18">Logout</h3>
		  </a>
        </div>
      </div>-->
	 
	<?php
		$nme=$_SESSION['name'];
		$qu="SELECT pd_id FROM `tenant_reg` where name = '$nme'";
		$sql = @mysqli_query($connection,$qu);
		while($row=@mysqli_fetch_array($sql))
		{
				$pd_id=$row['pd_id'];
		}
	/* if($pd_id==1)
		{
	?> --_ANUP-->
	  
	 <!-- <div class="col-md-4">
        <div class="text-center">
          <a href="#" data-toggle="modal" data-target="#myModal1">
			  <img src="images/credit.png" class="avatar img-responsive img-circle" alt="">
			  <h3 style="color:#00d5fa;" class="font18">Credits</h3>
		  </a>  --_ANUP-->
		  		   <!-- Modal -->
  <!-- <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">  --_ANUP-->
    
      <!-- Modal content-->
    <!--  <div class="modal-content">
        
        <div class="modal-body">
		<button style="    position: absolute;
    right: -15px;
    top: -18px;
    background: #FFF;
    border-radius: 50%;
    padding: 3px 6px;
    border: 2px Solid #000; opacity:1;" type="button" class="close" data-dismiss="modal">&times;</button>
			<div class="columns">
			  <ul class="price">
				<li class="header" style="background-color:#27da93">Your Credits</li>
				<li class="grey">Available Credits</li>
				
				<?php
										$name=$_SESSION['name'];
										$qu="SELECT planc FROM `tenant_reg` where name = '$name'";
										$sql = @mysqli_query($connection,$qu);
										$row=@mysqli_fetch_row($sql);
										$plan=$row[0];
										
				?>
				
				<li><?php echo $plan ?> Properties</li>
				<li class="grey">Used Credits</li>
				<li>
				<?php $uplan=25-$plan;
					echo $uplan;
				?> Properties</li>
			  </ul>
			</div>

        </div>
       
      </div>
      
    </div>
  </div>
        </div>
      </div>   --_ANUP-->
	  
	<?php
	}
	else
	{
	?>
	<!-- <div class="col-md-4">
        <div class="text-center">
          <a href="not_plan.php">
		  <img src="images/credit.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Credits</h3>
		  </a>
        </div>
      </div>  --_ANUP-->
	<?php	
	}    _ANUP*/
	
	/*if($pd_id==1)
	{
	?>
		<div class="col-md-4">
        <div class="text-center">
          <a href="not_plan2.php">
		  <img src="images/plan.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Plan</h3>
		  </a>
        </div>
      </div>  
	<?php	
	} _ANUP*/
	/* else _ANUP*/
	{
	?>	
	  
	  
	<!--  <div class="col-md-4">
        <div class="text-center">
         <a href="#" data-toggle="modal" data-target="#myModal">
		  <img src="images/plan.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Plan</h3>
		  </a>  --_ANUP-->
		  
		   <!-- Modal -->
 <!--  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">  --_ANUP-->
    
      <!-- Modal content-->
   <!--   <div class="modal-content">
        
        <div class="modal-body">
		<button style="    position: absolute;
    right: -15px;
    top: -18px;
    background: #FFF;
    border-radius: 50%;
    padding: 3px 6px;
    border: 2px Solid #000; opacity:1;" type="button" class="close" data-dismiss="modal">&times;</button>
			<div class="columns">
<ul class="price">
				<li class="header" style="background-color:#b32505; font-size: 20px;">
				<span>Fair Plan -</span> <span>Rs.100 Only/-</span><br>
				<span style="font-size: 16px;">Save Brokerage, Time &amp; efforts</span>
				</li>
				<li> 
					<span style="font-size: 20px;margin-left: 5px;color: #52a081;float: left;"><i class="glyphicon glyphicon-time"></i> </span>
					<span>Validity <b>90 days</b></span>
				</li>
<li> <span style="font-size: 20px;margin-left: 5px;color: #52a081;float: left;"><i class="glyphicon glyphicon-home"></i></span>
					 <span>Contact 25 verified owners</span>
				</li>
				<li> 
					<span style="font-size: 20px;margin-left: 5px;color: #52a081;float: left;"><i class="glyphicon glyphicon-file"></i></span>
					<span>Save Rs.300 on doorstep Rental Agreement</span>
				</li>
				
				<li> 
					<span style="font-size: 20px;margin-left: 5px;color: #52a081;float: left;"><i class="glyphicon glyphicon-user"></i></span> 
					<span>Get personal Relation-ship manager for any assistance</span>
				</li>
				<li style="
    color: #ca4425;
    font-size: 22px;
">"Purchase Plan &amp; Get Relax"</li>
				<li style="/* color:#FFF; *//* background:#27da93 */" class="grey"><a href="PayUMoney.php" style="color:#FFF;background:#27da93;padding: 17px;border-radius: 10px;" class="button">Purchase Now</a></li>
			  </ul>
			</div>

        </div>
       
      </div> 
      
    </div>
  </div>  
		  
        </div>
      </div>  --_ANUP-->
	  
	<?php
	}
		$nme=$_SESSION['name'];
		$qu="SELECT vpd_id FROM `tenant_reg` where name = '$nme'";
		$sql = @mysqli_query($connection,$qu);
		while($row=@mysqli_fetch_array($sql))
		{
				$vpd_id=$row['vpd_id'];
		}
		if(!empty($vpd_id))
		{

		?>
	  
	  <div class="col-md-4">
        <div class="text-center">
          <a href="tenant_viewed.php">
		  <img src="images/post.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Short-listed Properties</h3>
		  </a>
        </div>
      </div>
	  <?php
	  }
	  
	  else
	  {
	  ?>
	  <div class="col-md-4">
        <div class="text-center">
          <a href="not_viewed.php">
		  <img src="images/post.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Short-listed Properties</h3>
		  </a>
        </div>
      </div>
	  <?php
	  }
	  ?>
	  
	<!--  <div class="col-md-4">
        <div class="text-center">
          <a href="agreement.php">
		  <img src="images/cal.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Calculate your Agreemnet cost</h3>
		  </a>
        </div>
      </div>
	  <div class="col-md-4">
        <div class="text-center">
          <a href="http://localhost/fairowner/admin/agreement/Sample Draft of Rent agreement.pdf">
		  <img src="images/download.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Sample Draft of Rent agreement</h3>
		  </a>
        </div>
      </div>  --_ANUP-->
	  
	  	  <?php
		$n=$_SESSION['name'];
						$query = "SELECT * FROM `tenant_reg` WHERE name= '$n'";
						$sql = @mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql))
						{
							$agre=$row['agre'];
							$agre_status=$row['agre_status'];
						}
						if(isset($agre))
						{
	   ?>
	<!--  <div class="col-md-4">
         <div class="text-center">
          <?php
			if(substr( $agre_status, 0, 8 ) === "download")
			{
		  ?>
		  <a href="#" data-toggle="modal" data-target="#myModal2">
		  <img src="images/download.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">Download Agreement</h3>
		  </a>
		  <?php
		  }
		  else
		  {
		  ?>
		  <a href="agreement.php">
		  <img src="images/agreement.png" class="avatar img-responsive img-circle" alt="">
          <h3 style="color:#00d5fa;" class="font18">
			
			<?php if(!empty($agre_status) )
					{
						
						echo $agre_status;
					}
					else
					{	
						echo "Request for agreement"; 
					}
			?>
		  </h3>
		  </a>  --_ANUP-->
		  <?php
		  }
			$n=$_SESSION['name'];
						$query = "SELECT * FROM `tenant_reg` WHERE name= '$n'";
						$sql = @mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql))
						{
							$agre=$row['agre'];
							$agre1=$row['indexii'];
							$agre2=$row['recep'];
							$agre3=$row['powerofauto'];
							
							$indexii=$row['indexii'];
							$recep=$row['recep'];
							$powerofauto=$row['powerofauto'];
						}
		  ?>
		  		   <!-- Modal -->
		<!--  <div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog modal-sm">  --_ANUP-->
			
			  <!-- Modal content-->
		<!--	  <div class="modal-content">
				
				<div class="modal-body">
				<button style="    position: absolute;
			right: -15px;
			top: -18px;
			background: #FFF;
			border-radius: 50%;
			padding: 3px 6px;
			border: 2px Solid #000; opacity:1;" type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="columns">
					  <ul class="price">   
						<li class="header" style="background-color:#b32505">Download</li>
						<?php if(empty($recep)){  }
						else
						{
						?>
						<li class="grey"><a href="<?php if(empty($recep)){  } else { echo "http://fairowner.com/admin/$agre2"; } ?>" class="button">Download Receipt</a></li>
						<?php
						}
						if(empty($agre)){ }
						else
						{
						?>
						<li class="grey"><a href="<?php if(empty($agre)){ } else { echo "http://fairowner.com/admin/$agre"; } ?>" class="button">Download Agreement</a></li>
						<?php
						}
						if(empty($indexii)){ }
						else
						{
						?>
						<li class="grey"><a href="<?php if(empty($indexii)){ } else { echo "http://fairowner.com/admin/$agre1";  } ?>" class="button">Download Index-of</a></li>
						<?php
						}
						if(empty($powerofauto)){  }
						else
						{
						?>
						<li style="color:#FFF; background:#27da93" class="grey"><a href=<?php if(empty($powerofauto)){  } else { echo "http://fairowner.com/admin/$agre3"; } ?>" style="color:#FFF; background:#27da93" class="button">Download Power of Attorney</a></li>
						<?php
						}
						?>
					  </ul>
					</div>

				</div>
			   
			  </div>   --_ANUP-->
			  <?php
					function download_remote_file($file_url, $save_to)
					{
						$content = file_get_contents($file_url);
						file_put_contents($save_to, $content);
					}
					if (isset($_GET['id'])) 
					{
						$n=$_SESSION['name'];
						$query = "SELECT * FROM `registation` WHERE name= '$n'";
						$sql = @mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql))
						{
							$agre=$row['agre'];
						}
						//download_remote_file('http://localhost/fairowner/admin/$agre',realpath("./downloads") . '/fairowner_agreement.jpg');
						
						//http://mydomain.com/download.php?download_file=some_file.pdf
					}
				?>
			</div>
		  </div>
        </div>
      </div>
	  <?php
		}
	  ?>
	  
	  <div class="clearfix"> </div>
      
      
  </div>
</div>

			
			</div>
		
		</div>
		
		
		<div class="clearfix"> </div>
	</div>
</div>



<!--content-->
<div class="content">
	
		<div class="content-bottom" style="padding-top: 0.5em;" >
			<div class="container">
				<h3 style="color: #00d5fa;">" What our clients say "</h3>
					
					
					<div class="clearfix"> </div>
					
					<!--edit testimonials-->
					
					
<style>
		.carousel-indicators .active{ background: #31708f; } 
		.content{ margin-top:20px; } 
		.adjust1{ float:left; width:100%; margin-bottom:0; } 
		.adjust2{ margin:0; } 
		.carousel-indicators li{ border :1px solid #ccc; } 
		.carousel-control{ color:#31708f; width:5%; } 
		.carousel-control:hover, .carousel-control:focus{ color:#31708f; } 
		.carousel-control.left, .carousel-control.right { background-image: none; } 
		.media-object{ margin:auto; margin-top:15%; }
		@media screen and (max-width: 768px) { .media-object{ margin-top:0; } }
	</style>
	<div class="container content"> 
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
		<!-- Indicators --
		<ol class="carousel-indicators"> 
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li> 
		<li data-target="#carousel-example-generic" data-slide-to="2"></li> 
		</ol> <!-- Wrapper for slides --> <div class="carousel-inner"> 
	<?php
		$q = "SELECT * FROM `testimonials`";
							$sql = @mysqli_query($connection,$q);
							$i=0;
							while($row = mysqli_fetch_array($sql))
							{
								$i=$i+1;
	?>
		<div class="item <?php if($i==1) echo 'active'; ?>"> 
		<div class="row"> 
		<div class="col-xs-12"> 
		<div class="thumbnail adjust1"> 
		<div class="col-md-2 col-sm-2 col-xs-12"> 
		<img class="media-object img-rounded img-responsive" src="<?php echo "admin/".$row['image']; ?>" style="width:100px; height:100px"> 
		</div> 
		<div class="col-md-10 col-sm-10 col-xs-12"> 
		<div class=""> 
		<p class="text-info lead adjust2"><?php echo $row['heading'] ?></p> 
		<p><span class="glyphicon glyphicon-thumbs-up"></span> <?php echo $row['comment'] ?> </p> 
		<blockquote class="adjust2" style="border-left: 5px solid #eee !important;"> <p><?php echo $row['name'] ?></p> <small><cite title="Source Title"><i class="glyphicon glyphicon-globe"></i> <?php echo $row['position'] ?></cite></small> </blockquote> 
		</div> 
		</div> 
		</div> 
		</div> 
		</div> 
		</div> 
	<?php
		}
	?>
		</div> 
		<!-- Controls --> 
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> 
		<span class="glyphicon glyphicon-chevron-left"></span> 
		</a> 
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 
		<span class="glyphicon glyphicon-chevron-right"></span> 
		</a> 
		</div> 
		</div>
				
					
					<!--edut testimonials-->
					
			</div>
		</div>		
<!--//test-->	

	</div>

<!--footer-->
<?php
		include('footer.php');
?>
<!--//footer-->

</body>
</html>
<?php
unset($_SESSION['ck']);
?>