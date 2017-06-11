<?php
require("PHPMailer_5.2.1/class.phpmailer.php");


$email=	$_COOKIE['email'];


$body=$_COOKIE['msg'];

sendmail($body,"Fair-Owner",$email);  

function sendmail($body,$subject,$to)
{

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = false;     // turn on SMTP authentication
$mail->Username = "sagarsawant38@gmail.com";// SMTP username
$mail->Password = "9921939289";

$mail->From = "sagarsawant38@gmail.com";
$mail->FromName = "Fair-Owner Enquiry";
 $email=$to;
$mail->AddAddress($email);                  // name is optional
$mail->AddReplyTo("sagarsawant38@gmail.com", "Information");
$mail->AddEmbeddedImage($image, 'logo_2u');

$mail->WordWrap = 50;                                 // set word wrap to 50 characters

$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
 
if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
  // exit;
   // echo "<script>"."window.location.href='owner_details.php'"."</script>";
} 
else
{
   // echo "<script>"."window.location.href='owner_details.php'"."</script>";
}

}



?>