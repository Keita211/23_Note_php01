<?php

$file = fopen("data/data.csv","r");

$csv_file = file_get_contents('data/data.csv');// csvファイルに変換
$csv_array = explode("\n", $csv_file); // 一行毎に配列化
// var_dump($csv_array);
 
$array_data = [];

foreach($csv_array as $key => $value){
    if(!$value)continue;
    $array_data[] = explode(",", $value);
};

// var_dump($array_data);

fclose($file_read);

?>


<html>
<head>
	<meta charset="utf-8">
	<title>表出力</title>
</head>
<body>

<table>

<tr>
    <th>名前</th>
    <th>年齢</th>
    <th>メール</th>
    <th>金額</th>
</tr>

<?php
foreach($array_data as $value){?>
<tr>
 <td><?php echo $value[0]?></td>
 <td><?php echo $value[1]?></td>
 <td><?php echo $value[2]?></td>
 <td><?php echo $value[3]?></td>
</tr> 

<?php }?>

</table>


</body>