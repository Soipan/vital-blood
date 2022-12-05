
<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> About Us </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a382b82c21.js" crossorigin="anonymous"></script>
            
html {
  scroll-behavior: smooth;
}

<style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
} 
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0.25)),url(about.png);
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
    width: 100px;
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
@media(max-width: 700px){
  
    .navbar ul li{
        display: block;
    }
    .navbar{
        position: absolute;
        background: #f44336;
        height: 100vh;
        width: 200px;
        top: 0;
        right: -200px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }

  

    .navbar ul {
        padding: 30px;
    }
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
    font-size: 14px;
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

*/------.hero-btn:hover{
    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
} 


.fa-solid{
    display: block;
        color: #fff;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
        left: 20px;
}
        /*-------course----------*/
.course{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;

}

h1{
    font-size: 36px;
    font-weight: 600;
}

p{
    color: #777;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
}

.row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}

.course-col{
    flex-basis: 31%;
    background: #fff3f3;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}

h3{
    text-align: center;
    font-weight: 600;
    margin: 10px 0;

}

.course-col:hover{
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}
@media(max-width: 700px){
    .row{
        flex-direction: column;
    }
}

    /*---------campus-------*/

.campus{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}

.campus-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.campus-col img{
    width: 100%;
    display: block;
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left:0;
    transition: 0.5s;
}
.layer:hover{
    background: rgba(226,0,0,0.7);
}

.layer h3{
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 26px;
    bottom: 0;
    left:50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;
}

</style>

        </head>
<body>
    <section class="banner">
            <div class="navbar">
                    <img src="logo.png" class="logo">
                    <ul>

                        <li><a href="home.php">Home</a></li>

                    </ul>                    
            </div>
            <div class="text-box" id="text-box">
            <h1>Courses We Offer </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi in quas minima eius, qui illo. Inventore veritatis officiis quibusdam error iste quo odio dolorem, consectetur, ut iusto, maiores vel.</p>
    <a href="#row" class="hero-btn">Scroll Down For More<br><br><i class="fa-solid fa-arrow-down" onclick="scroll()"></i></a>
</div>
    </section>


    <!------Course------>

    <section class="course">
        

        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto aliquam aliquid magni molestiae quod ex repudiandae blanditiis, ipsa vero voluptatibus! Minus, ducimus ratione ut nemo reprehenderit hic quam fugiat consequatur?</p>
            </div>
            <div class="course-col">
                <h3>Undergraduate</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto aliquam aliquid magni molestiae quod ex repudiandae blanditiis, ipsa vero voluptatibus! Minus, ducimus ratione ut nemo reprehenderit hic quam fugiat consequatur?</p>
            </div>
            <div class="course-col">
                <h3>Post Graduate</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto aliquam aliquid magni molestiae quod ex repudiandae blanditiis, ipsa vero voluptatibus! Minus, ducimus ratione ut nemo reprehenderit hic quam fugiat consequatur?</p>
            </div>
        </div>

        <!-------Campus------->

    </section>

    <section class="campus">

        <h1>Our Global Partners</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi est quia soluta obcaecati cumque facilis.</p>

        <div class="row">
            <div class="campus-col">
                <img src="london.png">
                <div class="layer">
                    <h3>LONDON</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="newyork.png">
                <div class="layer">
                    <h3>NEW YORK </h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="washington.png">
                <div class="layer">
                    <h3>WASHINGTON</h3>
                </div>
            </div>
        </div>

    </section>

       <!-----Javascript for Scroll----->
       <script>

var text-box = document.getElementById("text-box");

function scroll(){
    text-box.style.display = "#course-col";
}

}
</script>
</body>
</html>