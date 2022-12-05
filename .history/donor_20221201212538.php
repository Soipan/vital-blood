<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Donor </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
            
        
            <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
} 
<----------.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.30),rgba(0,0,0,0.30)),url(about.jpg);
    background-size: cover;
    background-position: center;
}--------------*>

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


          <!--  -->
          <div class="row text-center justify-content-center">
            
            <div class="col-sm-5 offset-sm-1">
                <img src="photos/three.jpg" class="img-fluid" alt="">
                <div class="event-content">
                    <h6>Business Mastery Event</h6>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta <br> nihil, praesentium consequuntur iusto reprehenderit quam <br> hic enim in possimus adipisci.</span><br><br>
                    <a href="">Join</a>
                </div>
            </div>

            <div class="offset-sm-1 col-sm-5">
              <img src="photos/four.jpg" class="img-fluid" alt="">
              <div class="event-content">
                  <h6>Business Mastery Event</h6>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta <br> nihil, praesentium consequuntur iusto reprehenderit quam <br> hic enim in possimus adipisci.</span><br><br>
                  <a href="">Join</a>
              </div>
          </div>
        </div>

        
        <!--  -->

        <div class="row text-center justify-content-center">
            
            <div class="col-sm-5 offset-sm-1">
                <img src="photos/five.jpg" class="img-fluid" alt="">
                <div class="event-content">
                    <h6>Business Mastery Event</h6>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta <br> nihil, praesentium consequuntur iusto reprehenderit quam <br> hic enim in possimus adipisci.</span><br><br>
                    <a href="">Join</a>
                </div>
            </div>

            <div class="offset-sm-1 col-sm-5">
              <img src="photos/six.jpg" class="img-fluid" alt="">
              <div class="event-content">
                  <h6>Business Mastery Event</h6>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta <br> nihil, praesentium consequuntur iusto reprehenderit quam <br> hic enim in possimus adipisci.</span><br><br>
                  <a href="">Join</a>
              </div>
          </div>
        </div>


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