<?php
require_once __DIR__ . '/Category.php';

class Product{
    public $brand;
    public $name;
    public $image;
    public $price;
    public $type;
    public $category;

    function __construct($_name, $_brand, $_image, $_price, $_type, Category $_category)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->image = $_image;
        $this->price = $_price;
        $this->type = $_type;
        $this->category = $_category;

    }


}






?>