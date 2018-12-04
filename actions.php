<?php

function sendMail(){
    global $config;
    $email =& $_REQUEST["email"];
    $fullname =& $_REQUEST["fullname"];
    $subject =& $_REQUEST["subject"];
    $message =& $_REQUEST["message"];
    $to = $config["email"];
    $subject = $subject;
    $message = $message;
    $headers = 'From: '.$email.'' . "\r\n" .
    'Reply-To: '.$email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers))
    return 'Thank you for contacting us. We\'ll get back to you shortly';
}
