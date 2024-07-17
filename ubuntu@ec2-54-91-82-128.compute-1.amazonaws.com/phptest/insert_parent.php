<?php
include 'db.php';

$name = $_POST['parent_name'];
$address = $_POST['parent_address'];
$email = $_POST['parent_email'];
$phone = $_POST['parent_phone'];

// Validate inputs here

$sql = "INSERT INTO Parents (Name, Address, Email, PhoneNumber)
        VALUES ('$name', '$address', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New parent added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
