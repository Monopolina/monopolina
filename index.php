<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Главная</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>БД Радиодетали</h1>

<form>
<?php
include 'connect.php';
$link = Open();
$result = $link -> query('SELECT * FROM `радиодеталь`');
echo "<h2>Радиодеталь</h2>";
while($row = $result -> fetch_assoc())
{
echo '<p style="font-size: 16px">Код детали = '.$row['Код детали'].'. Название: '.$row['Название'].'. Обозначение: '.$row['Обозначение'].'. Тип: '.$row['Тип'].'. Дата выпуска: '.$row['Дата выпуска'].'. Количество на схеме устройства: '.$row['Количество на схеме устройства'].'. Ремонтнопригодность: '.$row['Ремонтнопригодность'].'. Примечание: '.$row['Примечание'].'</p>';}
?>
</form>

<form id="радиодеталь" action="add_pacient.php" method="post">
<h2>Радиодеталь</h2>
<label for="Код детали"><b>Код детали:</b></label><br>
<input type="int" size="30" name="Код_детали"><br>
<label for="Название"><b>Название:</b></label><br>
<input type="text" size="30" name="Название"><br>
<label for="Обозначение"><b>Обозначение:</b></label><br>
<input type="text" size="30" name="Обозначение"><br>
<label for="Тип "><b>Тип:</b></label><br>
<input type="int" size="30" name="Тип"><br>
<label for="Дата выпуска"><b>Дата выпуска:</b></label><br>
<input type="date" name="Дата_выпуска" value="2014-03-03 12:00:00" size="20"><br>
<label for="Количество на схеме устройства"><b>Количество_на_схеме_устройства:</b></label><br>
<input type="int" size="30" name="Количество на схеме устройства"><br>
<label for="Ремонтнопригодность"><b>Ремонтнопригодность:</b></label><br>
<input type="text" size="30" name="Ремонтнопригодность"><br>
<label for="Примечание"><b>Примечание:</b></label><br>
<textarea cols="25" rows="5" name="Примечание"></textarea><br>
<input type="submit" value="Внести в БД" name="addNew">
<input type="submit" value="Удалить" name="Delete">
</form>

<form id="типыы" action="addd_pacient.php" method="post">
<h2>Тип</h2>
<label for="Код типа"><b>Код типа:</b></label><br>
<input type="int" size="30" name="Код_типа"><br>
<label for="Тип"><b>Тип:</b></label><br>
<input type="text" size="30" name="Тип"><br>
<input type="submit" value="Внести в БД" name="addNew">
<input type="submit" value="Удалить" name="Delete">
</form>

<form>
<?php
$result = $link -> query('SELECT * FROM `типыы`');
echo "<h2>Типы деталей</h2>";
while($roww = $result -> fetch_assoc())
{
echo '<p style="font-size: 16px">Код типа = '.$roww["Код типа"].'. Тип: '.$roww['Тип'].'</p>';}
?>
</form>

</body>
</html>