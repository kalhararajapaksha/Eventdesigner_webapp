<?php include 'database/config.php';  ?>
<?php


$cat_iddp=$_GET['cat_iddp'];
$pkg_iddp=$_GET['pkg_iddp'];

$sql_dp="UPDATE pnc_join SET is_deleted=1 WHERE cat_id={$cat_iddp} && pkg_id={$pkg_iddp} ";
$result_dp=$con->query($sql_dp);
if($result_dp){
    echo "deleted";
   // echo "<meta http-equiv='refresh' content='0'>";
   // header("location:javascript://history.go(-1)");
    header("location:../admin_view2.php?cat_id={$cat_iddp}");
}
else{
    echo "failed";
}



?>