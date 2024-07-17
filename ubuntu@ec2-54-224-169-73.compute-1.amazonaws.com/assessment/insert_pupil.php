<!DOCTYPE html>
<html>
<head>
    <title>Insert Pupil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Insert Pupil</h2>
        <form action="insert_pupil.php" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address"><br>
            <label for="medical_info">Medical Info:</label>
            <input type="text" id="medical_info" name="medical_info"><br>
            <label for="class_id">Class ID:</label>
            <input type="number" id="class_id" name="class_id"><br>
            <input type="submit" value="Insert Pupil">
        </form>

        <?php
        if ($_GET) {
            include 'db.php';
            
            $name = $_GET['name'];
            $address = $_GET['address'];
            $medical_info = $_GET['medical_info'];
            $class_id = $_GET['class_id'];

            $sql = "INSERT INTO Pupil (Name, Address, MedicalInfo, ClassID) VALUES ('$name', '$address', '$medical_info', $class_id)";

            if ($conn->query($sql) === TRUE) {
                echo "New pupil record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
