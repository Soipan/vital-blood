

<!DOCTYPE html>
    <html lang="en">

        <head>

            <title>Donation Homepage</title>
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
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(donation.png);
    background-size: cover;
    background-position: center;
}

.navbar img{
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
    width: 10px;
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

.content{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}

.content h1{
    font-size: 50px;
    margin-top: 80px;
}

.content p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}

.hero-btn{
    
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;

}

.hero-btn:hover{
    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
}

                </style>
        </head>

        <body>

            <div class="banner">
                <div class="navbar">
                    <img src="logo.png" class="logo">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="about.html" target="_blank">About us</a></li>
                        <li><a href="partners.html" target="_blank">Partners</a></li>
                        <li><a href="login_form.php" target="_blank">Sign Up/Log in</a></li>
                        <li><a href="contact.php" target="_blank">Contact Us</a></li>
                    </ul>                    
                </div>

                <div class="content">
                <h1>World's Biggest University</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatum sapiente assumend unde dolores nobis,<br> enim, cumque harum. Quia est quod neque accusamus, necessitatibus quisquam suscipit magnam!</p>
    <a href="about.php" class="hero-btn">Visit Us to Know More</a>
                </div>


            </div>

        </body>

    </html>