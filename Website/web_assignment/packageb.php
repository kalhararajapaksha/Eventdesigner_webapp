<?php 
session_start();
$_SESSION['cat1_id']=$_GET['cat_id'];
$_SESSION['pkg_id']=$_GET['pkg_id'];
?>
<?php
include 'database/config.php';
include 'includes/pkg_d_handler/pkg_d_handler.php';
include 'includes/pkg_d_handler/pkg_i_handler.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gold Package</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 

<link rel="stylesheet" href="css\user3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair Display SC">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Parisienne">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work Sans">
</head>
<body>
  <!--Navbar-->
  <nav  class="navbar navbar-expand-sm navbar-dark fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="#">EventHelper.com</a>
  
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#section1">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">Help</a>
        </li>
      </ul></div>
           <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search"><button type="submit" class="searchbtn"><i class="fa fa-search"></i>
        </button>
              
      </form>
    </div>
      </nav>

    <!--package name-->
    <div class="gold-box">
      <?php echo $rec_pd['pkg_name']; ?>
  </div>
  
    <!--image slider-->
<div class="container-fluid">
    <div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
        <li data-target="#mycarousel" data-slide-to="4"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
       <?php echo $img_list; ?>
      <!--
        <div class="carousel-item active">
            <img class="d-block w-100" src= alt="Decorations">
          <div class="carousel-caption">
            <h3 class="h3-responsive">Designg your day</h3>
          </div>
        </div>-->
        <!--
        <div class="carousel-item">
            <img class="d-block w-100" src="im2.jpg" alt="Photography">
          <div class="carousel-caption">
            <h3 class="h3-responsive">Capture the moments</h3>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="im3.jpg" alt="Photography">
        <div class="carousel-caption">
          <h3 class="h3-responsive">Filled with Love</h3>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="im4.jpg" alt="Dancing Group">
      <div class="carousel-caption">
        <h3 class="h3-responsive">Dance to the thythm</h3>
      </div>
    </div>
      
    <div class="carousel-item">
      <img class="d-block w-100" src="im5.jpg" alt="DJ">
    <div class="carousel-caption">
      <h3 class="h3-responsive">And Feel the music</h3>
    </div>
  </div>
-->
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
<br>
   <div class="descrip">DESCRIPTION</div>
  <div class="desc">

    <div class="des-left">
      <div class="parallax-1">
    </div></div>
<!--Description text-->
<div class="des-right">
   With all aspects of planning <br>
   A dedicated team of event staff on-site for day of coordination services (for 10 hours per staff member)
   A dedicated team of event staff on-site for event rehearsal (maximum of one hour per staff member)
   Unlimited email and phone contact
</div>

 </div>
</div>

<!--Services included in the package -->

  <div class="container" id="pk">
  <p class="pkg">PACKAGE INCLUDES </p>
   <button class="showbtn" onclick="pkgshow()">
     <svg  viewBox="0 0 16 16" class="bi bi-chevron-down"  xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
   </svg> 
    </button>
    <div id="pkglist">
      <ul class="list">
      <li>Wedding Hall Decorations to your liking</li>
      <li>4 Photographers </li>
      <li>3 Dancing groups & 9 Dances </li>
      <li>As long as you like </li>
      <li>24/7 available</li>
    </ul>
  </div>
  </div>
  </div>

<!--division containing the price-->

  <div class="pri">
    <div class="parallax-2">
 
<p class="sen">All of these just for</p>
<button class="btn-hover color-1" onclick="showprice()" id="price"> Click to see the Price </button>
</div>
</div>


<!--popup contact me form-->
<div class ="popup-whole">
<div class="container">
  <a href="#popup" class="buttons">
    <button class="btn-hover color-2">Book Your Day</button>
  </a>

   <div class="popup" id="popup">
    
     <div class="popup-inner">
      <a href="#" class="popup-close">X</a>
       <div class="popup-photo">
         <img src="p2.jpg" alt="party">
       </div>

       <div class="popup-form">
       <p>Let's Get in Touch</p>

<!--popup form input sections-->

<div class="popup-fill">
  <div class="name">
  <label for="name" >NAME</label>
  <input type="text" id="name" placeholder="Your Name" required>
  </div>
  <div class="email">
  <label for="email"> EMAIL</label>
  <input type="email" id="email" placeholder="Your Email" required>
  </div>
  <div class="cno">
  <label for="cno">CONTACT NO.</label>
  <input type="tel" id="cno" placeholder="Mobile/Tel no." required>
  </div>
   </div>
   <div class="btn-wrapper">
       <button onclick="chngtxt()" value="contact" class="conbtn-hover color" id="contactme" type="submit">Contact Me</button>
    
      </div>
      </div>
     </div>
   </div>
</div>
</div> 

</div>
</div>
</div>

<!--Footer-->

<div class="footer">
  <div class="row">
    <div class="col-sm-4">
      <h5>Our Mission</h5>
      <p>Our unique sense of wonder and romance combined with our knowledge of the area will create
         unforgettable memories for you in a city steeped in culture.
         EventHelper.com has been putting together upscale Weddings, 
         Events and Travel Itineraries with thoughtful 
         and personally curated details in the heart of the city.</p>
    </div>
    <div class="col-sm-4">
  
    </div>
    <div class="col-sm-4">
    <h5> Contact us : </h5>
      (+94)77 333 555<br>
      (+94)11 288 555 <br>
      <h5> Address: </h5>
      220 , Paradise Road, Co. 07
   <h5>   Email : </h5>
      Eventhelpercom@gmail.com
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <a href="#" class="fa fa-facebook"></a>
    </div>
    <div class="col-md-4">
      <a href="#" class="fa fa-instagram"></a>
    </div>
    <div class="col-md-4">
      <a href="#" class="fa fa-twitter"></a>
    </div>
  </div>
    <div class="row">
    <div class="col-sm-12">
      <a href="#">Terms of Use</a>
       | 
      <a href="#">Privacy Policy</a>
    </div>
   </div>
  </div>
</div>

<script src="js/user3.js"></script>
</body>
</html>