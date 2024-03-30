<?php
include ("./ConnectDB.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>

    <?php require ("./navbar.php"); ?>


    <div class="p-10 mt-20 px-20">
        <p class="text-3xl font-semibold"><a href="admin.php" class="text-blue-600 underline">Admin</a>  / Contact Messages</p>

        <div class="mt-10">
            <table class="w-full   even:bg-gray-200 border-2 border-slate-300">
                <thead>
                    <tr>
                        <th class="text-left p-3.5">S.No</th>
                        <th class="text-left p-3.5">Name</th>
                        <th class="text-left p-3.5">Email</th>
                        <th class="text-left p-3.5">Phone</th>
                        <th class="text-left p-3.5">Subject</th>
                        <th class="text-left p-3.5">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    global $mysqli;

                    $sql = "SELECT name, email, phone, subject, message FROM contactmessage";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                        $i = 0;
                        while ($row = $result->fetch_assoc()) {
                            $i++;
                            echo '<tr class="' . ($i % 2 == 0 ? 'even:bg-slate-50' : 'odd:bg-slate-200') . '">';
                            echo '<td class="p-3.5"><p class="text-lg">' . $i . '</p></td>';
                            echo '<td class="p-3.5"><p class="text-lg">' . $row["name"] . '</p></td>';
                            echo '<td class="p-3.5"><p class="text-lg">' . $row["email"] . '</p></td>';
                            echo '<td class="p-3.5"><p class="text-lg">' . $row["phone"] . '</p></td>';
                            echo '<td class="p-3.5"><p class="text-lg">' . $row["subject"] . '</p></td>';
                            echo '<td class="p-3.5"><p class="text-lg">' . $row["message"] . '</p></td>';
                            echo '</tr>';
                        }
                    }
                    $mysqli->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php require ("./footer.php"); ?>

</body>

</html>