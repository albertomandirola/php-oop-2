<?php
class Product{
    public $brand;
    public $name;
    public $image;
    private $price;
    public $type;

    function __construct($_name, $_brand, $_image, $_price, $_type)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->image = $_image;
        $this->price = $_price;
        $this->type = $_type;

    }
    

}
class Cibo extends Product{
    
    public $ingredients;
    public $nutricional_value;
    public $allergens;

    function __construct($_name, $_brand, $_image, $_price, $_type, $_ingredients, $_nutricional_value, $_allergens)
    {
        parent::__construct($_name, $_brand, $_image, $_price, $_type);
        $this->ingredients = $_ingredients;
        $this->nutricional_value = $_nutricional_value;
        $this->allergens = $_allergens;
    
    }
}
class Accessories extends Product{
    
    public $genre;
    public $utilities;

    function __construct($_name, $_brand, $_image, $_price, $_type, $_genre, $_utilities )
    {
        parent::__construct($_name, $_brand, $_image, $_price, $_type);
        $this->genre = $_genre;
        $this->utilities = $_utilities;
        
    
    }
}
class Game extends Product{

    public $genre;
    public $scope;

    function __construct($_name, $_brand, $_image, $_price, $_type, $_genre, $_scope )
    {
        parent::__construct($_name, $_brand, $_image, $_price, $_type);
        $this->genre = $_genre;
        $this->scope = $_scope;
        
    
    }
}
?>