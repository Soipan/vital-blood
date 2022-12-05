
<?php


@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $blood_type = $_POST['blood_type'];
   $date = $_POST['date'];


   $select = " SELECT * FROM blood_drive WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);



    if($pass != $cpass){
        $error[] = 'password not matched!';
    }else{

         $insert = "INSERT INTO blood_drive (name, email, password,blood_type, date) VALUES('$name','$email', '$pass','$blood_type','$date')";
         mysqli_query($conn, $insert);
         header('location:donor.php');
      

        }
      

    
};


?>

<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Client </title>
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
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(client.png);
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

            </style>
            
        </head>

            <body>

            

            <div class="banner">
                <div class="navbar">
                    <img src="logo.png" class="logo">
                    <ul>
                        <li><a href="logout.php">Logout</a></li>

                        </ul>                    
                </div>
            </div>

        </body>

        </html>


        