<?php

$name = $_POST['name'];
$visitors_email = $_POST['email'];
$phone = $_POST['phone'];
$pickup= $_POST['pickup'];
$destination= $_POST['destination'];
$pickupdate= $_POST['pickupdate'];
$hour= $_POST['hour'];
$min= $_POST['min'];
$ap= $_POST['ap'];


$email_from = 'www.bracknelltaxis.online';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".   
               "User Mail: $visitors_email.\n". 
               "User Phone: $phone.\n".
               "Pickup: $pickup.\n".
               "Destination: $destination.\n".
               "Pickup Date: $pickupdate.\n".
               "Hour: $hour.\n".
               "Minute: $min.\n".
               "Am/Pm: $ap.\n".

               $to = "zbigniewkierpiec@gmail.com";


               $headers = "From: $email_from \r\n";
               $headers .= "Reply-To: $visitors_email \r\n";

               mail($to,$email_subject,$email_body,$headers);

               header("Location:thanks.html");
             

?> 





