<!DOCTYPE html>
<html>
<head>
    <title>Show/Hide Form</title>
    <style>
        /* Initially hide the form */
        #myForm {
            display: none;
        }
    </style>
</head>
<body>
    <button onclick="toggleForm()">Show Form</button>
    
    <form id="myForm" method="post" action="add_entity.php">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="date" name="date_of_birth" placeholder="Date of Birth" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="submit" name="student_add" value="Add Student">
    </form>

    <script>
        function toggleForm() {
            var form = document.getElementById("myForm");
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }

    </script>
</body>
</html>