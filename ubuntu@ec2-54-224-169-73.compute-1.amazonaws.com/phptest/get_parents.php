<?php
include 'db.php';

$result = $conn->query("SELECT * FROM Parents");
$parents = $result->fetch_all(MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($parents);

$conn->close();
?>
