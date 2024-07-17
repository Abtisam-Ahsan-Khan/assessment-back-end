<?php
include 'db.php';

$name = $_POST['teacher_name'];
$address = $_POST['teacher_address'];
$phone = $_POST['teacher_phone'];
$salary = $_POST['teacher_salary'];
$background_check = $_POST['teacher_background_check'];

// Validate inputs here

$sql = "INSERT INTO Teachers (FirstName, LastName, Address, Phone, AnnualSalary, BackgroundCheck)
        VALUES ('$name', '$name', '$address', '$phone', '$salary', '$background_check')";

if ($conn->query($sql) === TRUE) {
    echo "New teacher added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
