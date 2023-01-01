<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");

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