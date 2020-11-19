<?php

include 'database/config.php';
include 'includes/cat_handler/cat_handler.php';
?>

  
<!DOCTYPE html>
<html>
<head>
<style>
.Wedding{
    color: red;
}
.Birth_Day_Party{
    color: green;
}

</style>
	<title></title>
</head>
<body>
<div>
  <?php echo $cat_list; ?>
</div>
</body>
</html>