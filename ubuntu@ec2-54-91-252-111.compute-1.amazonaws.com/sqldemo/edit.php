
<html>
<head>
    <title>Edit data in Database</title>
    <?php include("db.php"); ?>
</head>
<body>
    <h1>Get Data from Database</h1>
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM employees";
            $result = mysqli_query($conn, $query);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
           
            foreach($rows as $row) {
                echo ("<tr>");
                echo ("<td>" . $row["employee_id"] . "</td>");
                echo ("<td>" . $row["first_name"] . "</td>");
                echo ("<td>" . $row["last_name"] . "</td>");
                echo ("<td>" . $row["email"] . "</td>");
                echo ("<td>");
                echo("        <form action= 'delete2.php' method='POST'>");
                echo("            <input type= 'hidden' name='edit_id' value='" . $row["employee_id"] . "' />");
                echo("       <button type='submit'>Edit</button>");
                echo("    </form>");
                echo("      </td>");
                echo("</tr>");
            }
            ?>
        </tbody>
    </table>
</body>
</html>
 