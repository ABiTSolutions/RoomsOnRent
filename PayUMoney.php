<?php
session_start();
include('conn.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | How</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="fairowner" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
	
<?php
			include('header.php');
?>
<!--//-->	
<div class=" banner-buying" style="min-height: 150px;">
	<div class=" container">
	<h3 style="margin-top: 1em;"><span>PayU Form</span></h3> 
	<!---->
	
	<div class="clearfix"> </div>
		<!--initiate accordion-->
		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="privacy">
	<div class="container">
		<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "mL7kpmfE";

// Merchant Salt as provided by Payu
$SALT = "idiqEIEU9g";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
	
	<?php
						$n=$_SESSION['name'];
						$query = "SELECT * FROM `tenant_reg` WHERE name= '$n'";
						$sql = @mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql))
						{
							$name=$row['name'];
							$email=$row['email'];
							$mobile=$row['mobile'];
						}
	?>
	
	
	<form action="<?php echo $action; ?>" method="post" name="payuForm" class="form-horizontal" role="form">
	<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Amount:</label>
      <div class="col-sm-4">
        <input name="amount" class="form-control" value="100" readonly />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name:</label>
      <div class="col-sm-4">
        <input name="firstname" class="form-control" id="firstname" value="<?php echo $name; ?>" readonly />
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input name="email" class="form-control" id="email" value="<?php echo $email; ?>" readonly />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone:</label>
      <div class="col-sm-4">
        <input name="phone" class="form-control" value="<?php echo $mobile; ?>" readonly />
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Product Info:</label>
      <div class="col-sm-4">
        <textarea class="form-control" readonly name="productinfo">RoomsOnRent</textarea>
      </div>
    </div>
	<input type="hidden" name="surl" value="http://fairowner.com/success.php" size="64" />
	<input type="hidden" name="furl" value="http://fairowner.com/failure.php" size="64" />
	
	<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
	
	<input type="hidden" name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" />
         <input type="hidden" name="curl" value="" />
        <input type="hidden" name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" />
         <input type="hidden" name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" />
        <input type="hidden" name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" />
        <input type="hidden" name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" />
        <input type="hidden" name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" />
        <input type="hidden" name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" />
        <input type="hidden" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" />
          <input type="hidden" name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" />
        <input type="hidden" name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" />
          <input type="hidden" name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" />
        <input type="hidden" name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" />
          <input type="hidden" name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" />
       
	
	
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
	  
		<?php if(!$hash) { ?>
            <input type="submit" class="btn btn-primary" value="Submit" />
        <?php } ?>
	  
      </div>
    </div>
  </form>
	
	
   
  </body>
</html>

	</div>
</div>
<!--//contact-->
<!--footer-->
<?php
		include('footer.php');
?>
<!--//footer-->
</body>
</html>