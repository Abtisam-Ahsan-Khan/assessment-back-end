<?php
include 'db.php';

$result = $conn->query("SELECT * FROM Classes");
$classes = $result->fetch_all(MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($classes);

$conn->close();
?>
