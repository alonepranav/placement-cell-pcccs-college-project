<?php

$host = "localhost";
$user = "id21731308_star";
$password = "@Pranav173";
$database = "id21731308_placement";

// $host = "localhost";
// $user = "root";
// $password = ""; 
// $database = "placement";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>