<!DOCTYPE html>
<html>
<head>
    <title>Insert Parent</title>
</head>
<body>
    <h2>Insert Parent</h2>
    <form action="insert_parent.php" method="get">
        Name: <input type="text" name="name"><br>
        Address: <input type="text" name="address"><br>
        Email: <input type="text" name="email"><br>
        Phone: <input type="text" name="phone"><br>
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
</body>
</html>
