<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="home.js"></script>
    <link rel="stylesheet" href="style.css"/>

    <body>
      <section class="header"> 
      </section>
    </body>
    <style>
        
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
/* this is a background color to the top navigation*/
        .topnav {
            overflow: hidden;
            background-color: #95A7A7;
        }
/*This styles the links inside the navigation bar */
        .topnav a {
            float: right;
            color: #0f0f0f;
            text-align: center;
            padding: 30px 15px;
            text-decoration: none;
            font-size: 17px;

        }
/*This changes the color of the links on hover */
        .topnav a:hover {
            background-color: #f4C6B8;
            color: black;
        }
/*this adds a color to the active/ current link */
        .topnav a.active {
            background-color: #e68164;
             color: white;
}
</style>
</head>
<body>
<!--this is my navigation bar-->
 <div class="topnav">
  <a class="active" href="l">Contact</a>
  <a href = "">About</a>
  <a href = "">Plant Gallery</a>
  <a href = "">Home</a>
  <img src="LOGO.png" width="80" height="80">
  <a style="color:white; background:#f4C6B8; margin-right: 20px; font-size: 24px;">First Lady Floral</a> 
    
</div>

<!--slideshow of images-->
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="flower1.jpg" style="width:100%">
    <div class="text">Summer Vase Arrangement!</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="flower2.jpg" style="width:100%">
    <div class="text">Bouqet of Organic FLowers</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="flower3.jpg" style="width:100%">
    <div class="text">Rustic Vase Arrangement</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="flower4.jpg" style="width:100%">
    <div class="text">Bridal Bouquet</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<!--this makes the image centered-->
<style>
    img {
        margin-top: 60px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<!--SHOP NOW BUTTON-->
<a href="file:///C:/Users/gabri/OneDrive%20-%20UAT/csc356/Plant%20final/home.html" class="button">Shop <br> Now!</a>  

<!--services we offer-->

<section class="services">
  <h1>Services We Offer</h1>
  <!--JQUERY mouse scroll, shop our big sale-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#p1").mouseleave(function(){
      alert("SHOP OUR BIG SALE!");
    });
  });
  </script>
  </head>

  <!--Services we offer-->
  <body>
  
  <p id="p1">FIRST LADY FLORAL</p>
  

  <div class="row">
    <div class="services-col">
    <h3>Wide Variety<br>of Plants</h3>
      <p>We offer a wide variety of plants. From tropical to rare to excitic, and carnivourous we got them all. </p>
  </div>

  <div class="services-col">
    <h3>Wedding <br> Flowers</h3>
    <h4>Laryngoscopy</h4>
    <p>Looking for some flowers for your special day? Look no further! First Lady FLoral has got you covered!
    </p>

  </div>

  <div class="services-col">
    <h3>Vased <br> Arrangments</h3>
  <p>Shop our vast amount of vased arrangments. From birthdays, to anniversayrys, to get well soon, we have many options to choose from.</p>

  </div>
</section>

<!--taking care of your childs health-->
<!--this adds 3 images in a row on home page-->

<section class="care">
  <h1>Plants We Offer</h1>
<div class="row">
    <div class="care-col">
        <img src="plant1.jpg">
        <div class="layer">
          <h3>Nerve <br> Plants</h3>
        </div>
      </div>

        <div class="care-col">
          <img src="plant2.jpg">
          <div class="layer">
            <h3>Spider <br>Plants </h3>
          </div>
        </div>

          <div class="care-col">
            <img src="plant3.jpg">
            <div class="layer">
              <h3>Succulents</h3>
            </div>
          </div>
  </div>
    </style> 
  
<body>
    <p>Please note: We DO NOT allow pets into the store. Some plants are toxic to animals. We appreciate your cooperation.</p>
    </body>

     <!--Footer-->
     <footer>
      <p> Email: FirstLadyFLoral123@gmail.com </p>
      <p>1253 E. Rose Rd Suite 303, Mesa, AZ 8274936</p>
      <p> Phone: 183-850-3848</p>
      <p> Fax: 480-8923-237923</p>
     

    </footer>

      <!--Footer Style-->
    <style>
      footer {
        text-align: center;
        padding: 3px;
        background-color:#e68164;
        color: white;
      }
      </style>
</style>

</style>

    
</body>
</html>