<?php
include('config.php');

  
	$number1 = $_POST['name2'];

  
 $query = mysql_query("SELECT * FROM user_fax_number WHERE user_id = '$number1'");
 
 if (mysql_num_rows($query)){
    echo "yes";
}
else{
echo "no";
  }
?>
