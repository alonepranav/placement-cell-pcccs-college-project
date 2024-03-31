<?php
include ("./ConnectDB.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement-PCCCS</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>

    <?php require ("./navbar.php"); ?>


    <?php
    if (!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] === false) {
        echo "<script>window.location.href='admin login.php';</script>";
        exit;
    }
    ?>

    <div>
        <div class='py-10 px-20'>

            <div class="text-3xl font-semibold tracking-wider">
                <p>Admin</p>
            </div>

            <div class="mt-10 flex gap-5">
                <a href='add companies.php' class='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>Add
                    Companies</a>
                <a href='contact messages.php'
                    class='px-6 py-1.5 bg-amber-400 rounded-md text-white font-semibold'>Contact Message</a>
                <a href='student application.php'
                    class='px-6 py-1.5 bg-emerald-500 rounded-md text-white font-semibold'>Student Application</a>
                <button id="logout" class='px-6 py-1.5 bg-red-500 rounded-md text-white font-semibold'>Log
                    Out</button>
            </div>

            <div class="mt-10 flex flex-col gap-6">
                <?php
                global $mysqli;

                $sql = "SELECT * FROM companies";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="border border-slate-700 rounded-md w-full p-3 py-5 items-center">';
                        echo '<div class="">';
                        echo '<p class="text-3xl font-semibold">' . $row["name"] . '</p>';
                        echo '<p class="mt-1">Drive Date : ' . $row["date"] . '</p>';
                        echo '</div>';
                        echo '<div class="text-2xl mt-4">';
                        echo '<p class="text-stone-500">Open Position : <span class="font-semibold text-black">' . $row["position"] . '</span></p>';
                        echo '</div>';
                        echo '<div class="mt-6">';
                        echo '<form method="POST" action="delete company.php">';
                        echo '<input type="hidden" name="delete_name" value="' . $row["name"] . '">';
                        echo '<input type="hidden" name="delete_position" value="' . $row["position"] . '">';
                        echo '<button type="submit" class="text-white font-semibold px-5 py-1.5 bg-rose-600 rounded-md" onclick="return confirm(\'Are you sure you want to delete this company?\')">Delete Company</button>';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p class='text-3xl font-semibold'>No companies present</p>";
                }
                $mysqli->close();
                ?>
            </div>
        </div>


    </div>


    <?php require ("./footer.php"); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('logout').addEventListener('click', function () {
                window.location.href = 'logout.php';
            });
        });
    </script>

</body>

</html>