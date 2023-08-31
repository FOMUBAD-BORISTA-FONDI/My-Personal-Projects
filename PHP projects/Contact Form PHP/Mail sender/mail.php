<?php
$receiver = "bernardche73@gmail.com";
$subject = "Email Test through PHP using Localhost";
$body = "Hi, there...This is a test email send from Borista.";
$sender = "From:fomubadborister@gmail.com";

if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>