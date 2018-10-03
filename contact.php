
<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mssg = $_POST['mssg'];

	$email_from = 'maithribavd@gmail.com';
	$email_subject ="New form submission";
	$email_body ="User Name: $name.\n".
					"User Email: $email.\n".
					"User Message:$mssg.\n";

	$to = "maithri.my301@gmail.com";

	$headers = "From: $email_from \r\n";
	$headers.= "Reply-To :$email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");


echo "Thank You! $name We will get back to you soon!"

?>
