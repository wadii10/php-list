<?php

include "connect.php";

// sql to delete a record
$id = $_GET['id'];
$sql = "DELETE FROM categories WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo json_encode("category deleted successfully");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

// http://localhost/ecommerce/deleteCategory.php?id=8
?>