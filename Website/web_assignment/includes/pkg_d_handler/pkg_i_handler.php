
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ?> 
<?php 
// Create connection
$con = mysqli_connect("localhost", "root", "", "event_planer");

// Check connection
if (!$con) {
  //die("Connection failed: " . mysqli_connect_error());
}
else{
    //echo "we are connected";
}

 $cat1_id=$_SESSION['cat1_id'];
 $pkg1_id=$_SESSION['pkg_id'];

 //echo $cat1_id;
 //echo $pkg1_id;
$sql2="SELECT img_id FROM images WHERE cat_id={$cat1_id} && pkg_id={$pkg1_id} LIMIT 1";
echo $sql2;
$result2 = $con->query($sql2);
if($result2){

while($rec_ac = $result2->fetch_assoc()){
  $active_id = $rec_ac['img_id'] ;
  
}
}

$sql1="SELECT img_id,img_path FROM images WHERE cat_id={$cat1_id} && pkg_id={$pkg1_id} && is_deleted=0";
$result1 = $con->query($sql1);
      // echo $sql1;     
            if($result1){
               // echo "$active_id"; 
            $img_list="";
            while($rec_i = $result1->fetch_assoc()){
                //$img_list =" \"{$rec_i['img_path']}\" "; 
                //print_r ($rec_i) ;
                //echo "$active_id";
              if($rec_i['img_id']==$active_id) {      
                $img_list .="<div class='carousel-item active'><img class='d-block w-100' src=\"admin/{$rec_i['img_path']}\" ><div class='carousel-caption'><h3 class='h3-responsive'>Designg your day</h3></div></div>" ;
              }
              else{
                $img_list .="<div class='carousel-item'><img class='d-block w-100' src=\"admin/{$rec_i['img_path']}\" ><div class='carousel-caption'><h3 class='h3-responsive'>Designg your day</h3></div></div>" ; 
              }
                } 
            }
            else{
               echo "query failed";
            } 
           // echo "<pre>";  
           // echo "$img_list";
            //echo "<br>";
            //echo "<pre>";  

?>