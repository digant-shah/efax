<?php
include('config.php');

$country = $_POST['name1'];
  
$select = "SELECT * FROM fax_number WHERE fax_country='$country' GROUP BY fax_city";
  
$query =  mysql_query($select);
echo "<option value='' ></option>";
while($row = mysql_fetch_array($query))
{

//echo $row['fax_city'];
echo "<option value='".$row['fax_city']."' >".$row['fax_city']."</option>";
}

?>
