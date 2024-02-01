<?php


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
?>