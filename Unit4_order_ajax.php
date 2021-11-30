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
if($action=="update"){
        $id=(int)$_POST['id'];
        updateProductById($conn, $id, $name, $image, $price, $quantity, $inactive);
        echo getProductTableHTML($conn);
}
if($action=="delete"){
        $id=(int)$_POST['id'];

        $exists = getProductOrders($conn, $id);
        if ($exists==1){
                echo "alert('Cannot delete--there are orders for this product')";
        }
        else{
                if (confirm('Are you sure you want to delete this product?')) {
                        deleteProductById($conn, $id);
                      } else {
                        // Do nothing!
                      }
                echo getProductTableHTML($conn);
        }
}



?>