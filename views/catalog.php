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

    <?php
        echo "<div class=\"catalog-items\">"; 
        foreach ($products as $product) {
            echo '<div class="catalog-item">' . '<div><a href="../controllers/product.php?id=' . $product->getProductId() . '"><img class="catalog-item-image" src="../images/catalog/' . $product->getProductId() . '.jpg"></a></div>' . 
                 $product->getTitle() . '<br>' . '<div class="catalog-item-price">' . $product->getPrice() . ' руб.' . '</div>' . '<div class="catalog-add-to-cart-button">ДОБАВИТЬ В КОРЗИНУ</div>' . '</div>';
        } 
        echo "</div>";
    ?>
    <div class="catalog-pages">
        <div class="catalog-page">1</div>
        <div class="catalog-page-disabled">2</div>
        <div class="catalog-page-disabled">3</div>
        <div class="catalog-page-disabled">4</div>  
    </div>
</main>
<?php require_once "../templates/footer.php" ?>
