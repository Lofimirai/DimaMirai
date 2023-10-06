<?php 
  
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) 
                exit;

        if(empty($_POST['name']))
                exit('Поле "логин" не заполнено');

        if(empty($_POST['password'])) 
                exit('Поле "пароль" не заполнено');

        if(empty($_POST['password1'])) 
                exit('Поле "Подверждение пароля" не заполнено');

        if($_POST['password'] !== $_POST['password1']) 
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
