<?php
include "./assignment.php";


$submited = isset($_POST["submit_test"]);
if ($submited) {
    $username = $_POST["UserName"];
 
    AddProducts("Headphones", "https://i5.walmartimages.com/seo/onn-Wireless-Bluetooth-on-Ear-Headphones-Blue-New_08381ccb-2735-41ff-ac15-9a395d11c6f0.f18e7638c1241cc4cfa547d45de86bf6.jpeg", "nice Headphones");
}
   
$submited1 = isset($_GET["delete"]);
if ($submited1) {
header("Location:assignmentinclude.php");
    DeleteProduct(0);
}
var_dump(GetProducts());

pro()






?>

<form action="" method="post">
    <input type="text" name="UserName" placeholder="Username">
    <input type="password" name="Password" placeholder="password">
    <button name="submit_test">Submit</button>
</form>
<form action="" method="get">
    Delete first
    <button name="delete">Delete</button>
</form>