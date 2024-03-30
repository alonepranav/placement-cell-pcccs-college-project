<?php
include("./ConnectDB.php");
    ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $mysqli;

    $name = $email = $course = $password = "";
    $name_err = $email_err = $course_err = $password_err = "";

    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = trim($_POST["name"]);
    }

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        // Prepare a select statement to check if email already exists
        $sql = "SELECT * FROM student WHERE email = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $email_err = "This email is already taken.";
                } else {
                    echo "adasdasdad";
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
                exit(); // Exit if database operation fails
            }

            // Close statement
            $stmt->close();
        }
    }

    // Validate course
    if (empty(trim($_POST["course"]))) {
        $course_err = "Please select your course.";
    } else {
        $course = trim($_POST["course"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }
    echo "adasdasdad";

    // Check if there are any input errors before inserting into database
    if (empty($name_err) && empty($email_err) && empty($course_err) && empty($password_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO student (name, email, course, password) VALUES (?, ?, ?, ?)";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_name, $param_email, $param_course, $param_password);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_course = $course;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Registration successful, redirect to login page
                echo "adasdasdad";
                echo "<script>alert('Student Registered'); window.location.href='login.php';</script>";
                exit(); // Exit after redirection
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    } else {
        // If email already exists, show alert and redirect back to registration page
        if (!empty($email_err)) {
            echo "<script>alert('Email already taken'); window.location.href='login.php';</script>";
            exit(); // Exit after redirection
        }
    }

    // Close database connection
    $mysqli->close();
}
?>