
<section class="banner">
    <p>А вы знали, что <?= $today ?> года<br> является самым подходящим временем для аренды?</p>
</section>
<section class="catalog">
    <div class="container">
        <h1 class="catalog-title">Каталог товаров</h1>
        <ol class="pagination">
            <?php for ($i = 1; $i <= $pages_total; $i = $i + 1): ?>
                <li>
                    <a href="catalog.php?page=<?= $i ?>" class="<?= $i === $page ? 'current' : '' ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ol>
        <ul class="products-list">
            <?php while ($item = $result->fetch()) {?>
                <li>
                    <a class="product-card"  href="components/product.php?product_id=<?= $item['id'] ?>">
                        <h3><? echo $title ?></h3>
                        <img src="<?= $item['img_url'] ?>" width="156" height="120" alt="<?= $item['title'] ?>">
                        <div class="product-options">
                            <span class="price"><?= $item['price'] ?></span>
                            <ul class="colors-list">
                                    <li class="color-<?= $color['colors'] ?>"></li>
                            </ul>
                        </div>
                    </a>
                </li>
            <?php }; ?>
        </ul>
    </div>
</section>

