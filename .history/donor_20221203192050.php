<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Donor </title>
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
    background-image: linear-gradient(rgba(0,0,0,0.30),rgba(0,0,0,0.30)),url(about.jpg);
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

.hero-btn{
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
        color: #fff;
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

.flex-parent,
.jc-center{
  display: flex;
    text-decoration: none;
    color: #fff;
    border-radius: 100px;
    padding: 12px 3px;
  
}

.flex-parent,
.jc-center:hover{
    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
}


.flex-parent,
.jc-center a{
  
.flex-parent,
.jc-center:hover{
    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
}
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
                <div class="text-box" id="text-box">
            <h1>Courses We Offer </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi in quas minima eius, qui illo. Inventore veritatis officiis quibusdam error iste quo odio dolorem, consectetur, ut iusto, maiores vel.</p>
    <div class="hero-btn">
   <p>Scroll Down For More Information<br><br><i class="fa-solid fa-arrow-down"></i></p>
    </div>
</div>
</div>
            
    
           
                
 <!-- EVENT LIST SECTION START -->
 <div class="container event">
          <div class="row text-center justify-content-center">
            
              <div class="offset-sm-1 col-sm-5">
                  <img src="photos/one.jpg" class="img-fluid" alt="">
                  <div class="event-content">
                      <h6>Business Mastery Event</h6>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta <br> nihil, praesentium consequuntur iusto reprehenderit quam <br> hic enim in possimus adipisci.</span><br><br>
                      <a href="">Join</a>
                  </div>
              </div>

              <div class="offset-sm-1 col-sm-5">
                <img src="photos/two.jpg" class="img-fluid" alt="">
                <div class="event-content">
                    <h6>Business Mastery Event</h6>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta <br> nihil, praesentium consequuntur iusto reprehenderit quam <br> hic enim in possimus adipisci.</span><br><br>
                    <a href="">Join</a>
                </div>
            </div>
          </div>

        
   


        <div class="flex-parent jc-center">
   <a href="about.php">Sign Up for a Drive</a>
</div>


    <!-- EVENT LIST SECTION END -->

  


<script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>


    <script>
        $(document).scroll(function(){
            $(".navbar").toggleClass("scrol", $(this).scrollTop() > $(".navbar").height());
        })
    </script>
</body>
</html>
             </body>

             </html>