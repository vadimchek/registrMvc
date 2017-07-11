<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>RandArray</title>
</head>
<body>
<h1 class="h1">Случайный массив чисел</h1>

<p>
  <?php
    foreach ($randarray as $value) {
      echo $value.' | ';
    }
  ?>
</p>

<div class="max_min">
  <p>Минимальное число в массиве: <?= $min ?></p>
  <p>Мaксимальное число в массиве: <?= $max ?></p>
</div>

</body>
</html>