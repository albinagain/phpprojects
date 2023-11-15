<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Connect</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentrecord";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
    <table>
        <tr>
            <td>Student ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <?php
            $sqlStudent = "SELECT * FROM Student";
            $resultStudent = $conn->query($sqlStudent);

            if ($resultStudent){
                echo "Table: Student<br><br>";
                while ($row = $resultStudent->fetch_assoc()) {
                    echo "<tr><td>" .$row["StudentID"]. "</td>";
                    echo "<td>" .$row["FirstName"]. "</td>";
                    echo "<td>" .$row["LastName"]. "</td>";
                    echo "<td>" .$row["DateOfBirth"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Phone"]. "</td></tr>";
                }
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        ?>
    </table>

    <table>
        <tr>
            <td>Course ID</td>
            <td>Course Name</td>
            <td>Credits</td>
        </tr>
        <?php
        echo "<br>";
            $sqlCourse = "SELECT * FROM Course";
            $resultCourse = $conn->query($sqlCourse);

            if ($resultCourse){
                echo "Table: Course<br><br>";
                while ($row = $resultCourse->fetch_assoc()) {
                    echo "<tr><td>" .$row["CourseID"]. "</td>";
                    echo "<td>" .$row["CourseName"]. "</td>";
                    echo "<td>" .$row["Credits"]. "</td></tr>";
                }
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        ?>
    </table>
</body>
</html>