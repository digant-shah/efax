<?php
include('config.php');

  //$name1 = $_POST['fullname'];
  //$email = $_POST['email'];
  //$address = $_POST['address'];
  //$phn = $_POST['phone'];
  $city = $_POST['city'];
  //$state = $_POST['state'];
  $country = $_POST['country'];
  $code = $_POST['code'];
  $phn_num = $_POST['phn_num'];
  //$pwd = $_POST['password'];
  //$logo = $_POST['logo'];
  //$footer = $_POST['footer'];
   
  $insert = "INSERT INTO `efax`.`fax_number` (`fax_city`, `fax_state`, `fax_country`, `fax_code`, `fax_number`) VALUES ('$city', '', '$country', '$code', '$phn_num');";
  // Do Your Insert Query
  if(mysql_query($insert)) {
  echo "Success";
  } else {
  echo "Cannot Insert";
  }
?>
<script type="text/javascript">
location.href="view_number.php";
</script>