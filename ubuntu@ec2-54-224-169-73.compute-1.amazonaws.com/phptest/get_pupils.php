<?php
include 'db.php';

$result = $conn->query("SELECT * FROM Pupils");
$pupils = $result->fetch_all(MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($pupils);

$conn->close();
?>
