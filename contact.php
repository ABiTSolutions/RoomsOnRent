<?php
session_start();
include('conn.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>Room On Rent | Contact</title>
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
<body>
<!--header-->
<?php
			include('header.php');
?>
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Contact</span></h3> 
	<!---->

	<div class="clearfix"> </div>
		<!--initiate accordion-->
      		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="contact">
	<div class="container">
		
	 <div class="contact-top" style="padding-top: 0;">
		<div class="col-md-6 contact-top1">
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	 <h5>Address</h5>
	             <p><b>RoomOnRent</b></p>
	             <p>Guruchhaya Colony,</p>
	             <p>Sainagar,</p>	
				 <p>Amravati-444607.</p>
		  	</div>
		  	<div class="col-md-6 contact-address1">
			  	 <h5>Email Address </h5>
	             <p><a href="#"> RoomOnRent@gmail.com</a></p>
				 <p><a href="#"> abitsolutionsin@gmail.com</a></p><br/>
				 <p>Mobile :<a href="#"> +91 9595567981</a></p>
		  	</div>
		  	<div class="clearfix"></div>
		  </div>
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	
	        </div>
		  	<div class="clearfix"></div>
		  </div>
		</div>
		<div class="col-md-6 contact-right">
	
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
               <input type="text" name="name" placeholder="Name" required="">
			   <input type="text" name="email" placeholder="Email" required="">
			   <input type="text" name="subject" placeholder="Subject" required="">
			   <textarea name="message"  placeholder="Message" requried=""></textarea>
			   <label class="hvr-sweep-to-right">
	           <input type="submit" name="Submit" value="Submit">
	           </label>
			</form>
			
			<?php
				if(isset($_POST['submit']))
				{
					$name=$_POST['name'];
					$email=$_POST['email'];
					$subject=$_POST['subject'];
					$mssg=$_POST['message'];
					$_COOKIE['mssg']=$name.$mssg;
					$_COOKIE['subject']=$subject;
					$_COOKIE['email']= $email;
					include_once("mail.php");
				}
			?>
			
		</div>
		<div class="clearfix"> </div>
</div>
	</div>
	<div class="map">
	<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="300" src="<?php echo "https://www.google.com/maps/embed/v1/place?q=Bhosale+Shinde+Arcade,+Pune,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"; ?>">&lt;div&gt;&lt;small&gt;&lt;a href="http://embedgooglemaps.com"&gt;embedgooglemaps.com&lt;/a&gt;&lt;/small&gt;&lt;/div&gt;&lt;div&gt;&lt;small&gt;&lt;a href="http://buyproxies.io/"&gt;private proxy&lt;/a&gt;&lt;/small&gt;&lt;/div&gt;</iframe>
									</div>
									<script src="https://www.dog-checks.com/google-maps-authorization.js?id=4dbb3d71-6d1d-b735-86fa-7b5f277fe772&c=embedded-map-code&u=1468040911" defer="defer" async="async"></script>
									
</div>
<!--//contact-->
<!--footer-->
<?php
	include('footer.php');
?>
<!--//footer-->
</body>
</html>