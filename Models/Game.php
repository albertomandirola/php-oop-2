<?php


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