<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");

include "connect.php";

$id = $_GET['id'];
$sql = "SELECT  nameCat FROM categories WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo json_encode($row); 
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//http://localhost/ecommerce/getOneCategory.php?id=8
?>