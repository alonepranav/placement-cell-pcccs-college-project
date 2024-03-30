<?php 
    include("./ConnectDB.php")
?>


<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $mysqli;

    $mysqli = new mysqli($host, $user, $password, $database);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $email = $password = "";
    $email_err = $password_err = "";

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($email_err) && empty($password_err)) {
        $sql = "SELECT email, password, name, course FROM student WHERE email = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("s", $param_email);

            $param_email = $email;

            if ($stmt->execute()) {
                $stmt->store_result();

                if ($stmt->num_rows == 1) {

                    $stmt->bind_result($email, $hashed_password, $name, $course);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {

                            $_SESSION["loggedin"] = true;
                            $_SESSION["email"] = $email;
                            $_SESSION["name"] = $name;
                            $_SESSION["course"] = $course;

                            echo "<script>alert('Login Successfully'); window.location.href='index.php';</script>";
                            exit();
                        } else {
                            $password_err = "The password you entered is incorrect.";
                        }
                    }
                } else {
                    $email_err = "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
            $stmt->close();
        }
    }

    $mysqli->close();

    if (!empty($email_err) || !empty($password_err)) {
        echo "<script>alert('" . $email_err . "\\n" . $password_err . "'); window.location.href='login.php';</script>";
        exit();
    }
}
?>