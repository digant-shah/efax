<?php
include('config.php');

  $username = $_POST['username'];
  $pwd = $_POST['password'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email1'];
  $email2 = $_POST['email2'];
  $email3 = $_POST['email3'];
  $email4 = $_POST['email4'];
 
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
    $uid = $_POST['uid'];
	
	$number1 = $_POST['number'];
	  
  //$logo = $_POST['logo'];
  //$footer = $_POST['footer'];
   
  $insert = "UPDATE users SET u_name = '$fname', u_lname = '$lname', u_email='$email', u_email2='$email2', u_email3='$email3', u_email4='$email4', u_address='$address', u_city='$city', u_state='$state', u_zip = '$zip', u_country = '$country' WHERE u_id = '$uid'";
  // Do Your Insert Query
  if(mysql_query($insert)) {
  echo "Success";
 } else {
  echo "Cannot Insert";
  }
   
   mysql_query("UPDATE user_fax_number SET user_id = '$uid', fax_id = '$number1' WHERE user_id = '$uid'");
  
?>
<script type="text/javascript">
location.href="view_account.php";
</script>