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
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
        echo "<script>window.location.href='login.php';</script>";
        exit;
    }
    ?>

    <div>

        <div class="flex flex-col justify-center items-center mt-20">
            <img src="./public/user-profile.png" class="h-80 w-80" alt="">
            <div class="flex justify-center items-center flex-col gap-8">
                <p class="text-3xl font-semibold">
                    <?php echo $_SESSION["name"]; ?> |
                    <?php echo $_SESSION["course"]; ?>
                </p>
                <button id="logoutBtn" class="font-semibold text-white rounded-md bg-rose-500 px-8 py-2 text-lg">Log
                    Out</button>
            </div>
        </div>

        <div class="py-20">

            <div class="text-center">
                <p class="text-4xl text-blue-950 font-semibold">Upcoming Comapnies</p>
            </div>
            <br />
            <br />
            <br />
            <div class="flex flex-col gap-5 px-20">


                <?php
                $host = "localhost";
                $user = "id21731308_star";
                $password = "@Pranav173";
                $database = "id21731308_placement";

                $mysqli = new mysqli($host, $user, $password, $database);

                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                $sql = "SELECT name, date, position FROM companies";
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
                        echo '<button  data-companyname="' . $row["name"] . '" data-date="' . $row["date"] . '" data-position="' . $row["position"] . '" class="text-white font-semibold px-7 py-2 bg-blue-600 rounded-md apply-now-button">Apply Now</button>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No companies found.";
                }

                $mysqli->close();
                ?>
            </div>
        </div>

    </div>

    <?php require ("./footer.php"); ?>

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const applyButtons = document.querySelectorAll('.apply-now-button');

            applyButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    const company_name = button.dataset.companyname;
                    const drive_date = button.dataset.date;
                    const position = button.dataset.position;

                    try {
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', 'apply now.php', true);
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                        xhr.onload = function () {
                            if (xhr.status === 200) {
                                alert('Application submitted successfully!');
                            }
                            else {
                                alert('Failed to submit application.');
                            }
                        };
                        xhr.send(`company_name=${company_name}&drive_date=${drive_date}&position=${position}`);
                    } catch (error) {
                        alert('Error');
                    }

                });
            });
        });

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('logoutBtn').addEventListener('click', function () {
                window.location.href = 'logout.php';
            });
        });
    </script>


    <script>
        const toggleForm = () => {
            const login = document.querySelector('.login')
            const register = document.querySelector('.register')

            if (register.classList.contains("my-login-toggle-class")) {
                register.classList.remove("my-login-toggle-class")
                login.classList.add("hidden")
            }
            else {
                register.classList.add("my-login-toggle-class")
                login.classList.remove("hidden")
            }
        }
    </script>

</body>

</html>