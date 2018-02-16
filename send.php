<?php

if(isset($_POST['send'])){
    $to='maiverily@gmail.com';
    $subject= 'Feedback from my site';
    $message= 'Name:' . $_POST['name'] . "\r\n\r\n";
    $message.= 'Email:' . $_POST['email'] . "\r\n\r\n";
    $message.= 'Message:' . $_POST['message'];
}

mail($to, $subject, $message);
?>