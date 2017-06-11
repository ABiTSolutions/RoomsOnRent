<?php

  
  //Email information
  $admin_email = "abitsolutionsin@gmail.com";
  $email = $_COOKIE['email'];
  $subject = $_COOKIE['subject'];
  $comment = $_COOKIE['mssg'];
  
  //send email
  mail($email, "$subject", $comment, "From:" . $admin_email);
  

?>