<?php
require_once '../models/Order.php';

$page_name = "Заказ оформлен!";
$address = $_POST['address'];
Order::create($address);

require_once '../views/thanks.php';


