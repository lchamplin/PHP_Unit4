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

if($action=="add"){
        addProduct($conn, $name, $image, $price, $quantity, $inactive);
        echo getProductTableHTML($conn);
}
else if($action=="update"){
        $id=(int)$_POST['id'];
        updateProductById($conn, $id, $name, $image, $price, $quantity, $inactive)
        echo getProductTableHTML($conn);
}
else if($action=="delete"){
        $id=(int)$_POST['id'];
        deleteProductById($conn, $id);
        echo getProductTableHTML($conn);

}
else{
        echo "Error";
}

?>