<?php

if(isset($_POST['send'])){
    $to='maiverily@gmail.com';
    $subject= 'Feedback from my site';
    $message= 'Name:' . $_POST['name'] . "\r\n\r\n";
    $message.= 'Email:' . $_POST['email'] . "\r\n\r\n";
    $message.= 'Message:' . $_POST['message'];
}

$headers= "From: Woodland\r\n";
$headers .= 'Content-Type: text/plain; charset=utf-8';
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email){
    $headers .= "\r\nReply-To: $email";
}
$success=mail($to, $subject, $message,$headers, '-fmaiverily@gmail.com');
?>