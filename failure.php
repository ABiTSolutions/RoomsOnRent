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
			include('head.php');
?>
<!--//-->	
<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="GQs7yium";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       //echo "Invalid Transaction. Please try again";
		   }
	   else {

         echo "<h3>Your order status is ". $status .".</h3>";
         echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
          
		 } 
?>
<div class="loan_single" style="background:rgba(39, 218, 147, 0.15)">
	<div class="container">
		<div class="col-md-12">
			
			<div style="margin-top:70px">
			
		
			       <div class="container">
				   <br/><br/><br/>
				   <h3 style="text-align:center">Sorry <?php echo $_SESSION['name'] ?>, Your payment is unsuccessful please try again. <br/><br/></h3>
				    <div class="col-md-12">
					    <div style="margin:0 auto; width:300px">
							<img src="images/fail.png" class="img-responsive" />	<br/><br/>
							<p style="font-size:24px; text-align:center"><a href="PayUMoney.php">Try Again</a></p><br/>
						</div><br/><br/>
					</div>
					
					
</div>
<hr>
			
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

</body>
</html>