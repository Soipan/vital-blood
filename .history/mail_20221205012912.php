<?php

if(isset($_POST["submit"])) {

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

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