<?php

include "connect.php";

$id = $_GET['id'];
$nameCat = $_GET['nameCat'];
$sql = "UPDATE categories SET nameCat='$nameCat' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo json_encode("Record updated successfully");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

//http://localhost/ecommerce/updateCategory.php?nameCat=variable&id=8
?>