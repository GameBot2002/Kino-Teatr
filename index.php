<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="Компьютер.css">
  <link rel="stylesheet" href="Мобильный.css">
  <link rel="stylesheet" href="header.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

  <meta name="author" content="Кулаков Анатолий" />
  <meta name="copyright" content="https://smartlanding.biz/otpravka-dannyx-formy-v-telegram.html" />
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Кино-театр</title>
</head>
<body>
  <header class="pc_web">
    <details class="header-content-auth">
      <summary>Меню</summary>
        <p>
          <p class="header-content-a"><a href="https://tolia-kulakov-2002.000webhostapp.com/Кино/index.php">Главная</a></p>
          <p></p>
          <p class="header-content-a"><a href="https://tolia-kulakov-2002.000webhostapp.com/Кино/Заявка/zayavka.html">Заявка</a></p>
          <p></p>
          
          <div class="header-content-кино">

            <p class="header-content-a"><a href="Кино-расписание/inde.html">Расписание</a></p>
            <p></p>
            <p class="header-content-a"><a href="Кино-рандом/index.html">Рандом</a></p>
            <p></p>
            <p class="header-content-a"><a href="Кино/index.html">Кино</a></p>
            <p></p>

          </div>
        </p>
    </details>
    
    <details class="header-content-auth">
      <?php
        if($_COOKIE['user'] == ''):
      ?>
      <summary>Аккаунт</summary>
        <p>
          <p class="header-content-a"><a href="https://tolia-kulakov-2002.000webhostapp.com/Кино/Вход/Login.php">Авторизация</a></p>
          <p></p>
          или
          <p></p>
          <p class="header-content-a"><a href="https://tolia-kulakov-2002.000webhostapp.com/Кино/Вход/Register.php">Регистрация</a></p>
        </p>

      <?php else:?>
      <summary><?=$_COOKIE['user']?></summary>
        <p>
          <p class="header-content-a"><a href="https://tolia-kulakov-2002.000webhostapp.com/Кино/Вход/exit.php">Выход</a></p>
        </p>
      <?php endif;?>
    </details>
  </header>

  <div>
    
  </div>
</body>
</html>