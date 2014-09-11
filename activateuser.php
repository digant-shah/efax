<?php
include('config.php');

  $name1 = $_POST['name1'];
 
   
  $insert = "UPDATE users SET u_activate = '1' WHERE u_id = $name1";
  // Do Your Insert Query
  mysql_query($insert);
  echo "activated";
?>
