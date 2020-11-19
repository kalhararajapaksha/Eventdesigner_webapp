<?php 
session_start();
$_SESSION['cat_id']=$_GET['cat_id'];

?>
<?php
include 'include/admin_view2_handler.php';
include 'include/delete_cat_handler.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Eventhelper.com</title>
 <link href="css/admin_view3.css" rel="stylesheet" type="text/css">
	
 <!-- Add icon library -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css" rel="stylesheet">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
 <script src="js/1.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-sm  navbar-dark fixed-top nav_animation">
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
            </ul>
        </div>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search" data-toggle="tooltip" title=" Type here to search"><button type="submit" class="searchbtn" data-toggle="tooltip" title=" click to search">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </nav>

    <!--menu bar-->

	<?php include 'include/cat_div_handler.php'; ?>



	<!--Wedding-->
            <div class=".col-sm-8 bg-color" id="wedding">
                <h1>Wedding</h1>
                <div class="container1">
                <div class="for-group">
                    <form action="###">
                    <label for="newcat"></label>
                    <input class="input1" act type="text" class="form-control" id="newcat" placeholder="category name">
                    <input class="btn btn-danger" type="button" value="UPDATE">
                </form>
                </div>
            </div>   			
				
	<div class="flipping-card-wrapper">
	<?php echo $package; ?>
	<?php echo $package1; ?>

</body>
</html>
