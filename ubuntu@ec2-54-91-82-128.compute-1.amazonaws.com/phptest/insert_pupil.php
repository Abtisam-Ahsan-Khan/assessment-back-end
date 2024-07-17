<?php
include 'db.php';

// Only process the form if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging code
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // Retrieve and trim data from the POST array if they exist, otherwise use default empty values
    $first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
    $medical_info = isset($_POST['medical_info']) ? trim($_POST['medical_info']) : '';
    $class_id = isset($_POST['class_id']) ? intval($_POST['class_id']) : 0;

    // Validate data
    if (empty($first_name) || empty($last_name) || empty($address) || empty($class_id)) {
        die("Please fill in all required fields.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Pupils (FirstName, LastName, Address, MedicalInfo, ClassID) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $first_name, $last_name, $address, $medical_info, $class_id);

    if ($stmt->execute()) {
        echo "New pupil added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Please submit the form.";
}
?>
