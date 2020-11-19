<?php include 'database/config.php';  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
  }
  $cat1_id_img=$_SESSION['cat_idep'];
  $pkg1_id_img=$_SESSION['pkg_idep'];

	
    ?>  


<div class="insert_data" >

	<form class="img_upload" method="post" action="admin_view3.php?cat_idep=<?php echo $cat1_id_img; ?>&pkg_idep=<?php echo $pkg1_id_img; ?>" enctype="multipart/form-data" >
		<input type="file" name="img" value="ADD Image" ></input>
		<button type="submit" name="upload">upload img</button>
	</form>
	
</div>

<?php 

$sql_img="SELECT img_id FROM images WHERE cat_id={$cat1_id_img} && pkg_id={$pkg1_id_img} && is_deleted=0";
$result_img = $con->query($sql_img);
if($result_img->num_rows < 5){


  if(isset($_POST['upload'])){
    
    $target_path="include/image/";
    $target_path=$target_path.basename($_FILES['img']['name']);
    if(move_uploaded_file($_FILES['img']['tmp_name'],$target_path)){
      
         $sql_up = "INSERT INTO images (cat_id,pkg_id,img_path,is_deleted) values($cat1_id_img,$pkg1_id_img,'$target_path',0)";
         // echo $query;
          $result_up = mysqli_query($con,$sql_up);
          if($result_up){
          echo "1 img added";
       //   header("location:../admin_view3.php?cat_idep={$cat1_id_img}&pkg_idep={$pkg1_id_img}");
        echo "<meta http-equiv='refresh' content='0'>";
         }else{
           echo "failed database";
      }
    }
    
     }   



}
else{
	echo "can't added";
}

 ?>