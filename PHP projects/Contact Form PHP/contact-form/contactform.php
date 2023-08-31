<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $reciever = "fomubadborister@gmail.com";
    $sender = "From\n".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n".$message;

    mail($reciever, $subject, $txt, $sender,);
    header("Location: index.php?mailsend");
}

?>

