<?php

require_once 'db.php';

class Product 
{
    private $product_id;
    private $title;
    private $price;
    private $description;
    private $category_id;
    private $out_of_stock;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT title, description, price, category_id, out_of_stock FROM product WHERE product_id=$id";
        $result = $mysqli->query($query);
        $user_data = $result->fetch_assoc();

        $this->id = $id;
        $this->title = $product_data['title'];
        $this->description = $product_data['description'];
        $this->price = $product_data['price'];
        $this->category_id = $product_data['category_id'];
        $this->out_of_stock = $product_data['out_of_stock'];
    }

    public static function getAll()
    {
        global $mysqli;

        $query = "SELECT product_id FROM product";
        $result = $mysqli->query($query);

        $users = [];
        while ($product_data = $result->fetch_assoc()) {
            $products[] = new product($product_data['product_id']);
        }

        return $products;
    }

    // public function update($) 
    // {
    //     global $mysqli;

    //     $query = "UPDATE users SET pass='$new_pass' WHERE user_id=" . $this->id;
    //     $result = $mysqli->query($query);
        
    //     return $result;
    // }






}
