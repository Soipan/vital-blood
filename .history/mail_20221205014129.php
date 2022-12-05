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

    echo"
    !DOCTYPE html>
    <html lang="en">

        <head>

            <title> Contact Us </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://kit.fontawesome.com/a382b82c21.js" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        
    ";
    $to = $email;
    $subject = $message;

    $message = "Phone: ($phone)" . $message;

    //Always set content-type when sending HTML email

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = "Content-type: text/html;charset=UTF-8" . "\r\n";

    //More headers

    $headers = "From: soipanjenkins@gmail.com" . "\r\n";
    $mail = mail($to,$subject,$message,$headers);

  if ($mail) {
    echo "<script>alert('Mail Sent.');</script>";
  }else{
    echo "<script>alert('Mail Not Sent.');</script>";
  }
 
}

?>