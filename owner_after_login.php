<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomOnRent | Post</title>
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
</head>
<body onclick="window.location.href='post_property.php'">
<!--header-->
	<?php
		include('header.php');
	?>
<!--//-->	

<div class="loan_single" style="background:rgba(39, 218, 147, 0.15)">
	<div class="container">
		<div class="col-md-12">
			
			<div style="">
			<div style="width:356px; margin:10px auto;">
			<img src="images/after_login.png" class="img-responsive" style="" />
			</div>
		<p style="font-size:1.5em; text-align:center">
			Hi
			<b><?php if(preg_match('/[A-Z]+[a-z]+[0-9]+/', $_SESSION['name'])){ echo substr($_SESSION['name'], 0, -2);} else{ echo $_SESSION['name'];} ?></b>
			, Team RoomsOnRent has appointed me as your Personal Relationship Manager, your RoomsOnRent account has been created successfully. Please feel free to call me any time to get assistance regarding... 	</p>
		
		
		
		<div class="col-md-12">
			<div class="us-choose">
			
				<div class="col-md-2 why-choose">
					
				</div>
				<div class="col-md-2 why-choose">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-home"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Posting</h5>-->
						<!--<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Posting and marketing your property</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Free Property Posting</h5>-->
						<!--<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Finding Sutable tenant</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Get RS.500 Discount</h5>-->
						<!--<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Creating registered rental agreement</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose">
					<div class="  ser-grid " style="float:none; text-align:center">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-check"> </i>
					</div>
					<div class="ser-top beautiful" style="float:none; text-align:center; width:80%; margin:5px auto;"> 
						<!--<h5 style="font-size:13px">Free Property Posting</h5>-->
						<!--<label>The standard chunk of Lorem</label>-->
						<p style="font-size:14px; line-height:1.5em">Doing tenant verification</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-2 why-choose">
					
				</div>
				<div class="clearfix"> </div>
			</div>				
			</div>
			
			</div>
		
			<div class="choose-us" style="padding:2em 0">
		<div class="col-md-12">
				<div style="margin: 10px auto; width: 400px; background: #00d5fa; padding: 15px; text-align: center;">
					<a href="#" style="color:#FFF">Continue Posting Property >></a>	
				</div>
			</div>
		</div>
		</div>
		
		
		<div class="clearfix"> </div>
	</div>
</div>

<!--footer-->
<?php
		include('footer.php');
?>
<!--//footer-->

<script>
	function hideicon()
	{
		document.getElementById("hand").style.display="none";
	}
</script>

</body>
</html>