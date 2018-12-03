<?php
require_once '../models/Order.php';

$address = $_POST['address'];
Order::create($address);

require_once '../views/thanks.php';


