<?php
include('config.php');

$state = $_POST['name2'];
  
$select1 = "SELECT * FROM fax_number WHERE fax_city = '$state' AND fax_number_status = 0";
  
$query1 =  mysql_query($select1);
echo "<option value='' ></option>";
while($row1 = mysql_fetch_array($query1))
{


echo "<option value='".$row1['fax_id']."' >".$row1['fax_code']." ".$row1['fax_number']."</option>";
}
?>
 



