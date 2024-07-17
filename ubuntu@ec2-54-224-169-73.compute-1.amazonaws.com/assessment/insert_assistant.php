<!DOCTYPE html>
<html>
<head>
    <title>Insert Assistant - Rishton Academy School</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Insert Assistant</h2>
        <form action="insert_assistant.php" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="annual_salary">Annual Salary:</label>
            <input type="number" id="annual_salary" name="annual_salary" required>

            <label for="background_check">Background Check:</label>
            <input type="text" id="background_check" name="background_check" required>

            <input type="submit" value="Insert Assistant">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
            include 'db.php';

            $name = $_GET['name'];
            $address = $_GET['address'];
            $phone = $_GET['phone'];
            $annual_salary = $_GET['annual_salary'];
            $background_check = $_GET['background_check'];

            $sql = "INSERT INTO TeacherAssistant (AssistantName, Address, Phone, AnnualSalary, BackgroundCheck)
                    VALUES ('$name', '$address', '$phone', '$annual_salary', '$background_check')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>New assistant inserted successfully</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
