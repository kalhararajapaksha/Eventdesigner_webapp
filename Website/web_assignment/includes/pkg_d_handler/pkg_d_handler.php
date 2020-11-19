<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ?>  
<?php 

         $cat1_id=$_SESSION['cat1_id'];
         $pkg1_id=$_SESSION['pkg_id'];

         $sql = "SELECT package.pkg_name, pnc_join.pkg_cont, pnc_join.pkg_id, pnc_join.pkg_price, pnc_join.cat_id
         FROM pnc_join
         INNER JOIN package ON pnc_join.pkg_id = package.pkg_id
         JOIN category ON pnc_join.cat_id = category.cat_id
         WHERE category.cat_id = {$cat1_id} && package.pkg_id={$pkg1_id} ";
         $result = $con->query($sql);
         //echo $sql;
         if($result){
         $rows = mysqli_num_rows($result);
         if($rows>0){
             
             $rec_pd = $result->fetch_assoc();
        
           }
           else{
               return 0;
           }
           $con->close();
         }
         
         else{
          echo "query faild";
             }
            
            
            
?>