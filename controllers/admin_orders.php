<?php

require_once '../models/Order.php';

$orders = Order::getAll();

// var_dump($orders);

require_once '../views/admin_orders.php';
