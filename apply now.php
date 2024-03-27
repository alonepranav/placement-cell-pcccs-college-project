<?php
session_start();

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve student data from session
    $student_name = $_SESSION["name"];
    $student_email = $_SESSION["email"];
    $student_course = $_SESSION["course"];

    // Retrieve company data from form submission
    $company_name = $_POST["company_name"];
    $drive_date = $_POST["drive_date"];
    $position = $_POST["position"];

    // Database connection
    $host = "localhost";
    $user = "id21731308_star";
    $password = "@Pranav173";
    $database = "id21731308_placement";

    $mysqli = new mysqli($host, $user, $password, $database);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Insert application data into the database
    $sql = "INSERT INTO applications (name, email, course, company, position, date) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssss", $student_name, $student_email, $student_course, $company_name, $position, $drive_date);
        $stmt->execute();
        echo "<script>alert('Applied Successfully');</script>";
    } else {
        echo "<script>alert('Error in application');</script>";
    }

    $stmt->close();
    $mysqli->close();
} else {
    echo "Invalid request"; // Echo "Invalid request" if the request method is not POST
}
?>