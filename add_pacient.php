<?php
include 'connect.php';
$link = Open();
$name = $_REQUEST['Код_детали'];
$last_name = $_REQUEST['Название'];
$adress = $_REQUEST['Обозначение'];
$telefon = $_REQUEST['Тип'];
$date = $_REQUEST['Дата_выпуска'];
$qwqw = $_REQUEST['Количество_на_схеме_устройства'];
$wqwq = $_REQUEST['Ремонтнопригодность'];
$wewe = $_REQUEST['Примечание'];

$mysql_insert = "INSERT INTO радиодеталь(`Код детали`,`Название`,`Обозначение`,`Тип`,`Дата выпуска`,`Количество на схеме устройства`,`Ремонтнопригодность`,`Примечание`)".
"VALUES('{$name}','{$last_name}','{$adress}','{$telefon}','{$date}','{$qwqw}','{$wqwq}','{$wewe}');";
mysqli_query($link, $mysql_insert) or die ("<p>Ошибка вставки ".mysqli_error($link));
echo 'Добавлено!';
?>
<a href="index.php">Вернуться в меню</a>