<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
     <!-- HEADERSECTIONSTART -->
     <div class="header">
        <div class="img-parent">
            <div class="img">
                <img src="photos/header_one.jpg" alt="">
            </div>
            <div class="img-overlay"></div>
        </div>
        <div class="img-content">
            <h2>Schedule Event</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta quaerat distinctio id, obcaecati porro sint illum maiores ipsum hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque natus possimus a, facilis suscipit, minus assumenda consequatur  </span>
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