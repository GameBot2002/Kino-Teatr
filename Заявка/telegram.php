<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "5455920429:AAG-Qc1T3BceEB-e2M6LqCjf_Ai4Snq--E8";
$chat_id = "615277867";
$arr = array(
  'Имя: ' => $name,
  'Логин: ' => $_COOKIE['user'],
  'Email: ' => $email,
  'Сообщение: ' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

  header('Location: index.html');
?>