

<?php
if(!isset($_POST['submit']))
{

echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$phone = $_POST['phone'];

$pickup= $_POST['pickup'];
$destination= $_POST['destination'];
$pickupdate= $_POST['pickupdate'];
$hour= $_POST['hour'];
$min= $_POST['min'];
$ap= $_POST['ap'];










//Validate first
if(empty($name)||empty($visitors_email)) 
{
echo "Name and email are mandatory!";
exit;
}
$email_from = 'www.bracknelltaxis.online';//<== update the email address
$email_subject = "New Form submission";
$email_body ="User Name: $name.\n".   
"User Mail: $visitors_email.\n". 
"User Phone: $phone.\n".
"Pickup: $pickup.\n".
"Destination: $destination.\n".
"Pickup Date: $pickupdate.\n".
"Hour: $hour.\n".
"Minute: $min.\n".
"Am/Pm: $ap.\n".

$to = "booking@bracknelltaxis.online";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

//done. redirect to thank-you page.

header('Location: thanks.html');

?> 