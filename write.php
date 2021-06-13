
<?php

$name = $_POST["name"]; //氏名
$age = $_POST["age"]; //氏名
$mail = $_POST["mail"]; //メールアドレス
$money = $_POST["money"] ;//金額


$file = fopen("data/data.csv","a");

fwrite($file,$name.",".$age.",".$mail.",".$money."\n");

fclose($file);

?>

