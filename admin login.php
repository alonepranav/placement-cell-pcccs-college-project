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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["email"] === "a@gmail.com" && $_POST["password"] === "123") {
            $_SESSION["adminloggedin"] = true;
            echo "<script>alert('Login Successfully'); window.location.href='admin.php';</script>";
            exit;
        } else {
            echo "<script>alert('Incorrect email or password. Please try again.'); window.location.href='admin.php';</script>";
        }
    }
    ?>


    <div class="flex justify-center items-center h-screen">
        <div class='flex gap-10 md:gap-20 flex-wrap justify-center items-center py-10 md:py-20'>
            <img class='h-96' src="./public/admin/admin-login.png" alt="" />

            <form 
            method="POST"
            class="p-5 h-fit w-full mx-3 md:w-96 border border-slate-700 rounded-md">
                <p class='text-2xl font-semibold'>Admin Login</p>
                <br />
                <div class="mt-2 mb-8">
                    <input name="email" required type="email" placeholder="Enter Email"
                        class="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div class="mt-2">
                    <input name="password" required type="password" placeholder="Enter password"
                        class="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div class="flex justify-center items-center mt-9">
                    <button type="submit"
                        class="px-10 text-white text-lg tracking-wide font-semibold py-1.5 bg-blue-950 rounded-md">Login</button>
                </div>
            </form>
        </div>
    </div>



    <?php require ("./footer.php"); ?>

</body>

</html>