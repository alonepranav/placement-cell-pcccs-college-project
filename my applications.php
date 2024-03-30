



<?php
    include ("./ConnectDB.php");
?>





<?php

include ("./ConnectDB.php");

global $mysqli;

if (isset($_POST['delete_application'])) {
    $student_name = $_POST['student_name'];
    $student_email = $_POST['student_email'];
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $date = $_POST['date'];

    $sql = "DELETE FROM applications WHERE name = ? AND email = ? AND company = ? AND position = ? AND date = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $student_name, $student_email, $company_name, $position, $date);
        if ($stmt->execute()) {
            echo '<script>alert("Application deleted successfully.");</script>';
        } else {
            echo '<script>alert("Error: Failed to delete application.");</script>';
        }
        $stmt->close();
    } else {
        echo '<script>alert("Error: Failed to prepare statement.");</script>';
    }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Applications</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>

    <?php require ("./navbar.php"); ?>

    
    <?php
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
        echo "<script>window.location.href='login.php';</script>";
        exit;
    }
    ?>



    <div class="flex flex-col justify-center items-center mt-20">
        <img src="./public/user-profile.png" class="h-80 w-80" alt="">
        <div class="flex justify-center items-center flex-col gap-8">
            <p class="text-3xl font-semibold">
                <?php echo $_SESSION["name"]; ?> |
                <?php echo $_SESSION["course"]; ?>
            </p>
            <div class="flex gap-8 items-center">
                <a href="student.php">
                    <button class="font-semibold text-white rounded-md bg-sky-500 px-6 py-1.5">My Profile</button>
                </a>
            </div>
        </div>
    </div>

    <div class="py-20">

        <div class="text-center">
            <p class="text-4xl text-blue-950 font-semibold">My Applications</p>
        </div>
        <br />
        <br />
        <br />

        <div class="px-40">
            <table class="w-full   even:bg-gray-200 border-2 border-slate-300">
                <thead>
                    <tr>
                        <th class="text-left p-3.5">S.No</th>
                        <th class="text-left p-3.5">Company Name</th>
                        <th class="text-left p-3.5">Position</th>
                        <th class="text-left p-3.5">Drive Date</th>
                        <th class="text-left p-3.5">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        global $mysqli;
                        $student_email = $_SESSION['email']; // Assuming the session variable is 'email'

                        // Prepare SQL query to retrieve application information for the logged-in student
                        $sql = "SELECT name, email, course, company, date, position FROM applications WHERE email = ?";
                        $stmt = $mysqli->prepare($sql);

                        if ($stmt) {
                            // Bind parameters and execute the statement
                            $stmt->bind_param("s", $student_email);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                $i = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $i++;
                                    echo '<tr class="' . ($i % 2 == 0 ? 'even:bg-slate-50' : 'odd:bg-slate-200') . '">';
                                    echo '<td class="p-3.5"><p class="text-lg">' . $i . '</p></td>';
                                    echo '<td class="p-3.5"><p class="text-lg">' . $row["company"] . '</p></td>';
                                    echo '<td class="p-3.5"><p class="text-lg">' . $row["position"] . '</p></td>';
                                    echo '<td class="p-3.5"><p class="text-lg">' . $row["date"] . '</p></td>';
                                    echo '<td class="p-3.5">';
                                    echo '<form method="post">';
                                    echo '<input type="hidden" name="student_name" value="' . $_SESSION["name"] . '">';
                                    echo '<input type="hidden" name="student_email" value="' . $_SESSION["email"] . '">';
                                    echo '<input type="hidden" name="company_name" value="' . $row["company"] . '">';
                                    echo '<input type="hidden" name="position" value="' . $row["position"] . '">';
                                    echo '<input type="hidden" name="date" value="' . $row["date"] . '">';
                                    echo '<button type="submit" name="delete_application" class="px-5 py-1.5 rounded-md text-sm bg-rose-500 text-white font-semibold">Delete Application</button>';
                                    echo '</form>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo "<tr><td colspan='5'>No applications found for this student.</td></tr>";
                            }

                            $stmt->close();
                        } else {
                            echo "<tr><td colspan='5'>Error: Failed to prepare statement.</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <?php require ("./footer.php"); ?>

</body>
</html>
