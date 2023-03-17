<?php require('meta.php');
require('header.php');?>

        <?php
        if ($_SESSION['username'])
        {
            ?>
                <section class="item">
                <div class="container">
                <h1 class="item-title"><? echo $title ?></h1>
                <img src=<?= $img_url ?> width="510" height="392" alt="<?= $title ?>">
                <h1 class="item-title"><?= 'Цена за сутки ' ?><? echo $price ?><?= ' рублей' ?></h1>
                <h1 class="item-title"><?= 'Цена за час ' ?><? echo $price_hour ?><?= ' рублей' ?></h1>
                <p class="simple_text">Подробности уточняйте у менеджнра</p>
                <li><a href="../catalog.php">В каталог</a></li>
        <?}
        ?>
        <?php
        if($_SESSION['is_admin'] == 1)
        {
            ?>
            <li><a href="product_delete.php?product_id=<?=$id ?>">Удалить карточку автомобиля</a></li>
        <?}
        ?>
    </div>
</section>
