<?php
$file = 'one9/web/here/one.json';
$jsonString = file_get_contents('one9/web/here/one.json');
$data = json_decode($jsonString);
$content = json_decode($jsonString, true);

$email = $data->email;
$name = $data->name;
$senderMail = $data->sender;
$chat = $data->chat;


$sender = "From: $name <$senderMail>";

$emailku = "$email";
?>