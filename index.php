<?php
require __DIR__.'/Models/Product.php';
require __DIR__.'/Models/Category.php';

$dog = new Category("Dog");
$cat = new Category("Cat");
$bird = new Category("Bird");
$fish = new Category("FIsh");

$product_1 = new Cibo("light-food", "acana", "https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/ACANA-reg-dog-pacifica-fr-xl-600x600.jpg", 25.90, "sterilizzato",$dog , ["pollo","verdura","omega-3","carni miste"], [15,100,23,45], ["tapioca","glutine"], 10);
$product_2 = new Cibo("mass-food", "whiskas", "https://www.cicalia.com/it/img/imgproducts/64080/m_64080.jpg", 35, "tutti",$cat, ["tonno","verdura","omega-3","scarti pesce"], [14,111,23,5], "acciuga", 1.5);



$products = [
    $product_1, $product_2
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
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
                <div class="col-12">
                    <ul class="list-unstyled d-flex">
                        <?php foreach ($products as $product) { ?>
                            <div class="movie-container me-4">
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo $product->image?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $product->name;?></h5>
                                            <p class="card-text"></p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?php echo "<b>{$product->brand}</b>";?></li>
                                            <li class="list-group-item"><?php echo "<b>Prezzo</b>: {$product->price}";?></li>
                                            <li class="list-group-item"><?php echo "<b>Ingredienti</b>: " . implode(",", $product->ingredients);?></li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="card-link">productPlayer link</a>
                                            <a href="#" class="card-link">Another infos </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

