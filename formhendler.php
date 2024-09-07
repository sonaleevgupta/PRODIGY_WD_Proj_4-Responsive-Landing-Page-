<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$sub = $_POST['subject'];
$message = $_POST['messege'];

$email_form = 'afdbibn@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $sub.\n".
                "User Messege: $message.\n";
$to = 'sonaleevgupta@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>