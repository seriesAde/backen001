<?php
// prepared query
$me = new mysqli("localhost", "root", "", "first_sql");
if ($me->connect_errno) {
    die;
}
// pagination
// limit and offset in sql select quary
// $query = ("INSERT INTO `products`
// (`product_Name`,`image`,`description`,`price`,`rating`,`seller_id`) VALUES
// ('$ProductName', '$Image', '$Description', '$Price', '$Rating', '$Seller_id');
$query = ("INSERT INTO `products`
(`product_Name`,`image`,`description`,`price`,`rating`,`seller_id`) VALUES
(?,?,?,?,?,?)");
$stmt = $me->prepare($query);
$stmt->bind_param("sssiii", $ProductName, $Image, $Description, $Price, $Rating, $Seller_id);
// using prepared query
$id= "";
$ProductName = "cartier";
$Image = "a.png";
$Description = "nice cartier watch";
$Price = "50000";
$Rating = "2";
$Seller_id = "1";

$stmt->execute();


