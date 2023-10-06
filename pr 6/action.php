<?php 
    if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;
       
        if(empty($_POST['age']) || (empty($_POST['name'] )))     
        
        exit('Поля не заполнено');

        if(empty($_POST['age'])) {
            exit;
        }
     
         if(preg_match('/\d+/', $_POST['name']))

             exit ("Неверный формат записи имении <br/> Можно использовать только буквы"); 
            
        if((int)$_POST['age'] < 1) 
        
        exit('Неверно записаный формат в поле');

        echo 'Здравствуйте, '.htmlspecialchars($_POST['name']).'. <br>';
        echo 'Вам '.(int)$_POST['age'].' лет.'.'<br>';
    
?>

