<?php


@include 'config.php';

if(isset($_POST['submit'])){
    $hospital = $_POST['hospital_name'];
    $name = mysqli_real_escape_string($conn, $_POST['official_name']);
    $official = $_POST['official_position'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $blood_type = $_POST['blood_type'];
   $blood_amount = $_POST['blood_amount'];
   


   $select = " SELECT * FROM blood_request WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);



    if($pass != $cpass){
        $error[] = 'password not matched!';
    }else{

         $insert = "INSERT INTO blood_request (hospital_name, official_name,  official_position, email, password, blood_type,blood_amount) VALUES('$hospital','$name','$official','$email', '$pass','$blood_type','$blood_amount')";
         mysqli_query($conn, $insert);
         header('location:client.php');
      

        }
      

    
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>supply form</title>

   <!-- custom css file link  -->
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

.container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
}

.container .content{
   text-align: center;
}

.container .content h3{
   font-size: 30px;
   color:#333;
}

.container .content h3 span{
   background: crimson;
   color:#fff;
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 50px;
   color:#333;
}

.container .content h1 span{
   color:crimson;
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
}

.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover{
   background: crimson;
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background: #eee;
   height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url(two.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   text-align: center;
   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#333;
}

.form-container form input,
.form-container form select{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}



.form-container form .form-btn{
   background: #fbd0d9;
   color:crimson;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: crimson;
   color:#fff;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;
}

.form-container form p a{
   color:crimson;
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
   </style>

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Request for a Blood Supply</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
       <input type="text" name="hospital_name" required placeholder="enter the hospital name">
      <input type="text" name="official_name" required placeholder="enter your name">
      <input type="text" name="official_position" required placeholder="enter the hospital position">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="text" name="blood_type" required placeholder="enter the required blood type">
      <input type="text" name="blood_amount" required placeholder="enter the amount needed in pints">
  
      <input type="submit" name="submit" value="request now" class="form-btn">

   
   </form>

</div>

</body>
</html>