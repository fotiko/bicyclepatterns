<?php $name = $_POST['contact_name'];
$email = $_POST['contact_email'];
$message = $_POST['contact_message'];
$formcontent="From: $name \n Message: $message";
$recipient = "spam@nommax.com";
$subject = "Contact Form - Bicycle Patterns";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: thanks.html');
exit();
?>