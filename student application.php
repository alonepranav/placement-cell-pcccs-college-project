<?php 
    include("./ConnectDB.php")
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



    <?php
    if (!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] === false) {
        echo "<script>window.location.href='admin login.php';</script>";
        exit;
    }
    ?>


    <div>
        <div class='py-10 px-20'>

     
        <div class="mt-20">
            <p class="text-3xl font-semibold"><a href="admin.php" class="text-blue-600 underline">Admin</a>  / Student Application</p>
        </div>
<!-- 
            <div class="mt-10 flex gap-5">

                <a href='admin.php' class='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>Admin</a>
                <a href='' class='px-6 py-1.5 bg-amber-500 rounded-md text-white font-semibold'>Refresh</a>
            </div> -->

            <div class="mt-10">

                <table class="w-full   even:bg-gray-200 border-2 border-slate-300">
                    <thead>
                        <tr>
                            <th class="text-left p-3.5">S.No</th>
                            <th class="text-left p-3.5">Name</th>
                            <th class="text-left p-3.5">Email</th>
                            <th class="text-left p-3.5">Course</th>
                            <th class="text-left p-3.5">Company Name</th>
                            <th class="text-left p-3.5">Position</th>
                            <th class="text-left p-3.5">Drive Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        global $mysqli;

                        $sql = "SELECT name, email, course, company, date, position FROM applications";
                        $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            $i = 0;
                            while ($row = $result->fetch_assoc()) {
                                $i++;
                                echo '<tr class="' . ($i % 2 == 0 ? 'even:bg-slate-50' : 'odd:bg-slate-200') . '">';
                                echo '<td class="p-3.5"><p class="text-lg">' . $i . '</p></td>';
                                echo '<td class="p-3.5"><p class="text-lg">' . $row["name"] . '</p></td>';
                                echo '<td class="p-3.5"><p class="text-lg">' . $row["email"] . '</p></td>';
                                echo '<td class="p-3.5"><p class="text-lg">' . $row["course"] . '</p></td>';
                                echo '<td class="p-3.5"><p class="text-lg">' . $row["company"] . '</p></td>';
                                echo '<td class="p-3.5"><p class="text-lg">' . $row["date"] . '</p></td>';
                                echo '<td class="p-3.5"><p class="text-lg">' . $row["position"] . '</p></td>';
                                echo '</tr>';
                            }
                        }

                        // Close database connection
                        $mysqli->close();
                        ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>


    <?php require ("./footer.php"); ?>

</body>

</html>