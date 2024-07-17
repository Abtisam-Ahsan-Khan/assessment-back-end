<!DOCTYPE html>
<html>
<head>
    <title>Rishton Academy Primary School</title>
</head>
<body>
    <h2>Enter Pupil Information</h2>
    <form action="insert_pupil.php" method="post">
        First Name: <input type="text" name="first_name" required><br>
        Last Name: <input type="text" name="last_name" required><br>
        Address: <textarea name="address" required></textarea><br>
        Medical Info: <textarea name="medical_info"></textarea><br>
        Class: 
        <select name="class_id" required>
            <?php
            include 'db.php';
            $sql = "SELECT ClassID, ClassName FROM Classes";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['ClassID'] . "'>" . $row['ClassName'] . "</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Retrieve Pupil Information</h2>
    <form action="view_pupil.php" method="get">
        Pupil ID: <input type="number" name="pupil_id" required><br>
        <input type="submit" value="View">
    </form>
</body>
</html>
