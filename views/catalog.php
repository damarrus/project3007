<?php require_once "../templates/header.php" ?>
<link rel="stylesheet" href="../css/catalog.css">
<main class="catalog-main">
    <div class="catalog-category">ГЛАВНАЯ / МУЖЧИНАМ </div>
    <h1 class="catalog-title">МУЖЧИНАМ</h1>
    <div class="catalog-title-tovar">Все товары</div>
    <div class="catalog-flex-select">
        <select class="catalog-flex-select1">
            <option>Куртки</option>
            <option>Джинсы</option>
            <option>Обувь</option>
        </select>
        <select class="catalog-flex-select1">
            <option>M</option>
            <option>L</option>
            <option>XL</option>
        </select>
        <select class="catalog-flex-select1">
            <option>0-1000 руб.</option>
            <option>1000-3000 руб.</option>
            <option>3000-6000 руб.</option>
        </select>
    </div>
    <?php foreach ($products as $product) {
        echo '<h2>'.$product->getTitle().'</h2>';
    } ?>

</main>
<?php require_once "../templates/footer.php" ?>
