<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");

include "connect.php";

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $response = array();
    while($row = $result->fetch_assoc()) {
      array_push($response, $row);
    };
    echo json_encode($response); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// http://localhost/ecommerce/getAllCategory.php
?>