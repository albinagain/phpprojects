<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

        $searchTerm = $_GET['search'];
    ?>

    <div class="container">
        <h1>Search Results</h1>
    </div>

    <div class="container">
        <h2>Table: Student</h2>
        <table class="table table-striped">
        <tr>
            <td>Student ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <?php
            
            $sqlStudent = "SELECT * FROM Student WHERE ";
            $columnsStudent = ['StudentID', 'FirstName', 'LastName', 'DateOfBirth', 'Email', 'Phone'];

            $conditionsStudent = [];
            foreach ($columnsStudent as $column) {
                $conditionsStudent[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlStudent .= implode(" OR ", $conditionsStudent);

            $resultStudent = $conn->query($sqlStudent);

            if ($resultStudent->num_rows > 0) {
                while ($row = $resultStudent->fetch_assoc()) {
                    echo "<tr><td>" .$row["StudentID"]. "</td>";
                    echo "<td>" .$row["FirstName"]. "</td>";
                    echo "<td>" .$row["LastName"]. "</td>";
                    echo "<td>" .$row["DateOfBirth"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Phone"]. "</td></tr>";
                }
            } else {
                echo "0 results from Student";
            }
        ?>
        </table>
    </div>
    
    <div class="container">
        <h2>Table: Course</h2>
        <table class="table table-striped">
        <tr>
            <td>Course ID</td>
            <td>Course Name</td>
            <td>Credits</td>
        </tr>
        <?php
            
            $sqlCourse = "SELECT * FROM Course WHERE ";
            $columnsCourse = ['CourseID', 'CourseName', 'Credits'];

            $conditionsCourse = [];
            foreach ($columnsCourse as $column) {
                $conditionsCourse[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlCourse .= implode(" OR ", $conditionsCourse);

            $resultCourse = $conn->query($sqlCourse);

            if ($resultCourse->num_rows > 0) {
                while ($row = $resultCourse->fetch_assoc()) {
                    echo "<tr><td>" .$row["CourseID"]. "</td>";
                    echo "<td>" .$row["CourseName"]. "</td>";
                    echo "<td>" .$row["Credits"]. "</td></tr>";
                }
            } else {
                echo "0 results from Course";
            }
        ?>
        </table>
    </div>

    <div class="container">
        <h2>Table: Instructor</h2>
        <table class="table table-striped">
        <tr>
            <td>Instructor ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <?php
            $sqlInstructor = "SELECT * FROM Instructor WHERE ";
            $columnsInstructor = ['InstructorID', 'FirstName', 'LastName', 'Email', 'Phone'];

            $conditionsInstructor = [];
            foreach ($columnsInstructor as $column) {
                $conditionsInstructor[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlInstructor .= implode(" OR ", $conditionsInstructor);

            $resultInstructor = $conn->query($sqlInstructor);

            if ($resultInstructor->num_rows > 0) {
                while ($row = $resultInstructor->fetch_assoc()) {
                    echo "<tr><td>" .$row["InstructorID"]. "</td>";
                    echo "<td>" .$row["FirstName"]. "</td>";
                    echo "<td>" .$row["LastName"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Phone"]. "</td></tr>";
                }
            } else {
                echo "0 results from Instructor";
            }
        ?>
        </table>
    </div>

    <div class="container">
        <h2>Table: Enrollment</h2>
        <table class="table table-striped">
        <tr>
            <td>Enrollemnt ID</td>
            <td>Student ID</td>
            <td>Course ID</td>
            <td>Enrollment Date</td>
            <td>Grade</td>
        </tr>
        <?php
            

            $sqlEnrollment = "SELECT * FROM Enrollment WHERE ";
            $columnsEnrollment = ['EnrollmentID', 'StudentID', 'CourseID', 'EnrollmentDate', 'Grade'];

            $conditionsEnrollment = [];
            foreach ($columnsEnrollment as $column) {
                $conditionsEnrollment[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlEnrollment .= implode(" OR ", $conditionsEnrollment);

            $resultEnrollment = $conn->query($sqlEnrollment);

            if ($resultEnrollment->num_rows > 0) {
                while ($row = $resultEnrollment->fetch_assoc()) {
                    echo "<tr><td>" .$row["EnrollmentID"]. "</td>";
                    echo "<td>" .$row["StudentID"]. "</td>";
                    echo "<td>" .$row["CourseID"]. "</td>";
                    echo "<td>" .$row["EnrollmentDate"]. "</td>";
                    echo "<td>" .$row["Grade"]. "</td></tr>";
                }
            } else {
                echo "0 results from Enrollment";
            }
        ?>
        </table>
    </div>

    <?php
        $conn->close();
    ?>
</body>
</html>