<?php
include('config.php');

  $username = $_POST['username'];
  $pwd = $_POST['password'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $gender= $_POST['gender'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
    
	
	$number1 = $_POST['number'];
	  
  //$logo = $_POST['logo'];
  //$footer = $_POST['footer'];
   
  $insert = "INSERT INTO users (`username`, `u_password`, `u_name`, `u_email`, `u_phn`, `u_address`, `u_city`, `u_state`, `u_zip`, `u_country`, `u_activate`) VALUES ('$username', '$pwd', '$fname', '$email', '', '$address', '$city', '$state', '$zip', '$country', '1')";
  // Do Your Insert Query
  if(mysql_query($insert)) {
  echo "Success";
 } else {
  echo "Cannot Insert";
  }
   $sql1 = "SELECT * FROM users ORDER BY u_id DESC LIMIT 1";
  $query1 = mysql_query($sql1);
  while($row = mysql_fetch_array($query1))
  {
  $id = $row['u_id'];
  
  }
   mysql_query("INSERT INTO user_fax_number (user_id,fax_id) VALUES ($id,$number1)");
  
?>
<script type="text/javascript">
location.href="view_allaccount.php";
</script>