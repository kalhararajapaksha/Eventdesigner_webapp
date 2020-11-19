
<?php 

session_start();
//$_SESSION['cat_id']=$_GET['cat_id'];
//$_SESSION['add_new']=$_GET['ida'];
//$_SESSION['pkg_id']=$_GET['pkg_id'];
?>
<?php
include 'include/new_cat_handler.php';
//include 'add_new_cat_hand.php'; 

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
                <h1>NEW CAT</h1>
                <div class="container1">
                <div class="for-group">
                    
                    <form action="add_new_cat_hand.php" method="post">
                    <label for="newcat">Enter New Category</label>
                    <input class="input1" act type="text" class="form-control" id="newcat" placeholder="category name" name="cat_name">
                    <input class="btn btn-danger" type="submit" value="submit" name="add_cat">
                    
                </form>
                
                </div>
            </div>   		
				
	<div class="flipping-card-wrapper">
	
	<?php echo $package1; ?>
          <!--  <div class="flipping-card-item-wrapper">
                <div class="flipping-card-item-side flipping-card-item-side-front">
                    <img src="##" alt="" class="flipping-card-item-img">
                </div>
                <div class="flipping-card-item-side flipping-card-item-side-back">
                    <div class="flipping-card-back-wrapper">
                        <h2>PLATINUM<br>package</h2><br>
                        <a href="##" class="btn btn-primary">Edit!</a><br><br>
                        <button type="button" class="btn btn-danger"><i style="font-size:26px;color:white" class="material-icons">delete</i></button>
                    </div>
                </div>
			</div>
        

            <div class="flipping-card-item-wrapper">
                <div class="flipping-card-item-side flipping-card-item-side-front">
                    <img src="##" alt="" class="flipping-card-item-img">
                </div>
                <div class="flipping-card-item-side flipping-card-item-side-back">
                    <div class="flipping-card-back-wrapper">
						<h2>GOLD<br>package</h2><br>
                        <a href="##" class="btn btn-primary">Edit!</a><br><br>
                        <button type="button" class="btn btn-danger"><i style="font-size:26px;color:white" class="material-icons">delete</i></button>
                    </div>
                </div>
            </div>

            <div class="flipping-card-item-wrapper">
                <div class="flipping-card-item-side flipping-card-item-side-front">
                    <img src="##" alt="" class="flipping-card-item-img">
                </div>
                <div class="flipping-card-item-side flipping-card-item-side-back">
                    <div class="flipping-card-back-wrapper">
                        <h2>SILVER<br>package</h2><br>
                        <a href="##" class="btn btn-primary">Edit!</a><br><br>
                        <button type="button" class="btn btn-danger"><i style="font-size:26px;color:white" class="material-icons">delete</i></button>
                    </div>

                </div>
            </div>
        
		
		<div class="flipping-card-item-wrapper">
			<div class="flipping-card-item-side flipping-card-item-side-front">
				<img src="##" alt="" class="flipping-card-item-img">
			</div>
			<div class="flipping-card-item-side flipping-card-item-side-back">
				<div class="flipping-card-back-wrapper">
					<h2>BRONZE<br>package</h2><br>
                    <a href="##" class="btn btn-primary">Edit!</a><br><br>
                    <button type="button" class="btn btn-danger"><i style="font-size:26px;color:white" class="material-icons">delete</i></button>
				</div>

			</div>
	
	</div>-->
	</div>

	</div>
	
	<!--anniversery_party-->
	<!--<div class=".col-sm-8 bg-color bg-dark" id="anniversery_party">
	<div class="flipping-card-wrapper">
            <div class="flipping-card-item-wrapper">
                <div class="flipping-card-item-side flipping-card-item-side-front">
                    <img src="6.jpg" alt="" class="flipping-card-item-img">
                </div>
                <div class="flipping-card-item-side flipping-card-item-side-back">
                    <div class="flipping-card-back-wrapper">
                        <h2>PLATINUM<br>package</h2>
                        <button class="flipping-card-back-wrapper__btn">click</button>
                    </div>
                </div>
			</div>
        

            <div class="flipping-card-item-wrapper">
                <div class="flipping-card-item-side flipping-card-item-side-front">
                    <img src="5.jpg" alt="" class="flipping-card-item-img">
                </div>
                <div class="flipping-card-item-side flipping-card-item-side-back">
                    <div class="flipping-card-back-wrapper">
						<h2>GOLD<br>package</h2>
                        <button class="flipping-card-back-wrapper__btn">click</button>
                    </div>
                </div>
            </div>

            <div class="flipping-card-item-wrapper">
                <div class="flipping-card-item-side flipping-card-item-side-front">
                    <img src="22.jpg" alt="" class="flipping-card-item-img">
                </div>
                <div class="flipping-card-item-side flipping-card-item-side-back">
                    <div class="flipping-card-back-wrapper">
                        <h2>SILVER<br>package</h2>
                        <button class="flipping-card-back-wrapper__btn">click</button>
                    </div>

                </div>
            </div>
        
		
		<div class="flipping-card-item-wrapper">
			<div class="flipping-card-item-side flipping-card-item-side-front">
				<img src="44.jpg" alt="" class="flipping-card-item-img">
			</div>
			<div class="flipping-card-item-side flipping-card-item-side-back">
				<div class="flipping-card-back-wrapper">
					<h2>BRONZE<br>package</h2>
					<button class="flipping-card-back-wrapper__btn">click</button>
				</div>

			</div>
		</div>
	</div>
	</div>	
	
-->


</body>
</html>

<!--
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="css/user_view2.css">
	
</head>

	<body>
<h1>WEDDING</h1>
	<div class="container">
  <img src="image/88.jpg" alt="Snow" style="width:100%;">
  <div class="centered">EVENT PLANNING <br>is <br>our passion</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	
	<section class="flipping-cards">
        <div class="flipping-card-wrapper">
        
        <//?php echo $package1; ?>
     
    </div>
    </section>


</body>
</html>
-->