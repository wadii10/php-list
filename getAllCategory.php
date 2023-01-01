<?php

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