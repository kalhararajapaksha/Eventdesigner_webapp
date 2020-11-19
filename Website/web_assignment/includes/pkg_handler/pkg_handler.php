<?php
include 'configp.php';
?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ?>   
<?php    
     if (isset($_GET['cat_id'])){
     $cat_id=$_SESSION['cat_id'];
    

    $sql2="SELECT cat_name FROM category WHERE cat_id={$cat_id} ";
    $result2 = $con->query($sql2);
    if($result2){
       $rec_cname= $result2->fetch_assoc();
    
    }
  
     $sql = "SELECT package.pkg_name, pnc_join.cat_id, pnc_join.pkg_id,category.cat_name
        FROM pnc_join
        INNER JOIN package ON pnc_join.pkg_id = package.pkg_id
        JOIN category ON pnc_join.cat_id = category.cat_id
        WHERE category.cat_id = {$cat_id} && pnc_join.is_deleted=0";
        $result = $con->query($sql);
        //echo $sql;
        if($result){
           
        $rows = mysqli_num_rows($result);
        if($rows>0){
            $pkg_list="";
            
            while($rec_p = $result->fetch_assoc()){
            //$pkg_list .= "<a href='packageb.php?cat_id={$rec_p['cat_id']}&pkg_id={$rec_p['pkg_id']}'><p class=\"{$rec_p['pkg_name']}\">{$rec_p['pkg_name']}</p></a>"; 
            $pkg_list .= " <div class='flipping-card-item-wrapper'><div class='flipping-card-item-side flipping-card-item-side-front'>
            <img src='image/5.jpg' alt='' class='flipping-card-item-img'>
           </div>
           <div class='flipping-card-item-side flipping-card-item-side-back'>
               <div class='flipping-card-back-wrapper'>
                   <h2>{$rec_p['pkg_name']}<br>package</h2>
                   <a href='packageb.php?cat_id={$rec_p['cat_id']}&pkg_id={$rec_p['pkg_id']}' class='flipping-card-back-wrapper__btn'>click</a>
               </div>
           </div>
       </div>";     
        
        
        }
  
          }
          else{
              return 0;
          }
        }
        else{
         echo "query faild";
            }
  
        }
        
    
?>