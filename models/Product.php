<?php

require_once '../db.php';

class Product 
{
    private $product_id;
    private $title;
    private $price;
    private $image;
    private $description;
    private $category_id;
    private $out_of_stock;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT title, description, price, image, category_id, out_of_stock FROM products WHERE product_id=$id";
        $result = $mysqli->query($query);
        $product_data = $result->fetch_assoc();

        $this->product_id = $id;
        $this->title = $product_data['title'];
        $this->description = $product_data['description'];
        $this->price = $product_data['price'];
        $this->image = $product_data['image'];
        $this->category_id = $product_data['category_id'];
        $this->out_of_stock = $product_data['out_of_stock'];
    }

    public static function getAll()
    {
        global $mysqli;

        $query = "SELECT product_id FROM products ORDER BY product_id";
        $result = $mysqli->query($query);

        $users = [];
        while ($product_data = $result->fetch_assoc()) {
            $products[] = new Product($product_data['product_id']);
        }

        return $products;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }
  
    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getOutOfStock()
    {
        return $this->out_of_stock;
    }

    public function getProductId()
    {
        return $this->product_id;
    }
    // public function update($) 
    // {
    //     global $mysqli;

    //     $query = "UPDATE users SET pass='$new_pass' WHERE user_id=" . $this->id;
    //     $result = $mysqli->query($query);
        
    //     return $result;
    // }






}

