<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");

include "connect.php";

$id = $_GET['id'];
$nameCat = $_GET['nameCat'];
$sql = "UPDATE categories SET nameCat='$nameCat' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo json_encode("category updated successfully");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

//http://localhost/ecommerce/updateCategory.php?nameCat=variable&id=8
?>