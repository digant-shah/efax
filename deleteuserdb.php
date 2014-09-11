<?php
include('config.php');

  
	$number1 = $_POST['delete'];

  
 $query = mysql_query("DELETE FROM users WHERE u_id = '$number1'");
 
 
?>
