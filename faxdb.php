<?php
session_start();
include('config.php');

 echo $uid = $_SESSION["userid"];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $number= $_POST['number'];
 
  $subject = $_POST['subject'];
 $attachment = $_FILES["file"]["name"];
 $bodytext = $_POST['textbody'];
 
 
$allowedExts = array("gif", "jpeg", "jpg", "png", "doc", "odt", "pdf", "txt");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "text/plain")
|| ($_FILES["file"]["type"] == "application/msword")
|| ($_FILES["file"]["type"] == "application/vnd.oasis.opendocument.text"))
&& ($_FILES["file"]["size"] < 50000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Feilmelding: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Denne filen er lastet opp: " . $_FILES["file"]["name"] . "<br>";
    echo "Type fil:: " . $_FILES["file"]["type"] . "<br>";
    echo "Størrelse: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

    if (file_exists("uploads/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " Filen eksisterer, bytt navn. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/" . $_FILES["file"]["name"]);
      echo "Filen er lagret her: " . "uploads/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Feil Filtype";
  }

 
   
  $insert = "INSERT INTO sent_fax_details (`user_id`, `user_email`, `to_id`, `to_attachment_path`, `fax_body`) VALUES ('$uid', '$email', '$number', '$attachment', '$bodytext')";
  // Do Your Insert Query
  if(mysql_query($insert)) {
  echo "Success";
 } else {
  echo "Cannot Insert";
  }
  
  
?>
<script type="text/javascript">
location.href="outbox.php";
</script>