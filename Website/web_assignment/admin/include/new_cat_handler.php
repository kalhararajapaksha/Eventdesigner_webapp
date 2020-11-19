<?php include 'database/config.php';  ?>
<?php


$sql1="SELECT pkg_id,pkg_name
FROM package";
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
           <!-- <a href='add_new_pack.php?pkg_id={$rec_p1['pkg_id']}' class='btn btn-primary'>ADD</a><br><br>-->
            <!--<button type='button' class='btn btn-danger'><i style='font-size:26px;color:white' class='material-icons' onclick='return confirm('are you sure?');'>delete</i></button>-->
            <h4>Not published</h4>
        </div>
    </div>
</div>"; }
}



?>