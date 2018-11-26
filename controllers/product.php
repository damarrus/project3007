<?php

require_once '../models/Product.php';

$product = new Product($_GET['id']);
$page_name = $product->getTitle();

require_once '../views/product.php';