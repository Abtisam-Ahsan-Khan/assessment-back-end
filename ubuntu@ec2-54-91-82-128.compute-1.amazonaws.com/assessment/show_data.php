<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>
</head>
<body>
    <h2>Pupils</h2>
    <?php
    include 'db.php';
    
    $result = $conn->query("SELECT * FROM Pupil");
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Address</th><th>Medical Info</th><th>Class ID</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["PupilID"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["MedicalInfo"] . "</td><td>" . $row["ClassID"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    echo "<h2>Teachers</h2>";
    $result = $conn->query("SELECT * FROM Teacher");
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Annual Salary</th><th>Background Check</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["TeacherID"] . "</td><td>" . $row["TeacherName"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Phone"] . "</td><td>" . $row["AnnualSalary"] . "</td><td>" . $row["BackgroundCheck"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    echo "<h2>Parents</h2>";
    $result = $conn->query("SELECT * FROM ParentGuardian");
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["ParentID"] . "</td><td>" . $row["ParentName"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Phone"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
