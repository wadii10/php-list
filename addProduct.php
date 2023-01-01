<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");

include "connect.php";

$nameProd = $_GET['nameProd'];
$price = $_GET['price'];
$category = $_GET['category'];
$image = $_GET['image'];

$sql = "INSERT INTO `products`(`nameProd`, `price`, `category`,`image`) VALUES ('$nameProd','$price','$category','$image')";


if ($conn->query($sql) === TRUE) {
    $response = "product added succefully!";
    echo json_encode($response);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//http://localhost/ecommerce/addProduct.php?nameProd=t-shirt&price=12&category=clothes
?>