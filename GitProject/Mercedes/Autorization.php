
<?php

$user_login = $_POST['login'];
$user_password = $_POST['password'];

echo "Полученные данные: <br/> Логин: ".$user_login." <br/> Пароль: ".$user_password;

$right_login = "123";
$right_password = "123";

if ($right_login == $user_login){
    if ($right_password == $user_password){
        echo "<br/>Логин и пароль введены правильно!";
    }else echo "<br/>Пароль введён неправильно для данного логина!";
}else {
    echo "<br/>Логин введён неправильно!";
}

?>