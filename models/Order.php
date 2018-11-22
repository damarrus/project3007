<?php
require_once "../db.php";

class Order 
{
    private $id;
    private $status;
    private $address;

    public function __construct($id)
    {
        global $mysqli;
        $query = "SELECT status, address FROM orders WHERE order_id=$id";
        $result = $mysqli->query($query);
        $order_data = $result->fetch_assoc();
        $this->id = $id;
        $this->status = $order_data['status'];
        $this->address = $order_data['address'];
    }
    
    public function getTotal($id)
    {
        global $mysqli;
        $query = "SELECT product_id, price, count FROM order_products WHERE order_id=$id";
        $result = $mysqli->query($query);
        
    }
}
