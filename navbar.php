<nav
    class='flex fixed top-0 left-0 w-screen bg-white justify-between items-center px-10 shadow-md shadow-slate-300 py-2'>
    <a href="index.php">
        <img src="./public/logo.jpeg" alt="" class='h-14 w-48' />
    </a>
    <ul class='nav-ul flex gap-10'>
        <?php

        session_start();

        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
            echo "<a class='capitalize text-lg' href='student.php'>Student</a>";
        } else {
            echo "<a class='capitalize text-lg' href='login.php'>Login</a>";
        }
        ?>
    </ul>
</nav>

<script>
    window.onload = () => {
        console.log("first")
        const nav_ul_a = document.querySelectorAll(".nav-ul a")
        nav_ul_a.forEach((a) => {
            if (location.pathname.replace("%20", " ").includes(a.getAttribute("href")) ||
                (a.getAttribute("href") == "index.php" && location.pathname.endsWith("/")))
                a.setAttribute("class", "capitalize text-xl font-bold underline")
            else
                a.setAttribute("class", "capitalize text-xl text-black")
        });
    }

    const links = [
        "index.php",
        "about.php",
        "job fair.php",
        "pool campus.php",
        "contact.php",
    ]

    const nav_ul = document.querySelector(".nav-ul")

    links.reverse().forEach((a) => {
        nav_ul.insertAdjacentHTML("afterbegin", `<a  href="${a}">${a === "index.php" ? "home" : a.replace(".php", "")}</a>`)
    })
</script>