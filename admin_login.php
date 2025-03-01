<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to Database
    $conn = new mysqli("localhost", "root", "", "student_teacher_booking");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate User
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='admin'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login Successful";
        // Redirect to admin dashboard
        header("Location: admin_dashboard.php");
    } else {
        echo "Invalid Credentials";
    }

    $conn->close();
}
?>
