<?php require 'src/Views/header.php'?>
    <h1>Наш автопарк:</h1>

    <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Автомобили</h6>
        </div>
        <?php
        foreach ($data['car'] as $category) { ?>
            <div class="d-flex text-muted pt-3">
                <img src=<?= $category->img_url ?> width="32" height="32" alt="<?= $title ?>">
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark"><?= $category->model_name ?></strong>
                                <a href="#"><a href="product_delete.php" class="btn btn-danger">Удалить</a></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <?php
        }
        ?>


    </main>





<?php require 'src/Views/footer.php'?>