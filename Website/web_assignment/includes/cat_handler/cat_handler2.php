<?php
if(isset($_POST['next'])){
   
    $cat_id=$_POST['events'];
    //echo $cat_id;
    header("Location:../../packagem.php?cat_id={$cat_id}");
   
    }
    

?>