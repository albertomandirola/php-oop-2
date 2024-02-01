<?php

class Food extends Product{
    
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
?>