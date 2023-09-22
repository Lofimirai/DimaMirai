<?php 
$host = "db4.myarena.ru";
$username = "u19978_b14";
$password = "eR9eA8zO2a";
$dbname = "u19978_b14";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Устанавливаем режим обработки ошибок PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Подключение успешно";
} catch(PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
$result = $connection->query('SELECT * FROM `TABLE_NAME`');
while($row = $result->fetch( PDO::FETCH_ASSOC )){
    foreach ($row as $key => $value) {
        echo "<td>".$value."</td>";
    }
}

?>
