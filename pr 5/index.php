<?php 
$host = "db4.myarena.ru";
$dbname = "u19978_b14";
$username = "u19978_b14";
$password = "eR9eA8zO2a";

try 
{   
    $connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
}   
catch (PDOException $e) 
{   
    die("Ошибка подключения: " . $e->getMessage());
    }

    $result = $connection->query('SELECT * FROM  `product` WHERE 1');

    if ($result)
    {
    if ($result->rowCount() == 0) {
        echo "Запрос не вернул результатов.";
    } 
    else 
    {
        echo "<table border='1'>";
        // Вывод заголовков таблицы
        echo "<tr>";
        for ($i = 0; $i < $result->columnCount(); $i++) 
        {
            $column = $result->getColumnMeta($i);
            echo "<th>{$column['name']}</th>";
        }
        echo "</tr>";
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) 
        {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        }}
        else {
            echo "Запросвыполнен с ошибкой ";
        }
?>