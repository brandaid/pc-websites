<?php 
if(isset($_POST['email'])) 
{
$email_to = "dan.hunter@smiledirectclub.com";

$email_subject = "New message from your website";

$email_message .= "First Name: " . $_POST['firstname'] . "\n";
$email_message .= "Last Name: " . $_POST['lastname'] . "\n";
$email_message .= "Email: " . $_POST['email'] . "\n";
$email_message .= "Phone: " . $_POST['phone'] . "\n";


$headers = 'From: '.$_POST['email']."\r\n".
'Reply-To: '.$_POST['email']."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
header("Location: index.html");
}
?>