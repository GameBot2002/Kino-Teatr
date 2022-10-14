<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="Уневирсал.css">
  <link rel="stylesheet" href="header.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

  <meta name="author" content="Кулаков Анатолий" />
  <meta name="copyright" content="https://smartlanding.biz/otpravka-dannyx-formy-v-telegram.html" />
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Авторизация</title>
    </head>
    <body>
    <header class="pc_web">
    <details class="header-content-auth">
      <summary>Меню</summary>
        <p>
          <p class="header-content-a"><a href="Кино/index.php">Главная</a></p>
          <p></p>
          <p class="header-content-a"><a href="Кино/Заявка/zayavka.html">Заявка</a></p>
          <p></p>
          
          <div class="header-content-кино">

            <p class="header-content-a"><a href="#">Кино</a></p>
            <p></p>
            <p class="header-content-a"><a href="#">Рандом</a></p>
            <p></p>
            <p class="header-content-a"><a href="#">Расписание</a></p>

          </div>
        </p>
    </details>
    
    <details class="header-content-auth">
      <?php
        if($_COOKIE['user'] == ''):
      ?>
      <summary>Аккаунт</summary>
        <p>
          <p class="header-content-a"><a href="Кино/Вход/Login.php">Авторизация</a></p>
          <p></p>
          или
          <p></p>
          <p class="header-content-a"><a href="Кино/Вход/Register.php">Регистрация</a></p>
        </p>

      <?php else:?>
      <summary><?=$_COOKIE['user']?></summary>
        <p>
          <p class="header-content-a"><a href="Кино/Вход/exit.php">Выход</a></p>
        </p>
      <?php endif;?>
    </details>
  </header>


    <?php
        if($_COOKIE['user'] == ''):
    ?>

<div class="form-wrapper">
    <div class="col">
        <form action="auth.php" method="post" class="contact-form">
            <legend class="form-control__title">Вход</legend>

            <div class="form-group">
                <input type="text" class="form-control" id="" name="login" placeholder="Введите ваш логин" size="15" maxlength="15">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="" name="pass" placeholder="Введите ваш пароль" size="15" maxlength="15">
            </div>

            <input type="reset" name="reset" class="form-control__button">
            <br>
            <br>
            <input class="a-form-control__button" type="submit" value="Авторизация">
            <br>
            <p><a href="Кино/Вход/Register.php">Зарегистрируйтесь</a> если нет аккаунта</p>
        </form>
    </div>
</div>
<?php else:?>
<div class="form-wrapper" style="color: #ffffff;">
    <div class="contact-form">
        <h2>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">Здесь</a>.</h2>
    </div>
</div>
<?php endif;?>
    <br>
    </body>
    </html>