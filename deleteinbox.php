<?php
include('config.php');

  
	$number1 = $_POST['datetime'];

  
 $query = mysql_query("DELETE FROM incoming_fax_details WHERE from_date_time = '$number1'");
 
 
?>
