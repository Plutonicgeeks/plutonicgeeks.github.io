<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail("plutonicgeeks@gmail.com","Contact from the site",$message,"From: $email\r\n");

echo "Thanks for contacting us!"

?>
