<?php
include 'connect.php';
$link = Open();
$result = $link -> query('SELECT * FROM `радиодеталь`');
echo "<h1>радиодеталь</h1>";
while($row = $result -> fetch_assoc())
{
echo '<p style="font-size: 16px">Код детали='.$row['Код детали'].'. Название: '.$row['Название'].'. Обозначение: '.$row['Обозначение'].'. Тип:'.$row['Тип'].'Дата выпуска ='.$row['Дата выпуска'].'. Количество на схеме устройства: '.$row['Количество на схеме устройства'].'. Ремонтнопригодность: '.$row['Ремонтнопригодность'].'. Примечание:'.$row['Примечание'].'</p>';
}
?>