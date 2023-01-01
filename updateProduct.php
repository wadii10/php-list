<?php

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