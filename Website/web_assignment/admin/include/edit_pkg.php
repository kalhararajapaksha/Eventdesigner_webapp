<?php include 'database/config.php';  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
  }
  $cat_ide=$_SESSION['cat_idep'];
  $pkg_ide=$_SESSION['pkg_idep'];

	
    ?>  
<?php


if(isset($_POST['update'])){

$cont=mysqli_real_escape_string($con,$_POST['Description']);
$inc=mysqli_real_escape_string($con,$_POST['Pkgincludes']);

$sql = "UPDATE pnc_join SET pkg_inc='$inc' pkg_cont='$cont'  WHERE cat_id={$cat_ide} && pkg_id={$pkg_ide}";
$result = $con->query($sql);
if($result){
    echo "sucsesfull";
}
else{
    echo "failed";
}



}
else{
    header('Location: dashboard.php?invalidreq');
}


?>