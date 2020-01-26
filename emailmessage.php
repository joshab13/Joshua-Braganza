<?php


if (isset($_POST['submit'])) {  //POST form has been submitted
    $name = $_POST['contactName']; 
    $visitor_email = $_POST['contactEmail'];
    $message = $_POST['contactMessage'];
    $email_subject = $_POST['contactSubject'];

    

    $to = "jb14go@brocku.ca";
    $headers = "From: ".$visitor_email;


    mail($to, $email_subject, $message, $headers);

    header("Location: index.php?mailsend");









}

?>