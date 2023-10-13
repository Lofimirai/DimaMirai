<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pr8</title>
</head>
<body>

    <?php 
        $host       = "db4.myarena.ru";      
        $dbname     = "u19978_b14";   
        $user       = "u19978_b14";          
        $password   = "eR9eA8zO2a";   
                   
        $connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);

        $link = '<a href = "./index.php">На главную</a>';

        if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

            if(empty($_POST['login'])) 
            exit('Не все поля формы заполнены'.'<br>'.$link);

            if(empty($_POST['password'])) 
            exit('Не все поля формы заполнены'.'<br>'.$link);
        }
        
        $userLogin= $_POST['login'];
    
        $stmt = $connection->prepare("SELECT * FROM `user` WHERE `login` = ? or `Email` = ?");

        $stmt->execute([$userLogin, $userLogin]);

        $row = $stmt->fetch();

        if (!$stmt->rowCount()) {
            exit('Пользователь с такими данными не зарегистрирован'.'<br>'.$link);
            die;
        }

        if ($row && password_verify($_POST['password'],$row ["password"])) 
        exit ( "Успешно вошол".$link .'<br>');
        
        else{
                echo "не правильный логин или пароль";
        }
    ?>
</body>
</html>