<?php

require_once '../models/Product.php';

$product = new Product($_GET['id']);
$page_name = $product->getTitle();
$sizes = $product->getSizeIdAndValues();
require_once '../views/product.php';