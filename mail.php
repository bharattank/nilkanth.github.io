<?php
$to = "nilkanthsolution@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = "From: $_POST['email']" . "\r\n" .
"CC: $_POST['email']";

mail($to,$subject,$txt,$headers);
?>