<?php
include('config.php');
require_once 'swiftmail/lib/swift_required.php';

$mail = "digant.samcomtech@gmail.com";

$sql = "SELECT * FROM users WHERE u_email = '$mail'";
$query = mysql_query($sql);
while($row = mysql_fetch_array($query))
	{
		$password = $row['u_password'];
		
		$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
		->setUsername('digant.samcomtech@gmail.com')
		->setPassword('Digant1722_');
		
		$mailer = Swift_Mailer::newInstance($transport);
		
		$message = Swift_Message::newInstance('Password')
		->setFrom(array('digant.samcomtech@gmail.com' => 'Digant'))
		->setTo(array($mail))
		->setBody('Your Password is: '.$password);
		
		$result = $mailer->send($message);
	}
?>
