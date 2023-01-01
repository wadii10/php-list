<?php

include "connect.php";

$nameProd = $_GET['nameProd'];
$price = $_GET['price'];
$category = $_GET['category'];

$sql = "INSERT INTO `products`(`nameProd`, `price`, `category`) VALUES ('$nameProd','$price','$category')";


if ($conn->query($sql) === TRUE) {
    $response = "product added succefully!";
    echo json_encode($response);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//http://localhost/ecommerce/addProduct.php?nameProd=t-shirt&price=12&category=clothes
?>