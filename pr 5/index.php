<?php 
$host       = "db4.myarena.ru";      // Адрес сервера базы данных
$dbname     = "b17_typical";    // Имя базы данных
$user       = "u19978_b14";           // Имя пользователя
$password   = "eR9eA8zO2a";               // Пароль
$connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);

// Вставим информацию о нескольких странах
// Россия    - Москва
// Украина   - Киев
// Беларусь  - Минск
// Казахстан - Астана

$affectedRows = $connection->exec('INSERT INTO `countries` VALUES ("Россия", "Москва"),("Украина",  "Киев"),("Беларусь", "Минск"),("Казахстан","Астана")');
if( $affectedRows === false ){ echo "При выполнении запроса произошла ошибка"; }
else { echo "В таблицу `countries` добавлено ".$affectedRows." записей"; }


?>