<?php
include('config.php');

  
   $id = $_POST["uid"];
	
	$old_pwd = $_POST['oldpwd'];
	  
  $new_pwd = $_POST['newpwd'];
 
		  $query = mysql_query("SELECT * FROM users WHERE u_id = '$id'");
		  while($row = mysql_fetch_array($query))
		  {
			$pass =  $row['u_password'];
		  }
				if($old_pwd == $pass)
					{
		  			mysql_query("UPDATE users SET u_password = '$new_pwd' WHERE u_id = '$id'");
					echo "success";
		  			}
		 		 else
		 		 {
		 		 echo "Old Password Not Match";
		 		 }
	
  
?>
