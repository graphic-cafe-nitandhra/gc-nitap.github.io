<?php

if($_POST["submit"])
{
	$recipient="crazycorp007@gmail.com";
		$subject="Form to email message";
		
$sender=$_POST["name"];

$year=$_POST["yr"];

$branch=$_POST["br"];

$mail=$_POST["mail"];

$message=$_POST["message"];

$mailBody="Name:$sender
\nYear:$year
\nbranch=$branch
\nEmail:$mail
\n\n$message";
mail($recipient,$subject,$mailBody,"From: $sender<$mail>");

$thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>