<?php

if (isset($_POST['submit']) ) {
	# code..
	$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['mssg'];

$mailTo = "maithri.my301@gmail.com";
$headers = "From: " .$email;
$txt = "You have recieved an email from " .$name.".\n\n".$mssg;

mail($mailTo, $txt, $headers);
header("Location: index.php");

}




?>
