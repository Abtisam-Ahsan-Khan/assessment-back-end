<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Pupils</h2>
        <?php
        include 'db.php';
        // help from youtube at https://youtu.be/Ydogcs6ImLw?si=OQp_H4a4osXF1u_d.
        // FOR Pupils 
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete_pupil_id'])) {
            $delete_id = $_GET['delete_pupil_id'];
            $delete_sql = "DELETE FROM Pupil WHERE PupilID = '$delete_id'";
            if ($conn->query($delete_sql) === TRUE) {
                echo "<p>Record deleted successfully</p>";
            } else {
                echo "<p>Error deleting record: " . $conn->error . "</p>";
            }
        }
   
        $result = $conn->query("SELECT * FROM Pupil");
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Medical Info</th><th>Class ID</th><th>Actions</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["PupilID"] . "</td>
                    <td>" . $row["Name"] . "</td>
                    <td>" . $row["Address"] . "</td>
                    <td>" . $row["MedicalInfo"] . "</td>
                    <td>" . $row["ClassID"] . "</td>
                    <td>
                        <form action='show_data.php' method='GET'>
                            <input type='hidden' name='delete_pupil_id' value='" . $row["PupilID"] . "'>
                            <input type='submit' value='Delete'>
                        </form>
                    </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
        
        <h2>Teachers</h2>
        <?php
        // FOR Teachers 
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete_teacher_id'])) {
            $delete_id = $_GET['delete_teacher_id'];
            $delete_sql = "DELETE FROM Teacher WHERE TeacherID = '$delete_id'";
            if ($conn->query($delete_sql) === TRUE) {
                echo "<p>Record deleted successfully</p>";
            } else {
                echo "<p>Error deleting record: " . $conn->error . "</p>";
            }
        }
  
        $result = $conn->query("SELECT * FROM Teacher");
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Annual Salary</th><th>Background Check</th><th>Actions</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["TeacherID"] . "</td>
                    <td>" . $row["TeacherName"] . "</td>
                    <td>" . $row["Address"] . "</td>
                    <td>" . $row["Phone"] . "</td>
                    <td>" . $row["AnnualSalary"] . "</td>
                    <td>" . $row["BackgroundCheck"] . "</td>
                    <td>
                        <form action='show_data.php' method='GET'>
                            <input type='hidden' name='delete_teacher_id' value='" . $row["TeacherID"] . "'>
                            <input type='submit' value='Delete'>
                        </form>
                    </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
        
        <h2>Parents</h2>
        <?php
        // FOR Parents 
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete_parent_id'])) {
            $delete_id = $_GET['delete_parent_id'];
            $delete_sql = "DELETE FROM ParentGuardian WHERE ParentID = '$delete_id'";
            if ($conn->query($delete_sql) === TRUE) {
                echo "<p>Record deleted successfully</p>";
            } else {
                echo "<p>Error deleting record: " . $conn->error . "</p>";
            }
        }

        $result = $conn->query("SELECT * FROM ParentGuardian");
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Email</th><th>Phone</th><th>Actions</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["ParentID"] . "</td>
                    <td>" . $row["ParentName"] . "</td>
                    <td>" . $row["Address"] . "</td>
                    <td>" . $row["Email"] . "</td>
                    <td>" . $row["Phone"] . "</td>
                    <td>
                        <form action='show_data.php' method='GET'>
                            <input type='hidden' name='delete_parent_id' value='" . $row["ParentID"] . "'>
                            <input type='submit' value='Delete'>
                        </form>
                    </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
        
        <h2>Assistants</h2>
        <?php
        // FOR Assistants
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete_assistant_id'])) {
            $delete_id = $_GET['delete_assistant_id'];
            $delete_sql = "DELETE FROM TeacherAssistant WHERE AssistantID = '$delete_id'";
            if ($conn->query($delete_sql) === TRUE) {
                echo "<p>Record deleted successfully</p>";
            } else {
                echo "<p>Error deleting record: " . $conn->error . "</p>";
            }
        }
        
        $result = $conn->query("SELECT * FROM TeacherAssistant");
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Annual Salary</th><th>Background Check</th><th>Actions</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["AssistantID"] . "</td>
                    <td>" . $row["AssistantName"] . "</td>
                    <td>" . $row["Address"] . "</td>
                    <td>" . $row["Phone"] . "</td>
                    <td>" . $row["AnnualSalary"] . "</td>
                    <td>" . $row["BackgroundCheck"] . "</td>
                    <td>
                        <form action='show_data.php' method='GET'>
                            <input type='hidden' name='delete_assistant_id' value='" . $row["AssistantID"] . "'>
                            <input type='submit' value='Delete'>
                        </form>
                    </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        
        $conn->close();
        ?>
    </div>
</body>
</html>
