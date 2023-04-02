<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require 'src/views/header.php'?>
<h1>Список пользователей:</h1>
<ul>
    <?php foreach ($data['users'] as $user): ?>
        <li>
            Имя: <?=$user->firstname?> <br>
            Фамилия: <?=$user->lastname?><br>
            Почта(логин): <?=$user->email?><br>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>