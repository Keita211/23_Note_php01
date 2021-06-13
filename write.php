
<?php

$name = $_POST["name"]; //氏名
$mail = $_POST["mail"]; //メールアドレス
$money = $_POST["money"] ;//金額

$file = fopen("data/data.txt","a");

fwrite($file,$name.$mail.$money."\n");

fclose($file);

?>

