<?php
class Product{
    public $brand;
    public $name;
    public $image;
    public $price;
    public $type;

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

class Cibo extends Product{
    
    public $ingredients;
    public $nutricional_value;
    public $allergens;
    public $weight;

    function __construct($_name, $_brand, $_image, $_price, $_type, Category $_category, $_ingredients, $_nutricional_value, $_allergens, $_weight)
    {
        parent::__construct($_name, $_brand, $_image, $_price, $_type, $_category);
        $this->ingredients = $_ingredients;
        $this->nutricional_value = $_nutricional_value;
        $this->allergens = $_allergens;
        $this->weight = $_weight;
    
    }
}

class Accessories extends Product{
    
    public $genre;
    public $utilities;

    function __construct($_name, $_brand, $_image, $_price, $_type, Category $_category, $_genre, $_utilities )
    {
        parent::__construct($_name, $_brand, $_image, $_price, $_type, $_category);
        $this->genre = $_genre;
        $this->utilities = $_utilities;
        
    
    }
}

class Game extends Product{

    public $genre;
    public $scope;

    function __construct($_name, $_brand, $_image, $_price, $_type, Category $_category, $_genre, $_scope )
    {
        parent::__construct($_name, $_brand, $_image, $_price, $_type, $_category);
        $this->genre = $_genre;
        $this->scope = $_scope;
        
    
    }
}
?>