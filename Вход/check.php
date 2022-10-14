<?php

    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 2 || mb_strlen($login) > 15) {
        echo "Недопустимая длина Логина Min-(5) Max-(15) ";
        echo '<a href="https://tolia-kulakov-2002.000webhostapp.com/Кино/Вход/Register.php">Вернуться назад</a>'; 
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 15) {
        echo "Недопустимая длина Пароля Min-(5) Max-(15) ";
        echo '<a href="https://tolia-kulakov-2002.000webhostapp.com/Кино/Вход/Register.php">Вернуться назад</a>';  
        exit();
    }

    $passhas = md5($pass."tolia2002");

    $mysql = new mysqli('localhost', 'id18171794_tolia', 'Tolia.Kulakov.2002', 'id18171794_users');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$passhas'");
    $user = $result->fetch_assoc();
    if(count($user) != 0) {
        echo "Логин уже используется ";
        echo '<a href="https://tolia-kulakov-2002.000webhostapp.com/Кино/Вход/Register.php">Вернуться назад</a>'; 
        exit();
    }

    $mysql->query("INSERT INTO `users` (`login`, `pass`)
    VALUES('$login', '$passhas')");

    $mysql->close();

$token = "2091082591:AAGvH9xxtyTepkAJbdYPRp88SFCgrQH1d94";
$chat_id = "615277867";
$arr = array(
    'Зарегистрировался 📔',
    'Логин: ' => $login
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    header('Location: /Кино/Вход/Login.php');
?>