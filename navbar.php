
 

<nav
    class='flex fixed top-0 left-0 w-screen bg-white justify-between items-center px-10 shadow-md shadow-slate-300 py-2'>

    <a href="index.php">
        <img src="./public/logo.jpeg" alt="" class='h-14 w-48' />
    </a>

    <ul class='nav-ul flex gap-10'>
    </ul>

</nav>


<script>
    const links = [
        "index.php",
        "about.php",
        "job fair.php",
        "pool campus.php",
        "contact.php",
        "login.php",
        "student.php",
        "admin login.php",
        "admin.php",
    ]

    const nav_ul = document.querySelector(".nav-ul")

    links.forEach((a) => {
        nav_ul.insertAdjacentHTML("beforeend",`<a class="capitalize text-lg" href="${a}">${a === "index.php" ? "home" : a.replace(".php", "")}</a>`)
    })

</script>