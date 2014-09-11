<?php
include('config.php');

  session_start();
   $id = $_SESSION["userid"];
	
	$number1 = $_POST['number'];
	  
  //$logo = $_POST['logo'];
  //$footer = $_POST['footer'];
   
  
  mysql_query("INSERT INTO user_fax_number (user_id,fax_id) VALUES ($id,$number1)");
  mysql_query("UPDATE fax_number SET fax_number_status = 1 WHERE fax_id = '$number1'");
  
?>
<script type="text/javascript">
location.href="view_account.php";
</script>