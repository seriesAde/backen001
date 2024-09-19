<style>
    div{
        /*   */
        width: 200px;
        background-color: pink;
      margin: 20px;
      padding: 5px;
    }
    div img{
width: 150px;
height: 150px;
    }
</style>

<?php
session_start();
const PRODUCTSKEY = "Products";
// InitProducts();


function InitProducts(){
    if (!isset($_SESSION[PRODUCTSKEY])) {
        $_SESSION[PRODUCTSKEY] = [];
    }
}


function GetProducts(){
    return $_SESSION[PRODUCTSKEY];
}

function DeleteProduct(int $index){
    // unset($_SESSION[PRODUCTSKEY][$index]);
    array_pop($_SESSION[PRODUCTSKEY]);
}

function AddProducts(string $name, string $image, string $desc)
{
    InitProducts();
    $item = [
        "name" => $name,
        "image" => $image,
        "desc" => $desc
    ];
    array_push($_SESSION[PRODUCTSKEY],$item);
}
function pro(){
    $products = GetProducts();
   
    
    foreach ($products as $product) {
        echo "<h1>Products</h1>";
        echo "<div>";
        echo "<img src='" . $product['image'] . "' alt='" .$product['name'] . "'>";
        echo "<h2>" . $product['name'] . "</h2>";
        echo "<p>" . $product['desc'] . "</p>";
        echo "</div>";
    }
}
