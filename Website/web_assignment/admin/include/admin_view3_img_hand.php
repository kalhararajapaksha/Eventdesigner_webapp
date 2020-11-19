<?php include 'database/config.php';  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ?> 
<?php 


 $cat1_idi=$_SESSION['cat_idep'];
 $pkg1_idi=$_SESSION['pkg_idep'];

 //echo $cat1_idi;
 //echo "<br>";
 //echo $pkg1_idi;
$sql2="SELECT img_id FROM images WHERE cat_id={$cat1_idi} && pkg_id={$pkg1_idi} && is_deleted=0 ORDER BY img_id LIMIT 1";
$result2 = $con->query($sql2);
if($result2->num_rows > 0){

while($rec_ac = $result2->fetch_assoc()){
  $active_id = $rec_ac['img_id'] ;

}


$sql1="SELECT img_id,img_path FROM images WHERE cat_id={$cat1_idi} && pkg_id={$pkg1_idi} && is_deleted=0 ";
$result1 = $con->query($sql1);
      // echo $sql1;     
            if($result1){
               // echo "$active_id"; 
            $img_listi="";
            while($rec_i = $result1->fetch_assoc()){
                //$img_list =" \"{$rec_i['img_path']}\" "; 
                //print_r ($rec_i) ;
                //echo "$active_id";
              if($rec_i['img_id']==$active_id)  {      
              //  $img_list .="<div class='carousel-item active'><img class='d-block w-100' src=\"admin/{$rec_i['img_path']}\" ><div class='carousel-caption'><h3 class='h3-responsive'>Designg your day</h3></div></div>" ;
                  $img_listi .= "   <div class='carousel-item active'>
                                <img class='d-block w-100 h-50' src=\"{$rec_i['img_path']}\"  alt='Decorations'>
                                <div class='carousel-caption'>
                                <button class='dltimg color' onclick='location.reload()'><i class='fa fa-trash-o'></i><a href='include/delete_img_handler.php?cat_idd=$cat1_idi&pkg_idd=$pkg1_idi&img_idd={$rec_i['img_id']}'>Delete</a></button>
                                <h3 class='h3-responsive'>Designg your day</h3>
                                </div>
                               </div>"; 
                                    }
                  else{
                   // $img_list .="<div class='carousel-item '><img class='d-block w-100' src=\"admin/{$rec_i['img_path']}\" ><div class='carousel-caption'><h3 class='h3-responsive'>Designg your day</h3></div></div>" ; 
                   $img_listi .= "   <div class='carousel-item '>
                                     <img class='d-block w-100 ' src=\"{$rec_i['img_path']}\"  alt='Decorations'>
                                     <div class='carousel-caption'>
                                     <button class='dltimg color'><i class='fa fa-trash-o'></i><a href='include/delete_img_handler.php?cat_idd=$cat1_idi&pkg_idd=$pkg1_idi&img_idd={$rec_i['img_id']}'>Delete</a></button>
                                     <h3 class='h3-responsive'>Designg your day</h3>
                                     </div>
                                     </div> ";            
                  }
                } 
            }
            else{
              return 0;
               echo "query failed";
            } 
          }
          else{

         $img_listi = " <div class='carousel-item active'>
         <img class='d-block w-100' src='g.jpg'  alt='Decorations'>
         <div class='carousel-caption'>
         <button class='dltimg color'><i class='fa fa-trash-o'></i>Delete</button>
         <h3 class='h3-responsive'>Designg your day</h3>
         </div>
         </div>";
          
        }
           // echo "<pre>";  
            //echo "$img_list";
            //echo "<br>";
            //echo "<pre>";  

?>