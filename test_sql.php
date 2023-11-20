<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Connect</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        #StudentForm {
            display: none;
        }
        #CourseForm {
            display: none;
        }
        #InstructorForm {
            display: none;
        }
        #EnrollmentForm {
            display: none;
        }
    </style>
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

    <!-- Student Table  -->

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
                $sqlStudent = "SELECT * FROM Student";
                $resultStudent = $conn->query($sqlStudent);

                if ($resultStudent){
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
        <button onclick="toggleFormStudent()">Add</button>
    
        <form id="StudentForm" method="post" action="add_entity.php">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="date" name="date_of_birth" placeholder="Date of Birth" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="submit" name="student_add" value="Add Student">
        </form>

        <script>
            function toggleFormStudent() {
                var form = document.getElementById("StudentForm");
                if (form.style.display === "none") {
                    form.style.display = "block";
                } else {
                    form.style.display = "none";
            }
            }

        </script>
    </div>

    <!-- Course Table -->

    <div class="container">
        <h2>Table: Course</h2>
        <table class="table table-striped">
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

        <button onclick="toggleFormCourse()">Add</button>
    
        <form id="CourseForm" method="post" action="add_entity.php">
            <input type="text" name="course_name" placeholder="Course Name" required>
            <input type="text" name="credits" placeholder="Credits" required>
            <input type="submit" name="course_add" value="Add Course">
        </form>

        <script>
            function toggleFormCourse() {
                var form = document.getElementById("CourseForm");
                if (form.style.display === "none") {
                    form.style.display = "block";
                } else {
                    form.style.display = "none";
            }
            }

        </script>
    </div>

    <!-- Instructor Table -->

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
                echo "<br>";
                $sqlInst = "SELECT * FROM Instructor";
                $resultInst = $conn->query($sqlInst);

                if ($resultInst){
                    while ($row = $resultInst->fetch_assoc()) {
                        echo "<tr><td>" .$row["InstructorID"]. "</td>";
                        echo "<td>" .$row["FirstName"]. "</td>";
                        echo "<td>" .$row["LastName"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Phone"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>

        <button onclick="toggleFormInstructor()">Add</button>
    
        <form id="InstructorForm" method="post" action="add_entity.php">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="submit" name="instructor_add" value="Add Instructor">
        </form>

        <script>
            function toggleFormInstructor() {
                var form = document.getElementById("InstructorForm");
                if (form.style.display === "none") {
                    form.style.display = "block";
                } else {
                    form.style.display = "none";
            }
            }

        </script>
    </div>
    
    <!-- Enrollment Table -->

    <div class="container">
        <h2>Table: Enrollment</h2>
        <table class="table table-striped">
            <tr>
                <td>Enrollment ID</td>
                <td>Student ID</td>
                <td>Course ID</td>
                <td>Enrollemnt Date</td>
                <td>Grade</td>

            </tr>
            <?php
                echo "<br>";
                $sqlEnroll = "SELECT * FROM Enrollment";
                $resultEnroll = $conn->query($sqlEnroll);

                if ($resultEnroll){
                    while ($row = $resultEnroll->fetch_assoc()) {
                        echo "<tr><td>" .$row["EnrollmentID"]. "</td>";
                        echo "<td>" .$row["StudentID"]. "</td>";
                        echo "<td>" .$row["CourseID"]. "</td>";
                        echo "<td>" .$row["EnrollmentDate"]. "</td>";
                        echo "<td>" .$row["Grade"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            ?>
        </table>

        <button onclick="toggleFormEnrollment()">Add</button>
    
        <form id="EnrollmentForm" method="post" action="add_entity.php">
            <input type="text" name="student_id" placeholder="Student ID" required>
            <input type="text" name="course_id" placeholder="Course ID" required>
            <input type="date" name="enrollment_date" placeholder="Enrollment Date" required>
            <input type="text" name="grade" placeholder="Grade">
            <input type="submit" name="enrollment_add" value="Add Enrollment">
        </form>

        <script>
            function toggleFormEnrollment() {
                var form = document.getElementById("EnrollmentForm");
                if (form.style.display === "none") {
                    form.style.display = "block";
                } else {
                    form.style.display = "none";
            }
            }

        </script>
    </div>
    
</body>
</html>