<?php

require_once '../models/Product.php';

$products = Product::getAll();
$page_name = 'Каталог';
require_once '../views/catalog.php';
