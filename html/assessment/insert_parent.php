<!DOCTYPE html>
<html>
<head>
    <title>Insert Parent</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Insert Parent</h2>
        <form action="insert_parent.php" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address"><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"><br>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone"><br>
            <input type="submit" value="Insert Parent">
        </form>

        <?php
        if ($_GET) {
            include 'db.php';
            
            $name = $_GET['name'];
            $address = $_GET['address'];
            $email = $_GET['email'];
            $phone = $_GET['phone'];

            $sql = "INSERT INTO ParentGuardian (ParentName, Address, Email, Phone) VALUES ('$name', '$address', '$email', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "New parent record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
