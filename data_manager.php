<?php
session_start();
const PRODUCTSKEY = "products";
function InitProducts()
{
    if (!isset($_SESSION[PRODUCTSKEY])) {
        $_SESSION[PRODUCTSKEY] = [];
    }
}
function GetProducts()
{
    return $_SESSION[PRODUCTSKEY];
}
function DeleteProducts(int $index, ) {
unset($_SESSION[PRODUCTSKEY][$index]);
}
function AddProducts(string $name, string $image, string $desc)
{
    $item = [
        "name" => $name,
        "image" => $image,
        "desc" => $desc
    ];

    array_push($_SESSION[PRODUCTSKEY], $item);
}
