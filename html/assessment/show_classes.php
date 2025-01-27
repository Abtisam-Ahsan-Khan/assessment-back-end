<!DOCTYPE html>
<html> 
<head>
    <title>Classes</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Classes</h2>
        <table>
            <tr>
                <th>Class ID</th>
                <th>Class Name</th>
                <th>Teacher</th>
                <th>TeacherAssistant</th>
            </tr>
            <?php
            include 'db.php';
//The INNER JOIN between Class and Teacher makes sure that only classes with a valid teacher id are selected
//The LEFT JOIN with TeacherAssistant makes sure that if a class doesn't have an assistant, it will still be included in the results with a NULL value for Name.
//left join from youtube and guest lecture (https://youtu.be/giKwmtsz1U8?si=aN-4BIFZuqaQ96zn).

            $sql = "SELECT Class.ClassID, Class.ClassName, Teacher.TeacherName, TeacherAssistant.AssistantName 
                    FROM Class 
                    INNER JOIN Teacher ON Class.TeacherID = Teacher.TeacherID
                    LEFT JOIN TeacherAssistant ON Class.AssistantID = TeacherAssistant.AssistantID";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["ClassID"]. "</td>
                            <td>" . $row["ClassName"]. "</td>
                            <td>" . $row["TeacherName"]. "</td>
                            <td>" . $row["AssistantName"]. "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No classes found</td></tr>"; //the colspan will specifyy the number of columns a cell should span and in this case i made a header that spans upto 4 columns.
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
