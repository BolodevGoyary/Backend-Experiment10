<?php
include "db_connect.php";

header('Content-Type: application/json');

$result = $conn->query("SELECT * FROM posts");
$data = array();

while($row = $result->fetch_assoc()){
    $data[] = $row;
}

echo json_encode($data);
?>