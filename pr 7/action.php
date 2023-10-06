<?php 
  $host = "db4.myarena.ru";
  $dbname = "u19978_b14";
  $username = "u19978_b14";
  $password = "eR9eA8zO2a";
  
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) 
                exit;

        if(empty($_POST['name']))
                exit('Поле "логин" не заполнено');

        if(empty($_POST['password'])) 
                exit('Поле "пароль" не заполнено');

        if(empty($_POST['passwordtry'])) 
                exit('Поле "Подверждение пароля" не заполнено');

        if($_POST['password'] !== $_POST['passwordtry']) 
                exit('пароли не совпадают' );

        if (strlen($_POST['password']) < 9) {
            
                exit('Пароль должен быть минимум 8 символов');
        }

        if (strlen($_POST['name']) < 9) {
           
                exit('Логин должен быть минимум 8 символов ');
        }
        
        if(empty($_POST['mail'])) 
                exit('Поле "почта" не заполнено');

        echo 'Здравствуйте, '.htmlspecialchars($_POST['name']).'. <br>';
        echo 'Ваш аккаунт создан'.'. <br>';

?>
