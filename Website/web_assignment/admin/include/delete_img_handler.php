<?php include 'database/config.php';  ?>
<?php 


$cat_idd=$_GET['cat_idd'];
$pkg_idd=$_GET['pkg_idd'];
$img_idd=$_GET['img_idd'];

$sql_de="UPDATE images SET is_deleted=1 WHERE cat_id={$cat_idd} && pkg_id={$pkg_idd} && img_id={$img_idd}";
$result_de=$con->query($sql_de);
if($result_de){
    echo "deleted";
   // echo "<meta http-equiv='refresh' content='0'>";
   // header("location:javascript://history.go(-1)");
    header("location:../admin_view3.php?cat_idep={$cat_idd}&pkg_idep={$pkg_idd}");
}
else{
    echo "failed";
}

?>