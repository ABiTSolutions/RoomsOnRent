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
<script src="js/bootstrap.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/bootstrap-multiselect.js" type="text/javascript"></script>

</head>
<body>
<!--header-->
<?php
			include('header.php');
?>
<!--//-->	
<div class=" banner-buying" style="min-height: 140px;">
	<div class=" container">
		
		<h3 style="margin-top:2em">
		<div class="row">
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" style="width:80%; margin:0 auto; padding:7px; background:#27da93" role="form">
			  <div class="form-group col-md-2" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				   <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">City</label>
				  <input type="text" name="city" class="form-control" placeholder="Pune" readonly="" />
			  </div>
			  <div class="form-group col-md-2" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				   <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">Locality</label>
				   <input type="text" name="locality" class="form-control" id="skills" size="50" placeholder="Locality" />
			  </div>
			  <div class="form-group col-md-2" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				 
				 <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">Any HK</label>
				  <select name="any_hk[]" id="lstFruits" multiple="multiple">
						<option value="1HK">1HK</option>
						<option value="1BHK">1BHK</option>
						<option value="2BHK">2BHK</option>
						<option value="3BHK">3BHK</option>
						<option value="4BHK">4BHK</option>
				 </select>			
			  </div>
			  <div class="form-group col-md-2" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
					<label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">Furnishing</label>
				  
				  <select name="furnish[]" id="lstFruits2" multiple="multiple">
						<option value="unfurnish">Unfurnished</option>
						<option value="semifurnish">Semi-Furnished</option>
						<option value="fullyfurnish">Fully-Furnished</option>
				 </select>	
				  
			  </div>
			  <div class="form-group col-md-2" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				  <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;">Maximum Rent</label>
				  <select name="rent" id="rent" class="form-control">
					<option>Select</option>
					<option value="10000">Rs. 5,000</option>
					<option value="10000">Rs. 10,000</option>
					<option value="15000">Rs. 15,000</option>
					<option value="20000">Rs. 20,000</option>
					<option value="25000">Rs. 25,000</option>
					<option value="30000">Rs. 30,000</option>
					<option value="35000">Rs. 35,000</option>
					<option value="40000">Rs. 40,000</option>
					<option value="45000">Rs. 45,000</option>
					<option value="50000">Rs. 50,000</option>
					<option value="60000">Rs. 50,000 + </option>
				  </select>
				  
			  </div>
			  <div class="form-group col-md-2" style="padding-left:2px; padding-right:2px; margin-bottom:5px">
				  <label style="font-size: 13px; display: block; text-align: left; margin: 0px 0px 5px 3px;"> &nbsp; </label>
				  <input type="submit" name="filter" value="Apply Filter" class="btn btn-primary form-control" style="display:block; background:#17c37f; border-color:#17c37f" onClick="return empty()" />
			  </div>
			  <div class="clearfix"> </div>
			</form>
			
			
		</div>
	</h3>
	
		
	</div>
</div>
<!--//header-->
<!--Dealers-->
<div class="dealers" style="padding:3em 0 5em 0">
<div class="container">
	
	<div class="dealer-top">
		<h4>Properties</h4>
			<div class="deal-top-top">
				
				<?php
				
				if(isset($_POST['filter']))
				{
						$city=$_POST['city'];
						$_SESSION['city']=$city;
						$locality=$_POST['locality'];
						
						$a_localit="'".implode("','",explode(",",$locality))."'";
						$a_locality=substr($a_localit,0,-3);
						
						$any_hk=$_POST['any_hk'];
						$a_any_hk = join("','", $any_hk);
						
						$furnish=$_POST['furnish'];
						$a_furnish = join("','", $furnish);
						
						$rent=$_POST['rent'];
						
						$_COOKIE['a_locality']=$a_locality;
						$_COOKIE['a_any_hk']=$a_any_hk;
						$_COOKIE['a_furnish']=$a_furnish;
						$_COOKIE['rent']=$rent;
						
						$query = "SELECT * FROM property_details WHERE locality IN ($a_locality) && flat_type IN ('$a_any_hk') && furnishing IN ('$a_furnish') && monthly_rnet <= $rent ORDER BY id DESC";
						
						$sql = @mysqli_query($connection,$query);
						$i=0;
				
						if(mysqli_num_rows($sql)==0)
						{
							echo "<h1 style='text-align:center; margin:70px 0;'>No proerty found</h1>";
						}
						
						
						//ajax
		?>				
		
						<script type="text/javascript">
$(document).ready(function() {
	$("#results" ).load( "fetch_pages.php"); //load initial records
	
	//executes code below when user click on pagination links
	$("#results").on( "click", ".pagination a", function (e){
		e.preventDefault();
		$(".loading-div").show(); //show loading element
		var page = $(this).attr("data-page"); //get page number from link
		$("#results").load("fetch_pages.php",{"page":page}, function(){ //get content from PHP page
			$(".loading-div").hide(); //once done, hide loading element
		});
		
	});
});
</script>
<style>
body,td,th {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #333;
}
.contents{
	margin: 20px;
	padding: 20px;
	list-style: none;
	background: #F9F9F9;
	border: 1px solid #ddd;
	border-radius: 5px;
}
.contents li{
    margin-bottom: 10px;
}
.loading-div{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.56);
	z-index: 999;
	display:none;
}
.loading-div img {
	margin-top: 20%;
	margin-left: 50%;
}

