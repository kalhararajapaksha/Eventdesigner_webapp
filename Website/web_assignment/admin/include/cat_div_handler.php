<?php include 'database/config.php';  ?>

<div id="sidebar" class="col-sm-2">
        <ul class="list-items">
		     
			 <?php



    $query_c="SELECT * FROM category WHERE is_deleted=0 ";
    $result_c = mysqli_query($con,$query_c);
    if($result_c){ 
    $cat_list=""; 
    while($rec_c = $result_c->fetch_assoc()){ 
     //  $cat_list .="<a href='admin_view2.php?cat_id={$rec_c['cat_id']}'><p class=\"{$rec_c['cat_name']}\">{$rec_c['cat_name']}</p></a>"; 
      $cat_list .="<li class='nav-item' ><a class='nav-link active show'  href='admin_view2.php?cat_id={$rec_c['cat_id']}'>{$rec_c['cat_name']}</a><form action='admin_view2.php?cat_id={$rec_c['cat_id']}' method='post'><button class='btn  btn-sm rounded-0 ' type='submit' data-toggle='tooltip'  data-placement='top' title='Delete' name='delete1' onclick=\"return confirm('are you sure'); \"><i  class='fa fa-trash btn_delete'></i></button></form></li>";
    }
    echo $cat_list;
}


?>
  <li class="nav-item plus_li" data-toggle="tooltip" title="Click here to add new Category"><a href="add_new_cat.php" class="nav-link plus_a" data-toggle="tooltip" title="Click here to add new Category"></a><i id="btn1" class="fa fa-plus-circle btn_plus"></i></li>
  </ul>    
  </div>
