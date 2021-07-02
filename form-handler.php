<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$telephone = $_POST['tel']
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@wbsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Telephone: $telephone. \n".
                "Subject: $subject. \n".
                "User Message: $message. \n".;
$to = 'hoatruonghong@gmail.com';
$headers = "Form: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body, $headers);

header("Location: contact.html");



?>