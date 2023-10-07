<?php 
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) 
                exit;

                if (strlen($_POST['login']) < 9) {
           
                        exit('Логин должен быть минимум 8 символов ');
                }

        if(empty($_POST['login']))
                exit('Поле "логин" не заполнено');

        if(empty($_POST['password'])) 
                exit('Поле "пароль" не заполнено');

                if (strlen($_POST['password']) < 9) {
            
                        exit('Пароль должен быть минимум 8 символов');
                }        

        if(empty($_POST['passwordtry'])) 
                exit('Поле "Подверждение пароля" не заполнено');

        if($_POST['password'] !== $_POST['passwordtry']) 
                exit('Пароли не совпадают' );

        if(empty($_POST['Email'])) 
                exit('Поле "почта" не заполнено');

        echo 'Здравствуйте, '.htmlspecialchars($_POST['login']).'. <br>';
        echo 'Ваш аккаунт создан'.'. <br>';

        $host       = "db4.myarena.ru";    
        $dbname     = "u19978_b14";    
        $user       = "u19978_b14";           
        $password   = "eR9eA8zO2a";     

        try {
                $connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
            
                } catch (PDOException $e) {
                    die("Ошибка подключения: " . $e->getMessage());
                }
        

                $select = $connection->prepare( "SELECT COUNT(`id`) as cnt FROM `user` WHERE `login` = ?;" ); 
                $res = $select->execute([ $_POST['login'] ] );
                $row = $select->fetch();
            
                if(!$res ){
                    exit( 'Ошибка регистрации...');
                }
            
                if( $res && isset($row['cnt']) && $row[0] > 0 ){
                exit( 'Ошибка регистрации... (Пользователь уже существует)' );
                }

        
                $pwd = $_POST['password'];
                $pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);

                // Create new USER

                $data = [ $_POST['login'], $pwd_hash, $_POST['Email'] ];
                $res = $connection->prepare( "INSERT INTO `user` (`login`, `password`, `Email`) VALUES (?,?,?);" ); 
                $res = $res->execute( $data);
            
                if( $res ){
                    exit( 'Регистрация прошла успешно' );
                }
                
                exit('Ошибка регистрации... (2) <form action="index.php" method="post">
                <p style="text-align: left"><button>На главную</button>
                </form>' );
                ?>
            
             <form action="index.php" method="post">
             <p style="text-align: left"><button>На главную</button>
?>
