<?php
include 'Unit4_database.php';

$conn = getConnection();
//Fetching Values from URL
$name=$_POST['name'];
$image=$_POST['image'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$inactive=$_POST['inactive'];
$action=$_POST['action'];

if($action=="add"){
        addProduct($conn, $name, $image, $price, $quantity, $inactive)
        echo "Product added"
}



?>