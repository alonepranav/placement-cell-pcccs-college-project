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


    <div>
        <div
            class='bg-[url(./public/hero.webp)] h-96 bg-center bg-cover flex flex-col justify-center items-center text-white mt-[4.5rem]'>
            <p class='text-5xl font-bold mt-3 text-center leading-tight'>
                <span class="text-2xl font-normal">
                    Welcome
                    <br />
                </span>
                Danny Wadje
            </p>
        </div>

        <div class="py-20">

            <div class="text-center">
                <p class="text-4xl text-blue-950 font-semibold">Upcoming Comapnies</p>
            </div>
            <br />
            <br />
            <br />
            <div class="flex flex-col gap-5 px-20">

                <div class="border border-slate-700 rounded-md w-full p-3 py-5 items-center">
                    <div class="">
                        <p class="text-3xl font-semibold">Infosys</p>
                        <p class="mt-1">Drive Date : 7/12/2024</p>
                    </div>
                    <div class="text-2xl mt-4">
                        <p class="text-stone-500">Open Position :
                            <span class="font-semibold text-black">
                                Android Developer
                            </span>
                        </p>
                    </div>
                    <div class="mt-6">
                        <button class="text-white font-semibold px-7 py-2 bg-blue-600 rounded-md">Apply Now</button>
                    </div>
                </div>

            </div>
        </div>

    </div>




    <?php require ("./footer.php"); ?>


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