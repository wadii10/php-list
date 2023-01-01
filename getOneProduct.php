<?php

include "connect.php";

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";

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

//http://localhost/ecommerce/getOneProduct.php?id=8
?>