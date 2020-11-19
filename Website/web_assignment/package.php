<?php 
session_start();
$_SESSION['cat_id']=$_GET['cat_id'];

?>
<?php
include 'includes/pkg_handler/pkg_handler.php';
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
  <?php echo "{$pkg_list}" ?>
</div>
</body>
</html>