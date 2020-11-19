<?php include 'database/config.php';  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ?>  

<?php

$cat_id=$_SESSION['cat_id'];


$sql = "SELECT package.pkg_name, pnc_join.cat_id, pnc_join.pkg_id,category.cat_name
FROM pnc_join
INNER JOIN package ON pnc_join.pkg_id = package.pkg_id
JOIN category ON pnc_join.cat_id = category.cat_id
WHERE category.cat_id = {$cat_id} && pnc_join.is_deleted = 0 ";
$result = $con->query($sql);

if($result){




$package="";
$package_id="";
while($rec_p = $result->fetch_assoc()){
    $sql2="SELECT img_id,img_path FROM images WHERE cat_id={$cat_id} && pkg_id={$rec_p['pkg_id']} && is_deleted=0 LIMIT 1";
   // echo $sql2;
    $result_cb= $con->query($sql2);
    
   while($rec_ac = $result_cb->fetch_assoc()){
       $img_path=$rec_ac['img_path'];
      // echo $img_path;

}



    $package .= "<div class='flipping-card-item-wrapper'>
    <div class='flipping-card-item-side flipping-card-item-side-front'>
        <img src='$img_path' alt='' class='flipping-card-item-img'>
    </div>
    <div class='flipping-card-item-side flipping-card-item-side-back'>
        <div class='flipping-card-back-wrapper'>
            <h2>{$rec_p['pkg_name']}<br>package</h2><br>
            <a href='admin_view3.php?cat_idep={$cat_id}&pkg_idep={$rec_p['pkg_id']}' class='btn btn-primary'>EDIT</a><br><br>
            <a href='include/delete_pkg.php?cat_iddp={$cat_id}&pkg_iddp={$rec_p['pkg_id']}' class='btn btn-danger' onclick=\"return confirm('are you sure'); \"><i style='font-size:26px;color:white' class='material-icons'>delete</i></a>
        </div>
    </div>
</div>"; 
       $package_id .=  "{$rec_p['pkg_id']}," ;
}

//echo $package_id;
$sql1="SELECT pkg_id,pkg_name
FROM package
WHERE  pkg_id NOT IN ($package_id 0)";
$result1 = $con->query($sql1);
//echo $sql1;
$package1="";
if($result1){
while($rec_p1 = $result1->fetch_assoc()){
   
      $package1 .= "<div class='flipping-card-item-wrapper'>
       <div class='flipping-card-item-side flipping-card-item-side-front'>
           <img src='image/5.jpg' alt='' class='flipping-card-item-img'>
       </div>
       <div class='flipping-card-item-side flipping-card-item-side-back'>
           <div class='flipping-card-back-wrapper'>
               <h2>{$rec_p1['pkg_name']}<br>package</h2><br>
               <a href='add_new_pack.php?cat_idep={$cat_id}&pkg_idep={$rec_p1['pkg_id']}' class='btn btn-primary'>ADD</a><br><br>
               <!--<button type='button' class='btn btn-danger'><i style='font-size:26px;color:white' class='material-icons'>delete</i></button>-->
               <h4>Not published</h4>
           </div>
       </div>
   </div>";
       
}

}
}





?>