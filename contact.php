<?php
include ("./ConnectDB.php");
?>


<?php
include ("./ConnectDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    global $mysqli;

    $sql = "INSERT INTO contactmessage (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    if ($stmt->execute([$name, $email, $phone, $subject, $message])) {
        echo "<script> alert('Message sent to admin')</script>";
    } else {
        echo "<script> alert('Error in sending message to admin')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>

    <?php require ("./navbar.php"); ?>


    <div>
        <div
            class='bg-[url(./public/hero.webp)] h-96 bg-center bg-cover flex flex-col justify-center items-center text-white mt-[4.5rem]'>
            <p class='text-5xl font-bold mt-3 text-center leading-tight'>
                Contact Us
            </p>
        </div>

        <div class="px-40 py-20">
            <p class="text-xl">Have more questions?</p>
            <p class="text-5xl font-bold">Connect With Us?</p>

            <div class="">
                <div class="mt-10">
                    <p class='flex gap-3 items-center mt-2'>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Block D- III, Plot no. 3, Behind Mehta Hospital,
                            Off Pune Mumbai Road Chinchwad, station, Pune, Maharashtra 411019</span>
                    </p>
                    <p class='flex gap-3 items-center mt-2'>
                        <i class="bi bi-telephone-fill"></i>
                        <span>8600100945</span>
                    </p>
                    <p class='flex gap-3 items-center mt-2'>
                        <i class="bi bi-telephone-fill"></i>
                        <span>8600100945</span>
                    </p>
                    <p class='flex gap-3 items-center mt-2'>
                        <i class="bi bi-envelope-fill"></i>
                        <span>asdjnajskdkasjb.com</span>
                    </p>
                </div>
            </div>

            <div class="mt-8">
                <p class="py-2 text-xl font-semibold">Social Media</p>
                <div class="flex gap-8 items-center text-2xl">
                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>

            <form action="contact.php" method="POST" class="mt-10">
                <div class="">
                    <p class="text-2xl"> Your Details</p>
                    <p class=""> Let us know how to get back to you.</p>
                </div>
                <br />
                <div class="mb-9">
                    <input type="text" name="name" placeholder="Enter Name" required
                        class="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full" />
                </div>
                <div class="mb-9">
                    <input type="text" name="email" placeholder="Enter Email" required
                        class="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full" />
                </div>
                <div class="mb-9">
                    <input type="text" name="phone" placeholder="Enter Phone" required
                        class="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full" />
                </div>
                <div class="mb-9">
                    <input type="text" name="subject" placeholder="Enter Subject" required
                        class="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full" />
                </div>
                <div class="mb-9">
                    <textarea name="message" placeholder="Enter Subject" required
                        class="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full"
                        rows={4}></textarea>
                </div>
                <div class="flex justify-center items-center">
                    <button type="submit"
                        class="px-10 text-white text-lg tracking-wide font-semibold py-2 bg-blue-950 rounded-md">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <?php require ("./footer.php"); ?>

</body>

</html>