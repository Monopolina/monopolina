<?php
include 'connect.php';
$link = Open();
$namq = $_REQUEST[`Код типа`];
$telefon = $_REQUEST['Тип'];

$mysql_insert = "INSERT INTO типы(`Код типа`,`Тип`)".
"VALUES('{$namq}','{$telefon}');";
mysqli_query($link,$mysql_insert) or die ("<p>Ошибка вставки ".mysqli_error($link));
echo 'Добавлено!';
?>
<a href="index.php">Вернуться в меню</a>