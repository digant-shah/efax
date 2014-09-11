<?php

include('config.php');

  $name1 = $_POST['username'];
  $password = $_POST['password'];
  
 if($name1 == 'admin' && $password == 'admin')
 { 
 echo '<script type="text/javascript">';
echo 'location.href="admin.php"';
echo '</script>';
 }
  
 
  //File Upload Script.
else		
  
 { 
 
 $sql_select = mysql_query("SELECT * from users WHERE username = '$name1' AND u_password = '$password' limit 1");
 if (mysql_num_rows($sql_select) == 0){
 		
 echo '<script type="text/javascript">';
 echo 'alert("username password incorret");';
echo 'location.href="index.php"';
echo '</script>';
 }
 
 else
 {
while($row = mysql_fetch_array($sql_select))
			 {
			 $id = $row['u_id'];
			 $name = $row['u_name'];
			 $status = $row['u_activate'];
 			}
			 session_start();
// store session data
$_SESSION["userid"] = $id;
 //echo $_SESSION['userid'];
 
 $_SESSION['name']=$name;
 if($status == 0)
 {
			 echo '<script type="text/javascript">';
echo 'location.href="pending.php"';
echo '</script>';
 }
 else
 {
 echo '<script type="text/javascript">';
echo 'location.href="dashboard.php"';
echo '</script>';
 
 }
 
 }

 }
 ?>