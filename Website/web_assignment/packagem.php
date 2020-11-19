<?php 
session_start();
$_SESSION['cat_id']=$_GET['cat_id'];

?>
<?php
include 'includes/pkg_handler/pkg_handler.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="css/user_view2.css">
	
</head>

	<body>
<h1><?php echo $rec_cname['cat_name'];?></h1>
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
        <?php echo $pkg_list; ?>
       
	   
    </div>
    </section>


</body>
</html>