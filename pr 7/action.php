<?php 
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;
        if(empty($_POST['name'])) exit('Поле "логин" не заполнено');
        if(empty($_POST['password'])) exit('Поле "пароль" не заполнено');
        if(empty($_POST['password1'])) exit('Поле "пароль" не заполнено');


         
        if($password) !== ($password1 )
        exit ('пароли не совпадают');




        if(empty($_POST['mail'])) exit('Поле "почта" не заполнено');
        //if(empty($_POST['password1']))str_land
        echo 'Здравствуйте, '.htmlspecialchars($_POST['name']).'. <br>';
        echo 'Ваш аккаунт создан'.'. <br>';

?>