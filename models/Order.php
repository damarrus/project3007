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

    public function getProductTotal($product_id)
    {
        global $mysqli;
        $query = "SELECT count*price as productTotal FROM order_products WHERE order_id={$this->id} AND product_id=$product_id;";
        $result = $mysqli->query($query);
        $result_assoc = $result->fetch_assoc();
        return $result_assoc['productTotal'];
    }
    
    public function getTotal()
    {
        global $mysqli;
        $query = "SELECT SUM(count*price) as total FROM order_products WHERE order_id={$this->id};";
        $result = $mysqli->query($query);
        $result_assoc = $result->fetch_assoc();
        var_dump($result_assoc);
        return $result_assoc['total'];
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setStatus($status)
    {
        global $mysqli;
        $this->status = $status;
        $query = "UPDATE orders SET status=$status WHERE order_id={$this->id};";
        $mysqli->query($query);
    }

    public function setAddress($address)
    {
        global $mysqli;
        $this->address = $address;
        $query = "UPDATE orders SET address=$address WHERE order_id={$this->id};";
        $mysqli->query($query);
    }

    public function setCount($count, $product_id)
    {
        global $mysqli;
        $query = "UPDATE order_products SET count=$count WHERE order_id={$this->id} AND product_id={$product_id};";
        $mysqli->query($query);
    }

    public function deleteProduct($product_id)
    {
        global $mysqli;
        $query = "DELETE FROM order_products WHERE order_id={$this->id} AND product_id=$product_id;";
        $mysqli->query($query);
    }

    public function deleteOrder($id)
    {
        global $mysqli;
        $query = "DELETE FROM order WHERE order_id=$id";
        $mysqli->query($query);
        $query_2 = "DELETE FROM order_products WHERE order_id=$id;";
        $mysqli->query($query);
        $this->__destruct();
    }
}
