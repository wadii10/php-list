<?php

include "connect.php";

// sql to delete a record
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo json_encode("product deleted successfully");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

// http://localhost/ecommerce/deleteProduct.php?id=8
?>