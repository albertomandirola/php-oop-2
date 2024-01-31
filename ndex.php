<?php
require __DIR__.'/Models/Product.php';
require __DIR__.'/Models/Category.php';

$product_1 = new Cibo("light-food", "acana", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/ACANA-reg-dog-pacifica-fr-xl-600x600.jpg", 25.90, "sterilizzato", ["pollo","verdura","omega-3","carni miste"], [15,100,23,45], ["tapioca","glutine"]);
$product_2 = new Cibo("mass-food", "whiskas", "https://www.cicalia.com/it/img/imgproducts/64080/m_64080.jpg", 35, "tutti", ["tonno","verdura","omega-3","scarti pesce"], [14,111,23,5], "acciuga");
var_dump($product_1);
var_dump($product_2);


$products = [
    $product_1, $product_2
]
?>