/* Pagination style */
.pagination{margin:0;padding:0;}
.pagination li{
	display: inline;
	padding: 6px 10px 6px 10px;
	border: 1px solid #ddd;
	margin-right: -1px;
	font: 15px/20px Arial, Helvetica, sans-serif;
	background: #FFFFFF;
	box-shadow: inset 1px 1px 5px #F4F4F4;
}
.pagination li a{
    text-decoration:none;
    color: rgb(89, 141, 235);
}
.pagination li.first {
    border-radius: 5px 0px 0px 5px;
}
.pagination li.last {
    border-radius: 0px 5px 5px 0px;
}
.pagination li:hover{
	background: #CFF;
}
.pagination li.active{
	background: #F0F0F0;
	color: #333;
}
</style>
		<div class="loading-div"><img src="ajax-loader.gif" ></div>
<div id="results"><!-- content will be loaded here --></div>
		<?php				
						//end ajax
		?>				
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
							$saddress=$_SESSION['saddress'];
							
							$iparr = split ("\,", $saddress);
							
							if($iparr[0]!="")
							{
								$sadd=$iparr[0];
								$query = "SELECT * FROM `property_details` WHERE locality='$sadd' ORDER BY id DESC LIMIT $start, $limit";
								$sql = @mysqli_query($connection,$query);
								$j=0;
								if(mysqli_num_rows($sql)==0)
							{
								echo "<h1 style='text-align:center; margin:70px 0;'>No proerty found</h1>";
							}
							else
						{
								
								
								 while($row1 = mysqli_fetch_array($sql))
									{
										$j++;
									?>  
									
									<div class="col-md-3 top-deal-top" style="margin:10px 0">
										<div class=" top-deal">
											<a href="<?php if($row1['a_status']==1){ } else {echo "single.php?id=".$row1['property_id'];} ?>" class="mask">
											<?php
												$c_images=$row1['image'];
												$array =  explode(',', $c_images);
											?>
											<img src="<?php if(empty($array[0])){ echo "images/default.jpg"; }else{echo $array[0];} ?>" class="img-responsive zoom-img" style="height:190px;">
												<img src="images/fairowner.png" style="position:absolute; z-index:9; right:20%; top:3%; height:150px" />
												<?php
												if($row1['a_status']==1)
												{
												?>
													<img src="images/sold.png" style="position:absolute; z-index:9; right:20px; top:5px; height:40px" />
												<?php
												}
												?>
											</a>
											<div class="deal-bottom">
												<div class="top-deal1">
													<h5><a href="<?php echo "single.php?id=".$row1['property_id']; ?>"> Zero Brokerage</a></h5>
													<h5><a href="<?php echo "single.php?id=".$row1['property_id']; ?>"> <?php echo $row1['flat_type'] ?> in <?php echo $row1['locality'] ?></a></h5>
													<p>Rent: Rs. <?php echo $row1['monthly_rnet'] ?></p>
													<p>Deposite: Rs. <?php echo $row1['security_deposit'] ?></p>
												</div>
												<div class="top-deal2">
													<a href="<?php echo "single.php?id=".$row1['property_id']; ?>" class="hvr-sweep-to-right more">Details</a>
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
									
									<div class="col-md-3 top-deal-top" style="margin:10px 0">
										<div class=" top-deal">
											<a href="<?php echo "single.php?id=".$row2['property_id']; ?>" class="mask">
											<?php
												$c_images=$row2['image'];
												$array =  explode(',', $c_images);
											?>
											<img src="<?php if(empty($array[0])){ echo "images/default.jpg"; }else{echo $array[0];} ?>" class="img-responsive zoom-img" style="height:190px;">
												<img src="images/fairowner.png" style="position:absolute; z-index:9; right:20%; top:3%; height:150px" />
												<?php
												if($row2['a_status']==1)
												{
												?>
													<img src="images/sold.png" style="position:absolute; z-index:9; right:20px; top:5px; height:40px" />
												<?php
												}
												?>
											</a>
											<div class="deal-bottom">
												<div class="top-deal1">
													<h5><a href="<?php echo "single.php?id=".$row2['property_id']; ?>"> Zero Brokerage</a></h5>
													<h5><a href="<?php echo "single.php?id=".$row2['property_id']; ?>"> <?php echo $row2['flat_type'] ?> in <?php echo $row2['locality'] ?></a></h5>
													<p>Rent: Rs. <?php echo $row2['monthly_rnet'] ?></p>
													<p>Deposite: Rs. <?php echo $row2['security_deposit'] ?></p>
												</div>
												<div class="top-deal2">
													<a href="<?php echo "single.php?id=".$row2['property_id']; ?>" class="hvr-sweep-to-right more">Details</a>
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
										echo "<h1 style='text-align:center; margin:70px 0;'>No proerty found</h1>";
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
<!--footer-->
<?php
	include('footer.php');
?>
<!--//footer-->



<script>
function empty() {
    var x;
    x = document.getElementById("skills").value;
    if (x == "") {
        alert("please select locality");
        return false;
    };
	
	var y;
    y = document.getElementById("lstFruits").value;
    if (y == "") {
        alert("please select HK");
        return false;
    };
	
	var z;
    z = document.getElementById("lstFruits2").value;
    if (z == "") {
        alert("please select furnishing type");
        return false;
    };
	
	var a;
    a = document.getElementById("rent").value;
    if (a == "") {
        alert("please select max rent");
        return false;
    };
	
}
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