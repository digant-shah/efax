<?php
include('config.php');

  $name1 = $_POST['fullname'];
  $email = $_POST['email'];
  //$address = $_POST['address'];
  //$phn = $_POST['phone'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $username = $_POST['username'];
  $pwd = $_POST['password'];
  //$logo = $_POST['logo'];
  //$footer = $_POST['footer'];
   
  $insert = "INSERT INTO users (`username`, `u_password`, `u_name`, `u_email`, `u_phn`, `u_address`, `u_city`, `u_state`, `u_zip`, `u_country`, `u_activate`) VALUES ('$username', '$pwd', '$name1', '$email', '', '', '$city', '$state', '', '$country', '0');";
  // Do Your Insert Query
  if(mysql_query($insert)) {
  echo "Success";
  } else {
  echo "Cannot Insert";
  }
?>
<script type="text/javascript">
location.href="index.php";
</script>