

<?php
if(!isset($_POST['submit']))
{

echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitors_email = $_POST['email'];


$pickup= $_POST['pole'];












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

"Pickup: $pickup.\n".


$to = "booking@bracknelltaxis.online";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

//done. redirect to thank-you page.

header('Location: thanks-message.html');

?> 