<?php

if(isset($_POST["submit"])) {

    $username =  $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $phone= $_POST['phone'];
    $message = $_POST['message'];

    $to = $email;
    $subject = $message;

    //Always set content-type when sending HTML email

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = "Content-type: text/html;charset=UTF-8" . "\r\n";

    //More headers

    $headers = "From: 1.0" . "\r\n";
 
}

?>

<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Admin </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
        
            <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
} 
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(photos/contact-us-lettering.jpg);
    background-size: cover;
    background-position: center;
}.navbar img{
    width: 100px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 20%;

}
.navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content:
    space-between;
}

.logo{
    width: 120px;
    cursor: pointer;
}

.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}

.navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}

.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #960032;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
    
}

.navbar ul li:hover::after{
    width: 100%;
}

.social-icons{
    margin-left: 300px auto;
    text-align: left;
}

.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
    display:flex;
    flex-direction:column;
    

}



            </style>
            
        </head>

            <body>

            

            <div class="banner">
                <div class="navbar">

                <div class="social-icons">
                        <img src="photos/fb.png">
                        <img src="photos/ig.png">
                        <img src="photos/gg.png">
                        <img src="photos/tw.png">
                    </div>

                    <img src="photos/logo.png" class="logo">
                    <ul>
                        <li><a href="home.php">Home</a></li>\

                        </ul>                    
                </div>
            </div>
        </body>


    

</html>