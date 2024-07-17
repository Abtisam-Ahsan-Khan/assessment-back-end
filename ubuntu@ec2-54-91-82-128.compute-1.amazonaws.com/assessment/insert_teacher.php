<!DOCTYPE html>
<html>
<head>
    <title>Insert Teacher</title>
</head>
<body>
    <h2>Insert Teacher</h2>
    <form action="insert_teacher.php" method="get">
        Name: <input type="text" name="name"><br>
        Address: <input type="text" name="address"><br>
        Phone: <input type="text" name="phone"><br>
        Annual Salary: <input type="text" name="salary"><br>
        Background Check: <input type="text" name="background_check"><br>
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
</body>
</html>
