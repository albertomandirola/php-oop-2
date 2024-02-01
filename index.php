<?php
require __DIR__.'/Models/Product.php';
require __DIR__.'/Models/Accessories.php';
require __DIR__.'/Models/Food.php';
require __DIR__.'/Models/Game.php';

$dog = new Category('Dog', 'fas fa-dog');
$cat = new Category('Cat', 'fas fa-cat');
$bird = new Category('Bird', 'fas fa-dove');
$fish = new Category('Fish', 'fas fa-fish');

$product_1 = new Food("light-food", "acana", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/ACANA-reg-dog-pacifica-fr-xl-600x600.jpg", 25.90, "sterilizzato",$cat , ["pollo","verdura","omega-3","carni miste"], [15,100,23,45], ["tapioca","glutine"], 10);
$product_2 = new Food("mass-food", "whiskas", "https://www.cicalia.com/it/img/imgproducts/64080/m_64080.jpg", 35, "tutti",$cat, ["tonno","verdura","omega-3","scarti pesce"], [14,111,23,5], "acciuga", 1.5);
$product_3 = new Accessories("Kit guinzaglio", "Julius K9", "https://nscfoto.b-cdn.net/foto/rec-3154.71-c.jpg?width=262&height=310&token=1705783298", 45 , "adulto", $dog , 'unisex', 'passeggio');
$product_4 = new Accessories("Altalena", "ZooPlus", "https://shop-cdn-m.mediazs.com/bilder/2/400/21068_PLA_Vogelschaukel_Natur_2.jpg", 4 , "tutti" , $bird , 'unisex', 'gabbiata per ucelli');
$product_5 = new Game("Kit guinzaglio", "Julius K9", "https://nscfoto.b-cdn.net/foto/rec-3154.71-c.jpg?width=262&height=310&token=1705783298", 45 , "adulto", $dog , 'unisex', 'passeggio');
$product_6 = new Game("Altalena", "ZooPlus", "https://shop-cdn-m.mediazs.com/bilder/2/400/21068_PLA_Vogelschaukel_Natur_2.jpg", 4 , "tutti" , $bird , 'unisex', 'gabbiata per ucelli');



$products = [
    $product_1, $product_2,$product_3,$product_4,$product_5,$product_6
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>products</title>
</head>

<body>
    <main class='bg-dark'>
        <div class="container">
            <div class="row">
                <div class="col-12 m-2">
                    <h1 class='text-white'>Shop:</h1>
                </div>
                <div class="col-12 d-flex justify-content-center ">
                        <ul class="list-unstyled d-flex flex-wrap justify-content-beetween ">
                            <?php foreach ($products as $product) { ?>
                                <li class='mt-5 pe-3'>
                                        <div class="card" style="width: 18rem;">
                                            <div class="img-container">
                                                <img src="<?php echo $product->image?>" class="card-img-top" alt="...">
                                            </div>
                                            <div class="">
                                                <h5 class="card-title text-center text-capitalize"><?php echo $product->name;?></h5>
                                                
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><?php echo "<b>{$product->brand}</b>";?></li>
                                                <li class="list-group-item"><?php echo "<b>Prezzo</b>: {$product->price}$";?></li>
                                                <?php if(get_class($product) == 'Food') { ?>
                                                    <li class="list-group-item"><?php echo "<b>Ingredienti</b>: " . implode(",", $product->ingredients);?></li>
                                                    <li class="list-group-item"><?php echo "<b>Per</b>: " . $product->category->name. "<i class='{$product->category->icon}'></i>";?></li>
                                                <?php } ?>
                                                <?php if(get_class($product) == 'Game') { ?>
                                                    <li class="list-group-item"><?php echo "<b>Ingredienti</b>: " . $product->scope;?></li>
                                                    <li class="list-group-item"><?php echo "<b>Per</b>: " . $product->category->name. "<i class='{$product->category->icon}'></i>";?></li>
                                                <?php } ?>
                                                <?php if(get_class($product) == 'Accessories') { ?>
                                                    <li class="list-group-item"><?php echo "<b>Genere</b>: " . $product->genre;?></li>
                                                    <li class="list-group-item"><?php echo "<b>Per</b>: " . $product->category->name. "<i class='{$product->category->icon}'></i>";?></li>
                                                <?php } ?>
                                                
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="card-link">Another product infos </a>
                                            </div>
                                        </div>
                                </li>
                                
                            <?php } ?>
                        </ul>
                    
                </div>
            </div>
        </div>
    </main>
</body>

</html>

