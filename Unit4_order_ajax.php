<?php
error_reporting(E_ALL);
ini_set('display_errors', True);

include 'Unit4_database.php';

$conn = getConnection();
//Fetching Values from URL
$name=$_POST['name'];
$image=$_POST['image'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$inactive=(int)$_POST['inactive'];
$action=$_POST['action'];
echo "got values"

if($action=="add"){
        addProduct($conn, $name, $image, $price, $quantity, $inactive);
        echo "Product added";
}
// else if($action=="update"){

// }
// else if($action=="delete"){

// }
else{
        echo "Error";
}

?>