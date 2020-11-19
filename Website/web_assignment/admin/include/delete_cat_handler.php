<?php include 'database/config.php';  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ?>  
<?php


if(isset($_POST['delete1'])){


$cat_id=$_SESSION['cat_id'];
//echo $cat_id;


    
    $sql2 ="UPDATE category SET is_deleted =1 WHERE cat_id={$cat_id} LIMIT 1 "  ;
    $result2 = $con->query($sql2);
    //echo $sql2;
    if($result){
        header('Location:add_new_cat.php?msg=user_deleted');
    }
    
}
    





?>