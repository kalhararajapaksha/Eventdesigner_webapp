
<?php

// Create connection
$con = mysqli_connect("localhost", "root", "", "event_planer");

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
   // echo "we are connected";
}

if(isset($_POST['add_cat'])){

    $cat_name=$_POST['cat_name'];
    
    if(!empty($cat_name)){
        
        $sql2= "INSERT INTO category( cat_name, is_published, is_deleted) VALUES ('$cat_name',1,0) ";
        echo $sql2;
        $result2 = $con->query($sql2);
        if($result2){
            //echo "sucssefull";
            
       }
        else{
           echo "Query Failed";
        }

         $sql3= "SELECT `cat_id` FROM `category` ORDER BY cat_id DESC LIMIT 1 ";
         echo $sql3;
         $result3 = $con->query($sql3);
         if($result3){
         $cat_id3="";
         while( $rec_cat = $result3->fetch_assoc()){
            $cat_id3="{$rec_cat['cat_id']}";
            
         }
         echo $cat_id3;
          //  header('Location:admin_view2.php?cat_id=.$cat_id3.');
         //$print_r header('Location:admin_view2.php?cat_id=$cat_id3') ;
         header('Location:admin_view2.php?cat_id='.$cat_id3.'');
       //  include 'admin_view2.php?cat_id=.$cat_id3.';
        }

       
        
    }
    
}

?>