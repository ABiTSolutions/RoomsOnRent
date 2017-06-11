<?php
session_start();
include('conn.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Home</title>
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
<meta name="keywords" content="fair owner " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<script type="text/javascript">
function fill(Value)
{
$('#name').val(Value);
$('#display').hide();
}

$(document).ready(function(){
$("#name").keyup(function() {
var name = $('#name').val();
if(name=="")
{
$("#display").html("");
}
else
{
$.ajax({
type: "POST",
url: "ajax.php",
data: "name="+ name ,
success: function(html){
$("#display").html(html).show();
}
});
}
});
});
</script>

<style>
#display
{
	position: absolute;
}	
#display ul
{
list-style: none;
margin: 3px 20px 20px 0px;
width: 450px;
}
#display  li
{
display: block;
padding: 5px;
background-color: #f5ebeb;
border-bottom: 1px solid #367;
cursor:pointer;
}
#content
{
padding:50px;
width:500px; border:1px solid #666;
float:left;
}
#clear
{ clear:both; }
#box
{
float:left;
margin:0 0 20px 0;
text-align:justify;
}

</style>

</head>
<body >
<!--header-->
		<?php
			include('header.php');
		?>

<!--//-->	
	<div class=" header-right">
	
	<h3 class="fadeInLeft">Rent Home Without Brokerage</h3>
	<div id="small-dialog" class="">
					    <!----- tabs-box ---->
				<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Amravati</span></li>
							  <!--<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Buy</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>-->
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
									  	<div class="login">
											<?php
												$val='';
												if(isset($_POST['submit']))
												{
												if(!empty($_POST['name']))
												{
												$val=$_POST['name'];
												}
												else
												{
												$val='';
												}
												}
											?>
											<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
												<input type="text" id="name" autocomplete="off" value="<?php echo $val;?>" name="name" value="Search Address, locality" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, locality';}">		
												<input type="submit" name="submit" value="" >
											</form>
											<div id="display"></div>
									 	</div>   
									<?php
										if(isset($_POST['submit']) || isset($_POST['name']))
										{	
											if(!empty($_POST['name']))
											{
												$name=$_POST['name'];
												$query3=mysqli_query($connection,"SELECT locality,sub_locality,landmark,city FROM `property_details` WHERE locality like '%$name%'");
												while($query4=mysqli_fetch_array($query3))
												{
													echo "<div id='box'>";
													echo "<b>".$query4['locality']."</b>".",".$query4['sub_locality'].",".$query4['landmark'].",Pune";
													echo "<div id='clear'></div>";
													echo "</div>";
												}
												$s_address=$_POST['name'];
												$_SESSION['saddress']=$s_address;
												$name=$_SESSION['name'];
												if(isset($name))
												{
													echo "<script>window.location.href='properties.php'</script>";
												}
												else
												{
													echo "<script>window.location.href='login.php?id=2'</script>";
												}
											}
											else
											{
												echo "<script>alert('Please Insert Locality')</script>";
											}
											
										}
									?>	
							        </div>
						  		</div>
							     
					      </div>
					
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
					 
				</div>
				</div>
	
	
	
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		
					
					<?php
					$q = "SELECT * FROM `slider`";
					$sql = @mysqli_query($connection,$q);
					while($row = mysqli_fetch_array($sql))
					{
					?>
					 <li>
			          	 <div style="background: url(<?php echo "admin/".$row['images']; ?>);" class="banner">
			           		
			          	</div>
			         </li>
					 
					 <?php
						}
					 ?>
			      </ul>
			  </div>
			</div>
		</div>
	</div>
	 
	<!--header-bottom-->
	<div class="banner-bottom-top">
			<div class="container">
			<div class="bottom-header">
				<div class="header-bottom">
					
					<div class=" bottom-head">
						
						<?php
											//$name=$_SESSION['name'];
											if(isset($_SESSION['name']))
											{
												
												$name=$_SESSION['name'];
												$query="SELECT pd_id FROM `registation` where name = '$name'";
												$sql = @mysqli_query($connection,$query);
												$pd_id=0;					
												while($row = mysqli_fetch_array($sql))
												{
													$pd_id=$row['pd_id'];
												}
												  if(isset($pd_id))
												  {
						?>
						<a href="<?php echo "single1.php?id=".$pd_id;  ?>">
						<?php
												  }
												  else
												  {
						?>
						<a href="<?php echo "post_property.php"; ?>">
						<?php
													}
						
											}
											else
											{
						?>
						<a href="<?php echo "login.php?id=1"; ?>">
						<?php
												
											}
						?>
							<div class="buy-media">
							<i class="glyphicon glyphicon-home" style="font-size: 1.8em; color:#27da93"> </i>
							<h6>Post Your Property</h6>
							</div>
						</a>
					</div>
					
					<div class=" bottom-head">
						<a href="agreement.php">
							<div class="buy-media">
							<i class="glyphicon glyphicon-file" style="font-size: 1.8em; color:#27da93"> </i>
							<h6>Agreement</h6>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	</div>
			<!--//-->
				
	<!--//header-bottom-->
	
	
<!--//header-->
<!--content-->
<div class="content">
	
		<div class="content-bottom">
			<div class="container">
				<h3>Testimonials</h3>
					
					<div class="name-in" style="margin:0 auto; width:50%">
						<?php
							$q = "SELECT * FROM `testimonials`";
							$sql = @mysqli_query($connection,$q);
							while($row = mysqli_fetch_array($sql))
							{
						?>
						<div class="bottom-in ">
							<p class="para-in"><?php echo $row['comment'] ?></p>
							<i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive " src="<?php echo "admin/".$row['image']; ?>" alt=""></a>
								<div class="men">
									<span><?php echo $row['name'] ?></span>
									<p><?php echo $row['position'] ?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
					<div class="clearfix"> </div>
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