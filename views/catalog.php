<?php require_once "../templates/header.php" ?>
<link rel="stylesheet" href="../css/catalog.css">
<?php 
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $category = new Category($category_id);
        $category_title = $category->getTitle();
        $category_title = mb_strtoupper($category_title);
    } 
    if (isset($_GET['collection_id'])) {
        $collection_id = $_GET['collection_id'];
        $collection = new Collection($collection_id);
        $collection_title = mb_strtoupper($collection->getTitle());
    }
?>

<main class="catalog-main">
    <div class="catalog-category">КАТАЛОГ <?php echo isset($collection_id) ? "/ $collection_title " : ''; echo isset($category_id) ? "/ $category_title" : ''; ?></div>
    <h1 class="catalog-title"><?php echo isset($collection_id) ? $collection_title : 'КАТАЛОГ'; ?></h1>
    <div class="catalog-title-tovar"><?php echo isset($category_id) ? $category_title : 'Все товары'; ?></div>
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
        $areCategoryAndCollectionDefined = ''; 
        isset($category_id) ? $areCategoryAndCollectionDefined .= "1" : $areCategoryAndCollectionDefined .= "0";
        isset($collection_id) ? $areCategoryAndCollectionDefined .= "1" : $areCategoryAndCollectionDefined .= "0";
        function showCatalogItem(&$product) {
            echo '<div class="catalog-item">' . '<div class="catalog-image-container"><a href="../controllers/product.php?id=' . $product->getProductId() . '"><img class="catalog-item-image" src="../images/catalog/' . $product->getProductId() . '.jpg"></a></div>' . 
             $product->getTitle() . '<br>' . '<div class="catalog-item-price">' . $product->getPrice() . ' руб.' . '</div>' . '<div class="catalog-add-to-cart-button">ДОБАВИТЬ В КОРЗИНУ</div>' . '</div>';
        }
        foreach ($products as $product) {
            switch ($areCategoryAndCollectionDefined) {
                case "00":
                    showCatalogItem($product);
                break;
                case "10":
                    if ($product->getCategoryId() == $category_id) {
                        showCatalogItem($product);
                    }
                break;
                case "11":
                    if ($product->getCategoryId() == $category_id && $product->getCollectionId() == $collection_id) {
                        showCatalogItem($product);
                    }
                break;
                case "01":
                    if ($product->getCollectionId() == $collection_id) {
                        showCatalogItem($product);
                    }
                break;
                default:
                break;
            }
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
