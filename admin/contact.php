<?php /*?><?php include('conn.php'); ?><?php */?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	 <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
      
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
    <script src="js/forms.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <script>
	$(document).ready(function() {	
      //  Initialize Backgound Stretcher
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg'], 
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true	
       });	   	
    });	
	
    </script>
    <style>
	.txtstyle{
		font-family:Arial, Helvetica, sans-serif;
	font-weight:normal;
  border: 1px solid #49413d;
  background: url(../images/tail-input.png);
  padding: 5px 15px;
  margin: 0;
  font-size: 16px;
  line-height: 20px !important;
  color: #b0adac;
  outline: none;
  width: 300px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  float: left;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;

		}
	</style>
    
   
    <!--[if lt IE 8]>
   <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
    <!--[if lt IE 9]>   
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
   <script src="js/html5shiv.js"></script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>  
  <![endif]-->

    </head>
    <body>
<div> 
      <!--==============================row-top=================================-->
      <!--<div class="row-top">
    <div class="main zerogrid">
          <ul class="list-soc">
        <li><a href="#"><img alt="" src="images/soc-icon1.png"></a></li>
        <li><a href="#"><img alt="" src="images/soc-icon2.png"></a></li>
      </ul>
        </div>
  </div>-->
      
      <!--==============================header=================================-->
      
   <header>
    <div class="row-nav">
        <div class="main zerogrid">
        <h1 class="logo"><a href="index.html"><img alt="Eni Gma" src="images/logo2.png"></a></h1>
        <nav>
           <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="current"><a href="contact.php">Contacts</a></li>
            <li><a href="availability.php">Availability</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      </div>
  </header>
  
  <!--==============================content=================================-->
  
   <section id="content">  
    <div class="main-block zerogrid">
    <div class="row" style="padding: 20px;">
          <div class="wrapper">
        <article class="col-1-2"><div class="wrap-col">
              <h3>Postal Address</h3>
              <div class="map">
              <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="" height="405" src="https://maps.google.com/maps?hl=en&q=kakade palase karve nagar pune&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://premiumlinkgenerator.com">Premiumlinkgenerator.com</a></small></div></iframe>           </div>
			<u><h2> Contact Us </h2> </u><br>
             <dl class="address">
                <dt>ABiTSolutions<br>
                Near Yashwant Lawn,<br>
                Guruchhaya Colony,<br>
                Sainagar, <br>
                Amravati 444 607.
                </dt>
                <dd> <span>Telephone::</span> 0721 2510161 </dd>
                <dd> <span>Mobile:</span> +91 9595567981 </dd>
                <dd> <span>Mail:</span> abitsolutionsin@gmail.com </dd>  
                <dt>
                
               <?php /*?> <?php
				  $sql="SELECT * FROM contact limit 1"; 
				  $query=mysql_query($sql);
				  while($row=mysql_fetch_array($query))
				  {
                	  echo "<dd><span>Manager:</span>".$row['name']."</dd>";
                	  echo "<dd><span>Mobile:</span>".$row['mobile']."</dd>"; 
                      echo "<dd><span>Mail:</span>".$row['email']."</dd>"; 
				  }
				 ?><?php */?>
                </dt>        
              </dl>
        
         </div></article>
        <article class="col-1-2"><div class="wrap-col">
              <h3>Contact Form</h3>
             
    <form action="testmail.php"  method="post">
          <?php /*?><div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
          <?php */?>
          <fieldset>
            <div>
              <label class="name">
                <input type="text" name="un" placeholder="Name:" class="txtstyle">
                <br><br><br>
                <?php /*?><span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span><?php */?> </label>
            </div>
            <div>
              <label class="email">
                <input type="email" name="email" placeholder="E-mail:" class="txtstyle">
                <br><br><br>
                <?php /*?><span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> <?php */?></label>
            </div>
            <div>
              <label class="phone">
                <input type="tel" name="phone" placeholder="Phone:" class="txtstyle">
                <br><br><br>
                <?php /*?><span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span><?php */?> </label>
            </div>
            <div>
              <label class="message">
                <textarea name="msg" class="txtstyle" style="height:200px;width:100%" placeholder="Message:"></textarea>
                <br><br><br>
               <?php /*?> <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span><?php */?> </label>
            </div>
            <div class="buttons-wrapper"><a class="button" data-type="reset">Clear</a>
                       <input type="submit" class="button" value="Send"></div>
          </fieldset>
          
        </form>
    
     </div></article>
      </div>
     </div>
  </div>  
 </section>   
 </div>
<div class="block"> 
     <!--==============================footer================================-->
      <footer>
    <div class="main aligncenter zerogrid">
        <div class="privacy">Copyright <span>|</span> <a href="about.html" rel="nofollow">RoomsOnRent</a> <span>|</span> <strong>Powered by <a href="http://abitsolutions.in">ABiTSolutions</a>   </div>
        </div>
  </footer>
    </div>
</body>
</html>