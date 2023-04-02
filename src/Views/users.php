<?php require 'src/Views/header.php'?>
    <h1>Список пользователей:</h1>
    <ul>
        <?php foreach ($data['users'] as $user): ?>
            <li>
                Имя: <?=$user->firstname?> <br>
                Фамилия: <?=$user->lastname?> <br>
                Логин(почта): <?=$user->email?> <br>
            </li>
        <?php endforeach; ?>
    </ul>
<?php require 'src/Views/footer.php'?>