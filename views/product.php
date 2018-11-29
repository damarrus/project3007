<!-- <?php require_once "../templates/header.php" ?> -->
<main class="goods-main">
    <link rel="stylesheet" href="../css/good.css">
    <div class="goods-category">ГЛАВНАЯ / МУЖЧИНАМ / ОБУВЬ / КЕДЫ С ПОЛОСКОЙ</div>
    <div class="goods-image">
        <?php echo '<img src="../images/catalog/'.$product->getImage().'" alt="good-image" class="goods-image-item">'?>
    </div>
    <?php echo '<h1 class="goods-title">'.$product->getTitle().'</h1>'?>
    <div class="goods-vendor-code">Артикул: 385904</div>
    <?php echo '<div class="goods-price">'.$product->getPrice().'</div>' ?>
    <?php echo '<div class="goods-description">'.$product->getDescription().'</div>'?>
    <div class="goods-size">РАЗМЕР</div>
    <div class="goods-size-items">
        <div class="goods-size-item">38</div>
        <div class="goods-size-item">39</div>
        <div class="goods-size-item">40</div>
        <div class="goods-size-item">41</div>
        <div class="goods-size-item">42</div>
        <div class="goods-size-item-absent">43</div>
    </div>
    <div class="goods-add-to-cart-button"><a id="add" href=""> ДОБАВИТЬ В КОРЗИНУ</a></div>
    <div class="goods-empty"></div>
    <?php foreach ($product as $products) {
        echo '<h2>'.$product->getTitle().'</h2>';
        echo '<h2>'.$product->getPrice().'</h2>';
        echo '<h2>'.$product->getDescription().'</h2>';
        echo '<h2>'.$product->getCategoryId().'</h2>';
        echo '<h2>'.$product->getOutOfStock().'</h2>';
    } ?>
</main>
<!-- <?php require_once "../templates/footer.php" ?> -->
