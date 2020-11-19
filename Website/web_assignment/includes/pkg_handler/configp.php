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
  
?>