<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");

include "connect.php";

$id = $_GET['id'];
$nameProd = $_GET['nameProd'];
$price = $_GET['price'];
$category = $_GET['category'];

$sql = "UPDATE products SET nameProd='$nameProd',price='$price',category='$category' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo json_encode("Record updated successfully");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

//http://localhost/ecommerce/updateProduct.php?nameCat=variable&id=8
?>