<?php
$to = "info@pastorkodar.com"; // where mail is sent to.
$from = $_POST['email'];
$subject = $POST['SUBJECT'];
$message = $_POST['message'];

echo "<pre>";
print_r($_POST);
echo "</pre>";

var_dump($_POST); // to see all Parameter in $_POST array.

//Always set content-type when sending HTML email.
$headers = "MIME-Version: 1.0"."\r\n";
$headers = "content-type:text/html:charset=UTF-8"."\r\n";

//add headers to send to
$headers = "From: $from". "\r\n";
$headers = 'CC: client@somedomain.com'."\r\n";
$headers .= 'Bcc: pastorkodar@somedomain.com'."\r\n"; //blind carbon copy
// 'dot' after equal to in headers is for cocatenation

mail($to,$subject,$message,$headers); // sends mail.

//specifies headers from which we send to.

 ?>
