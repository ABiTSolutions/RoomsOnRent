<?php

  
  //Email information
  $admin_email = "abitsolutionsin@gmail.com";
  $email = $_COOKIE['email'];
  $subject = "RoomOnRent";
  $comment = $_COOKIE['mssg'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  

?>