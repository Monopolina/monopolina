<?php
function Open(){
$mysql = new mysqli('localhost', 'root', '',"Радиодетали");
if (!$mysql) {
die("Подключено успешно: " . mysqli_connect_error());
}
return $mysql;
}
?> 