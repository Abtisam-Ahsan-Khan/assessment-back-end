<?php //own code
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "SchoolDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
