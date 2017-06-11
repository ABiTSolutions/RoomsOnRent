<?php
session_start();
include('conn.php'); 
error_reporting(E_ERROR);
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
												<input type="text" id="" autocomplete="off" value="<?php echo $val;?>" name="name" Placeholder="Search Address, locality" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, locality';}">		
												<input type="submit" name="submit" onClick="return lempty()" value="" >
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
																	$nme=$_SESSION['name'];
																	$qu="SELECT name FROM `tenant_reg` where name = '$nme'";
																	$sql = @mysqli_query($connection,$qu);
																	while($row=@mysqli_fetch_array($sql))
																	{
																		$ne=$row['name'];
																	}
																	
																		if(isset($ne))
																		{
																			echo "<script>window.location.href='properties.php'</script>";
																		}
																		else
																		{
																			
																			echo "<script>alert('Please Login with tenant Account')</script>";
																		}
																	
																}
																	else
																	{
																		echo "<script>window.location.href='login.php?id=2'</script>";
																	}
																
													}
													else
													{
														if(!empty($_SESSION['name']))
														{
															echo "<script>window.location.href='properties.php'</script>";
														}
														else
														{
															echo "<script>window.location.href='login.php?id=2'</script>";
														}
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
												$nm=$_SESSION['name'];
												$qu="SELECT name FROM `registation` where name = '$nm'";
												$sql = @mysqli_query($connection,$qu);
												while($row=@mysqli_fetch_array($sql))
												{
													$nem=$row['name'];
												}
												if(isset($nem))
												{
														$name=$_SESSION['name'];
														$query="SELECT pd_id FROM `registation` where name = '$name'";
														$sql = @mysqli_query($connection,$query);
														//$pd_id=0;					
														while($row = mysqli_fetch_array($sql))
														{
															$pd_id=$row['pd_id'];
														}
														  if($pd_id != "0")
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
												<a href="<?php echo "index.php?id=11";  ?>">
												<?php
													if(isset($_GET['id']))
													{
														echo "<script>alert('Please Login with owner Account')</script>";
														echo "<script>window.location.href='index.php'</script>";
													}
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
					
					
					<div class="clearfix"> </div>
					
					<!--edit testimonials-->
					
					<style>
#quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 60px;
}
#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#quote-carousel .carousel-indicators {
    position: relative;
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-top: 20px;
    margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border: 1px solid #ccc;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    opacity: 0.4;
    overflow: hidden;
    transition: all .4s ease-in;
    vertical-align: middle;
}
#quote-carousel .carousel-indicators .active {
    width: 128px;
    height: 128px;
    opacity: 1;
    transition: all .2s;
}
.item blockquote {
    border-left: none;
    margin: 0;
}
.item blockquote p:before {
    float: left;
    margin-right: 10px;
}
					</style>
					
					
					
					
					
					<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
						<?php
							$q = "SELECT * FROM `testimonials`";
							$sql = @mysqli_query($connection,$q);
							$i=0;
							while($row = mysqli_fetch_array($sql))
							{
								$i=$i+1;
						?>
                        <div class="item <?php if($i==1) echo "active"; else echo ""; ?>">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p style="margin-bottom:10px"><?php echo $row['comment'] ?></p>
										<p style="text-align:right"><?php echo $row['name'] ?><br/><small><?php echo $row['position'] ?></small>
										</p>
									</div>
                                </div>
                            </blockquote>
                        </div>
                        <?php
							}
						?>
                        
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
						<?php
							$q = "SELECT * FROM `testimonials`";
							$sql = @mysqli_query($connection,$q);
							$i=0;
							while($row = mysqli_fetch_array($sql))
							{
								$i=$i+1;
						?>
							<li data-target="#quote-carousel" data-slide-to="<?php echo $row['id']; ?>" class="<?php if($i==1) echo "active"; else echo ""; ?>">
							<img class="img-responsive " src="<?php echo "admin/".$row['image']; ?>" alt="">
							</li>
						<?php
							}
						?>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
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
<script>
function lempty() {
    var x;
    x = document.getElementById("locality").value;
    if (x == "") {
        alert("please Enter Locality");
        return false;
    };
}
</script>
</body>
</html>