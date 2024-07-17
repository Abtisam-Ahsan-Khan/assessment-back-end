<?php
include 'db.php';

$pupil_id = intval($_GET['pupil_id']);

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM Pupils WHERE PupilID = ?");
$stmt->bind_param("i", $pupil_id);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["PupilID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Address: " . $row["Address"]. " - Medical Info: " . $row["MedicalInfo"]. " - Class ID: " . $row["ClassID"]. "<br>";
    }
} else {
    echo "0 results";
}

$stmt->close();
$conn->close();
?>
