<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Форма для заполнения чуть ниже <h3>
     <p><span class="error"> * Обязательное поле </span></p>
     
     <form action="action.php" method="post">
     <p>Логин:<span class="error">* <input type="text" name="name"></p>     
     <p>Пароль:<span class="error">* <input type="password" name="password"></p>
     <p>Подтвердите пароль:<span class="error">* <input type="password" name="passwordtry"></p>
     <p>Почта:<span class="error">* <input type="email" name="mail"></p>
     <p><input type="submit" value="Зарегестрироваться"></p> 
     </form>
     
</body>
</html>