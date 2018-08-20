<?php

if (isset(($_POST['submit']))  {
	# code..
	$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['mssg'];

$mailTo = "maithri.my301@gmail.com";
$headers = "From: " .$email;
$txt = "You have recieved an email from " .$name.".\n\n".$mssg;

mail($mailTo, $txt, $headers);
header("Location: index.html");

}


































// $name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$msg = $_POST['mssg'];

// 	$subject = "New visitor";
// 	$message = "User Message: $msg.\n";

// 	$to = "m3bavd@gmail.com";
// 	$headers = "From: $email.\r\n";

// 	mail($to, $subject, $message, $headers);

// 	header("Location: index.html");

	
// if (isset($_POST['n']) && isset($_POST['e']) && isset($_POST['mssg']) ){
// 	$n = $_POST['n'];
// 	$e = $_POST['e'];
// 	$mssg = nl2br($_POST['mssg']);
// 	$to = "m3bavd@gmail.com";
// 	$from = $e;
// 	$subject = 'Contact Form Message';
// 	$message = '<b>Name:</b> '.$n. ' <br><b>Email:</b> '.$e.' <p>' .$mssg.'</p>';
// 	$headers = "From: $from\n";
// 	$headers .= "MIME-Version: 1.0\n";
// 	if( mail($to, $subject, $message, $headers) ){
// 		echo "success";
// 	} else {
// 		echo "The server failed to send the message. Please try again later.";
// 	}
// }

?>
