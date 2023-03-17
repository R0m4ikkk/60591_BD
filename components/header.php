<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Прокат автомобилей</title>
</head>

<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <?php
    if($_SESSION['username'])
    {
        echo('<li><a href="components/login.php?logout=1">'.$_SESSION['username'].' (выйти)</a></li>');
        if($_SESSION['is_admin'] == 1)
        {
            echo(' <li><a href="components/product_add.php">Добавить карточку авто</a></li>');
        }
        echo('<li><a href="../catalog.php"> Каталог</a></li>');
        echo('<li><a href="../index.php"> Главная</a></li>');
    }
    else
    {
        echo('<li><a href="components/login.php">Войти</a></li>');
        echo('<li><a href="catalog.php"> Каталог</a></li>');
        echo('<li><a href="index.php"> Главная</a></li>');
    }
    ?>
</header>
