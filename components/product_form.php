<section class="form">
    <div class="container">
        <h1 class="catalog-title">Добавление карточки автомобиля</h1>
        <form method="post" action="product_add.php" enctype="multipart/form-data">
            <p>
                <label for="id1">Марка и модель:</label>
                <input type="text" name="title" id="id1">
            </p>
            <p>
                <label for="id2">Цена за сутки:</label>
                <input type="number" name="price" id="id2">
            </p>
            <p>
                <label for="id3">Цена за час:</label>
                <input type="number" name="price_hour" id="id3">
            </p>
            <p>
                <label for="id4">Цвет авто:</label>
                <input type="text" name="colors" id="id4">
            </p>
            <p>
                <label for="id5">Тип коробки передач:</label>
                <select name="gearbox" id="id5">
                    <option value="MT">Механическая</option>
                    <option value="AT">Автоматическая</option>
                </select>
            </p>
            <p>
                <label for="id6">Расход топлива:</label>
                <input type="number" name="consumption" id="id6">
            </p>
            <p>
                <label for="id7">Мощность авто(л.с.):</label>
                <input type="number" name="power" id="id7">
            </p>
            <p>
                <label for="id8">Год выпуска:</label>
                <input type="number" name="year" id="id8">
            </p>
            <p>
                <label for="id9">Сколько раз брали в аренду:</label>
                <input type="number" name="rent" id="id9">
            </p>
            <p>
                <label for="id10">Пробег:</label>
                <input type="number" name="mileage" id="id10">
            </p>
            <p>
                <label for="image" id="id11">Изображение:</label>
                <input name="filename" type="file">
            </p>
            <p><input type="submit" value="Создать"></p>
        </form>
    </div>
</section>
