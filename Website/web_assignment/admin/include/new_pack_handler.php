<?php include 'database/config.php';  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ?>  
<?php




if(isset($_POST['publish'])){
    $cat_idnp=$_SESSION['cat_idep'];
    $pkg_idnp=$_SESSION['pkg_idep'];

$cont=mysqli_real_escape_string($con,$_POST['Description']);
$inc=mysqli_real_escape_string($con,$_POST['Pkgincludes']);

$sql = "INSERT INTO pnc_join(cat_id,pkg_id,pkg_cont,pkg_inc,is_deleted) VALUES ($cat_idnp,$pkg_idnp,'$cont','$inc',0)";
echo $sql ;
$result = $con->query($sql);
if($result){
    echo "sucsesfull";
    header("Location:../admin_view2.php?cat_id={$cat_idnp}");
}
else{
    echo "failed";
}



}
else{
    
}


?>