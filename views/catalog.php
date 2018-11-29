<?php require_once "../templates/header.php" ?>
<link rel="stylesheet" href="../css/catalog.css">
<main class="catalog-main">
    <div class="catalog-category">КАТАЛОГ / <?php echo mb_strtoupper($collection_title) . " / " . mb_strtoupper($category_title);?></div>
    <h1 class="catalog-title"><?php echo mb_strtoupper($collection_title);?></h1>
    <div class="catalog-title-tovar"><?php echo $category_title;?></div>
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
        if ($products == NULL) {
            echo "<div class=\"catalog-items\">Товаров, соответствующих данным критериям, не найдено.</div>";
        } else {
            echo "<div class=\"catalog-items\">";
            foreach ($products as $product) {
                echo '<div class="catalog-item">' . '<div class="catalog-image-container"><a href="../controllers/product.php?id=' . $product->getProductId() . '"><img class="catalog-item-image" src="../images/catalog/' . $product->getProductId() . '.jpg"></a></div>' . 
             $product->getTitle() . '<br>' . '<div class="catalog-item-price">' . $product->getPrice() . ' руб.' . '</div>' . '<div class="catalog-add-to-cart-button">ДОБАВИТЬ В КОРЗИНУ</div>' . '</div>';
            }
            echo "</div>";
        }
    ?>
    <div class="catalog-pages">
        <div class="catalog-page">1</div>
        <div class="catalog-page-disabled">2</div>
        <div class="catalog-page-disabled">3</div>
        <div class="catalog-page-disabled">4</div>  
    </div>
</main>
<?php require_once "../templates/footer.php" ?>
