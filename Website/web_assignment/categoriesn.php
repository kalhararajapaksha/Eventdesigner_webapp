<?php

include 'database/config.php';
include 'includes/cat_handler/cat_handler.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Add icon library (This CDN link provides you many icons.you can use them for our website.
    only you need to know is icon name. use it as class name)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Our css-->
    <link rel="stylesheet" href="css/css_u2/UserView1.css" />
</head>

<body>
    <nav class="navbar navbar-expand-sm  navbar-dark fixed-top">
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
            </ul>
        </div>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search"><button type="submit" class="searchbtn">
                    <i class="fa fa-search"></i>
                </button>


            </form>
        </div>
    </nav>
    <!--Content-->
    <div class="container">
        <div class="row row_custom">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 "></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="box">
                    <div class="background"></div>
                    <h1>What's on your mind?</h1>
                    <form action="includes/cat_handler/cat_handler2.php" method="post" >
                        <select class="form-control" name="events" placeholder="select">
                            <?php echo $cat_list; ?>                      
                        </select>
                    <div class="row">
                    <div class="col-4 col-sm-4 col-md-4"></div>
                        <button type="submit" name="next" value="next" class="btn_next col-4 col-sm-4 col-md-4 btnb" >NEXT</button>
                       <!-- <a class="btn_next col-4 col-sm-4 col-md-4">Next</a>-->
                        <div class="col-4 col-sm-4 col-md-4"></div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 "></div>
        </div>
    </div>
    <!--Content end-->
    <!--Footer-->
    <div class="footer">
        <div class="row">
            <div class="col-sm-4">
                <h5>Our Mission</h5>
                <p>
                    Our unique sense of wonder and romance combined with our knowledge of the area will create
                    unforgettable memories for you in a city steeped in culture.
                    EventHelper.com has been putting together upscale Weddings,
                    Events and Travel Itineraries with thoughtful
                    and personally curated details in the heart of the city.
                </p>
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
    </div><!--Footer end-->
</body>
</html>

<!--

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHelp</title>
    <link href="css/userview1.css" rel="stylesheet">
  
</head>
<body>
    <div class="box">
            <p class="title">What is on your Mind</p>
            <label for="events"></label>
            <form action="includes/cat_handler/cat_handler2.php" method="post">
            <select name="events" id="events"  > 
            <option><h3 class="">Select</h3></option>  
            <//?php echo $cat_list; ?>
            <input type="submit" name="next">next</input>
            </select>
            </form>
            
    </div>

</body>
</html>-->