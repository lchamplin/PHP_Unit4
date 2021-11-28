<?php
error_reporting(E_ALL);
ini_set('display_errors', True);

include 'Unit4_database.php';

$conn = getConnection();
echo "got connection"
//Fetching Values from URL
$name=$_POST['name'];
$image=$_POST['image'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$inactive=$_POST['inactive'];
$action=$_POST['action'];

if($action=="add"){
        addProduct($conn, $name, $image, $price, $quantity, $inactive);
        echo "Product added";
}
echo "Error";



?>