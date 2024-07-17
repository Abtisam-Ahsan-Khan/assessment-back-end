<!DOCTYPE html>
<html>
<head>
    <title>Insert Pupil</title>
</head>
<body>
    <h2>Insert Pupil</h2>
    <form action="insert_pupil.php" method="get">
        Name: <input type="text" name="name"><br>
        Address: <input type="text" name="address"><br>
        Medical Info: <input type="text" name="medical_info"><br>
        Class ID: <input type="number" name="class_id"><br>
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
</body>
</html>
