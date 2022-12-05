<?php

if(isset($_POST["submit"])) {

    $username =  $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $phone= $_POST['phone'];
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

<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Contact Us </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://kit.fontawesome.com/a382b82c21.js" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        
            <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
} 

body{
    background: linear-gradient(90deg,#0e3959 0%, #0e3959 30%, #03a9f5 30%, #03a9f5 100%);
}
.contactUs
{
    position:relative;
    width: 100%;
    padding: 40px 100px
}
.contactUs .title
{
     display: flex;
     justify-content: center;
     align-items: center;
     font-size: 2em;
}
.contactUs .title h2
{
    color:#fff;
    font-weight: 500;
}
.form 
{
    grid-area: form;
}

.info 
{
    grid-area: info;
}

.map 
{
    grid-area: map;
}
.contact 
{
    padding: 40px;
    background: #fff;
    box-shadow: 0 5px 35px rgba(0,0,0,0.15);
}
.box
{
    position: relative;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 5fr 4fr;
    grid-template-areas:
    "form info"
    "form map";
    grid-gap: 20px;
    margin-top: 20px;

}

.contact h3
{
    color: #0e3959;
    font-weight:500;
    font-size: 1.4em;
    margin-bottom: 10px;
}


/*.banner{
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
    

}*/



            </style>
            
        </head>

            <body>

            

            <!--------- <div class="banner">
                <div class="navbar">

                    <img src="photos/logo.png" class="logo">
                    <ul>
                        <li><a href="home.php">Home</a></li>\

                        </ul>                    
                </div>
            </div> ------->

        <div class="contactUs">
                <div class="title">
                    <h2>Get in Touch</h2>
                </div>
            <div class="box">
                    <!---- Form ---->
                <div class="contact form">
                    <h3>Send a Message</h3>
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="First Name">
                            </div>
                                <div class="inputBox">
                                 <span>Last Name</span>
                                     <input type="text" placeholder="Last Name">
                                </div>
                        </div>   

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" placeholder="email@gmail.com">
                            </div>
                                <div class="inputBox">
                                    <span>Mobile</span></span>
                                    <input type="text" placeholder="+91 721 345 678">
                                </div>
                            
                        </div>
                        <div class="row100"></div>
                    </div>
                       
                </div>
                
                    
                     <!---- Info Box ---->
                    <div class="contact info"></div>

                     <!---- Map ---->
                    <div class="contact map"></div>

            </div>
        </div>
    </body>


    

</html>