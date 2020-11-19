
<?php

    $query_c="SELECT * FROM category WHERE is_published= 1";
    $result_c = mysqli_query($con,$query_c);
    if($result_c){ 
    $cat_list=""; 

    while($rec_c = $result_c->fetch_assoc()){ 
       
       $cat_list .= "<option value='{$rec_c['cat_id']}'><h3 class=\"{$rec_c['cat_name']}\">{$rec_c['cat_name']}</h3></option>";
    }
    
}
else{
   echo "query failed";
}

?>