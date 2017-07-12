<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>MVC</title>
  <link rel="stylesheet" href="/style/style.css">
</head>
<body>

  <div class="wrapper">

    <header>
      <div class="header-content">
        <div class="registr">
          <div class="redistration">
            <p><a href="/registr">Зарегистрироваться</a></p>
          </div>
          <div class="login">
            <p><a href="/login">Войти</a></p>
          </div>
          <div class="balance">
            <p><a href="/balance">Balance</a>: 0</p>
          </div>
        </div>
      </div>
      <div class="header-menu">
        <ul class="top-menu">
          <li>Главная страница</li>
          <li>О компании</li>
          <li>Личный кабинет</li>
        </ul>
      </div>
    </header>

    <main>
      <h1 class="h1">Основной контент</h1>
    </main>
    <footer>
      <p>Дополнительная информация</p>
    </footer>

  </div>


<?php //foreach ($menu as $name => $path): ?>
<!--  <ul>-->
<!--    <li>-->
<!--      <a href="--><?//= $path ?><!--">--><?//= $name ?><!--</a>-->
<!--    </li>-->
<!--  </ul>-->
<?php //endforeach; ?>
</body>
</html>