<?php

if(isset($_POST["submit"])) {

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From:" .$name."<".$email.">\r\n";
    $recipient = "soipanjenkins@gmail.com";

    mail($revipient, $subject, $message, $mailheader)
    or die("Error!");

    echo '
    
    
    
    
    '

    
    
    
}

?>