
<?php

$mailto = "maithri.my301@gmail.com";
$page = "index.html";

$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["mssg"];

$name = htmlentities($name,ENT_QUOTES, "UTF-8");
$email = htmlentities($email,ENT_QUOTES, "UTF-8");
$msg = htmlentities($msg,ENT_QUOTES, "UTF-8");

$name = str_replace("\r\n",'"', $name);
$email = str_replace("\r\n",'"', $email);
$msg = str_replace("\r\n",'\t', $msg);
$msg = str_replace("\r",'\t', $msg);
$msg = str_replace("\n",'\t', $msg);

echo "Thank You! $name We will get back to you soon!"

?>
