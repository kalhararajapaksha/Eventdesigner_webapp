<?php include 'database/config.php';  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ?>  

<?php
 
 $cat1_id=$_SESSION['cat1_id'];
 $pkg1_id=$_SESSION['pkg_id'];

         $sql = "SELECT pkg_cont,pkg_price FROM pkg_name where cat_id={$cat1_id} && pkg_id={$pkg1_id} ";
         $result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "" .$row["description"]. "</br>";
  }
  echo "</p>";
} else {
  echo "0 results";
}
$con->close();
?>