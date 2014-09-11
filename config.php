<?php

$con = mysql_connect('localhost','root','');
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}
mysql_select_db("efax");

 
 
 
?>
