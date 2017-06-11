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
 <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.css">
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
max-width: 450px;
max-height: 150px;
overflow:auto;
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
.ui-autocomplete
{
	height:300px;
	overflow-y:auto;
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
	
	<h3 class="fadeInLeft">100% Brokerage Free Rooms on Rent</h3>
	<div id="small-dialog" class="">
					    <!----- tabs-box ---->
				<div class="sap_tabs" style="margin-left: -57%; margin-right: 51%;">	
							<!-- <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">  --_ANUP-->
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px; ">
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
												<input type="text" id="name" autocomplete="off" value="<?php echo $val;?>" name="name" placeholder="Search Address, locality" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, locality';}">		
												<input type="submit" name="submit" value="" >
											</form>
											<div id="display"></div>
									 	</div>   
									<?php
											if(isset($_POST['submit']) || isset($_POST['name']))
											{	
													$ii=$_SESSION['ii'];
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
																	
																		if(isset($ne) && $ii==2)
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
																		/* echo "<script>window.location.href='login.php?id=2'</script>";  _ANUP*/
																		echo "<script>window.location.href='properties.php?city=Pune&locality=&rent=Select&filter=Apply+Filter'</script>";
																		
																	}
																
													}
													else
													{
														//$ii=$_SESSION['ii'];
														if(isset($_SESSION['name']))
														{	
															if($ii==2)
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
			          	 <div style="background: url(<?php echo "admin/".$row['images']; ?>); background-repeat: round;" class="banner">
			           		
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
												$ii=$_SESSION['ii'];
												if(isset($nem) && $ii==1)
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
							<!-- <i class="glyphicon glyphicon-home" style="font-size: 2em; color:#27da93"> </i>   --_ANUP-->
							<i class="glyphicon glyphicon-home" style="font-size: 2em; color:#00d5fa"> </i>
							<h6> Are you a owner? <br/>Post Your Property</h6>
							</div>
						</a>
					</div>
					
					<div class=" bottom-head">
						<!-- <a href="agreement.php">     --_ANUP-->
						<a href="login.php?id=2">
							<div class="buy-media">
							<!-- <i class="glyphicon glyphicon-user" style="font-size: 2em; color:#27da93"> </i>   --_ANUP-->
							<i class="glyphicon glyphicon-user" style="font-size: 2em; color:#00d5fa"> </i>
							<h6>Are you a user? <br/> Look For Properties</h6>
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
	
		<div class="content-bottom" style="padding-top: 0.5em;">
			<div class="container">
				<!-- <h3 style="color: #27da93;">" What our clients say "</h3>   --_ANUP-->
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
                terms.push( "" );
                this.value = terms.join( ", " );
                return false;
            }
        });
    });
    </script>

</body>
</html>