<?php

require_once '../models/Product.php';
require_once '../models/Category.php';
require_once '../models/Collection.php';

$products = Product::getAll();
$categories = Category::getAll();
$collections = Collection::getAll();
$page_name = 'Каталог';
require_once '../views/catalog.php';
