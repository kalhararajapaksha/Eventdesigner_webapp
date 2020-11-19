<?php
include 'database/config.php';
?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventhelper.com</title>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!--our externel js-->
	 <script type="text/javascript" src="js/home.js"></script>
<!--animate on scroll-->
	  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--our externel style-->
  <link href="css/home.css" rel="stylesheet">
   <link href="lgin_modal.css" rel="stylesheet">
</head>
 <body data-spy="scroll" data-target=".navbar" data-offset="50">
	 
  <header>
	   
	 
	  
 <nav  class="navbar navbar-expand-sm  navbar-dark fixed-top nav_animation">
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
        <a class="nav-link" href="#section1" data-toggle="tooltip" title="Click here to go home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section2" toggle="tooltip" title="Click here to see about us">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section3" toggle="tooltip" title="Click here if want help">Help</a>
      </li>
	 <li class="nav-item">
        <a class="nav-link" href="#">සිංහල</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">English</a>
      </li>
    </ul></div>
		     <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search" data-toggle="tooltip" title=" Type here to search"><button type="submit" class="searchbtn" data-toggle="tooltip" title=" click to search"><i class="fa fa-search"></i>
		</button>
						

    </form>
  </div>
	  </nav>     
	<div id="section1" class="container h-100" >
		 
    <div class="d-flex h-100 text-center align-items-center">
	 <div  class="w-100 text-white">
	 <form action="categoriesn.php" method="post">
		 <button type="submit" name="select_cat" id="btn1" class=" btn1 btnb" data-toggle="tooltip"  title="Click here to get organized your event" onmouseover="bubbles()">I want to Organize my Event</button>	
		 </form>	 
	 </div>
	</div>
   </div> 
	  
	 

	   
   <div class="parallax" ><video  playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
    <source src="image/01.mp4" type="video/mp4" >
	  </video></div>
	 
  </header>
	
	<div class="section bg-color-white"><section id="section2">
		<div class="section_1 container" >
		<h1 class="about_us" data-aos="slide-left">About us</h1><span class="as_span" data-aos="fade-right"></span>
        <p class="section_para" data-aos="slide-right">A Perfect Event is an award winning event planning and design firm. Our full service, start to finish details and services make our studio the perfect start for all things party style. Through innovative design and flawless execution, we produce memorable and unique events of all shapes, sizes and styles. For 20 years our talented, experienced team has mastered countless celebrations - weddings, corporate, galas, birthdays, dinners and more. Named World's Top 10 Event Planner by Departures Magazine, top wedding planner by Martha Stewart and The Knot, top event planner by Global Black Book, and top event innovator by BizBash, we share our insight and passion with clients both large and small. 



Our Chicago studio is the perfect escape from reality. Stroll through the best new design trends, color palettes, florals and gifts for every occasion as we bring inspiration to life 7 days a week. From planning, styling, florals, lighting, rentals, stationery, party favors and coordination our service is highly personal. 

 

Our motto is simple: Celebrate. Live. Love. Laugh. We look forward to making your next soiree, A Perfect Event.   </p>
       
        <p class="mb-0">

        </p>
		</div></section>

<section id="section3">
 <div class="section_2 container" data-aos="slide-left">
		<h1 data-aos="slide-left">Help</h1><span class="as_span" data-aos="fade-right"></span>
        <p class="section_para" data-aos="slide-right">The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.
        The overlay color can be changed by changing the <code>background-color</code> of the <code>.overlay</code> class in the CSS.
        Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
        <p class="mb-0">

        </p>
	 </div></section>

	 
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
  </div>	 </div>
	 
	   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
	 
 </body>
</html>



<!--



---------------
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="home">
<form action="categoriesn.php" method="post">
<button type="submit" name="select_cat" >I Want org My Event </button>

</form>

</div>

</body>
</html>-->