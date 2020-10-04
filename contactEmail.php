<?php

try {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $subject = 'New Inquiry FINOTAX FILLING Website Enquiry';
    $body    = 'New inquiry from: '.$_POST['name'].'<br> Email: '.$_POST['email'].'<br> Message: '.$_POST['message'].'<br> Contact Number: '.$_POST['mobile'].'<br> Address: '.$_POST['address'].'<br> Interested In: '.implode(", ",$_POST['products']);
    $body = wordwrap($body,70);
    mail("patilharesh008@gmail.com", $subject, $body, $headers);

    echo 'Message has been sent';
    exit();
} catch (Exception $e) {
    
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}