<?php
    setcookie('user', $user['login'], time() - 3600, "/");

$token = "2091082591:AAGvH9xxtyTepkAJbdYPRp88SFCgrQH1d94";
$chat_id = "615277867";
$arr = array(
    'Вышел 🚪',
    'Логин: ' => $_COOKIE['user']
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    header('Location: /Кино/index.php');
?>