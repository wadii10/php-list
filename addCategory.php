<?php

include "connect.php";

$nameCat = $_GET['nameCat'];

$sql = "INSERT INTO categories (nameCat) VALUES ('$nameCat')";

if ($conn->query($sql) === TRUE) {
    $response = "category added succefully!";
    echo json_encode($response);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//http://localhost/ecommerce/addCategory.php?nameCat=variable
?>