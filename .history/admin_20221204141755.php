


<!DOCTYPE html>
    <html lang="en">

        <head>

            <title>Admin</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/a382b82c21.js" crossorigin="anonymous"></script>
        
  <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
} 
.banner{
    width: 100%;
    height: 100vh;
  
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
    color: #000000;
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

.text-box{
    width: 90%;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}

.text-box h1{
    font-size: 62px;

}

.text-box p{
    margin: 10px 0 40px;
    font-size: 17px;
    color: #fff;
}

.hero{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}

.fa-solid{
    display: block;
        color: #000000;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
        left: 20px;
}


.content{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}

.content p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}

.cta{
        margin: 100px auto;
        width: 80%;
        background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(photos/banner2.jpg);
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        text-align: center;
        padding: 100px 0;
    }

    .cta h1{
        color: #fff;
        margin-bottom: 40px;
        padding: 0;
    }
    .cta a{
      color: #fff;
        text-decoration: none;
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
                    <img src="photos/logo.png" class="logo">
                    <ul>
                        <li><a href="logout.php">Logout</a></li>

                        </ul>                    
                </div>
  