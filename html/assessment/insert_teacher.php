<!DOCTYPE html>
<html>
<head>
    <title>Insert Teacher</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Insert Teacher</h2>
        <form action="insert_teacher.php" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address"><br>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone"><br>
            <label for="salary">Annual Salary:</label>
            <input type="text" id="salary" name="salary"><br>
            <label for="background_check">Background Check:</label>
            <input type="text" id="background_check" name="background_check"><br>
            <input type="submit" value="Insert Teacher">
        </form>

        <?php
        if ($_GET) {
            include 'db.php';
            
            $name = $_GET['name'];
            $address = $_GET['address'];
            $phone = $_GET['phone'];
            $salary = $_GET['salary'];
            $background_check = $_GET['background_check'] == 'true' ? 1 : 0;

            $sql = "INSERT INTO Teacher (TeacherName, Address, Phone, AnnualSalary, BackgroundCheck) VALUES ('$name', '$address', '$phone', $salary, $background_check)";

            if ($conn->query($sql) === TRUE) {
                echo "New teacher record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
