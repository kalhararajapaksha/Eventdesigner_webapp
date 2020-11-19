<?php 
session_start();
$_SESSION['cat1_id']=$_GET['cat_id'];
$_SESSION['pkg_id']=$_GET['pkg_id'];
?>
<?php
include 'database/config.php';
include 'includes/pkg_d_handler/pkg_d_handler.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>

</style>
	<title></title>
</head>
<body>
<div>

  <?php echo $rec_pd['pkg_cont']; ?>
</div>
</body>
</html>