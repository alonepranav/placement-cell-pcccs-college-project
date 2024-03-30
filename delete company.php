<?php

include ("./ConnectDB.php");

if (isset($_POST['delete_name']) && isset($_POST['delete_position'])) {
    $delete_name = $_POST['delete_name'];
    $delete_position = $_POST['delete_position'];

    $sql = "DELETE FROM companies WHERE name = ? AND position = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $delete_name, $delete_position);
        if ($stmt->execute()) {
            echo '<script>alert("Company deleted successfully.");window.location.href="admin.php";</script>';
        } else {
            echo '<script>alert("Error: Failed to delete company.");window.location.href="admin.php";</script>';
        }
        $stmt->close();
    } else {
        echo '<script>alert("Error: Failed to prepare statement.");</script>';
    }
}

?>