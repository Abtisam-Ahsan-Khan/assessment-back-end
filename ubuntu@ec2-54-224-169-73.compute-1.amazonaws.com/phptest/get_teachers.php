<?php
include 'db.php';

$result = $conn->query("SELECT * FROM Teachers");
$teachers = $result->fetch_all(MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($teachers);

$conn->close();
?>
