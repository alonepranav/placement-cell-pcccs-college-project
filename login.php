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



    <div class="flex justify-center items-center h-screen">

        <!-- ---------------------------------------------------------------------------------- -->
        <div class='login flex gap-10 md:gap-20 flex-wrap justify-center items-center py-10 md:py-20'>
            <img class='h-96' src="./public/login/student-login.jpg" alt="" />

            <form action="db.student login.php" method="POST" class="p-5 h-fit w-full mx-3 md:w-96 border border-slate-700 rounded-md">
                <p class='text-2xl font-semibold'>Student Login</p>
                <br />
                <div class="mt-2 mb-8">
                    <input required name="email" type="email" placeholder="Enter Email"
                        class="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div class="mt-2">
                    <input required name="password" type="password" placeholder="Enter password"
                        class="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div class="flex justify-center items-center mt-9">
                    <button type="submit"
                        class="px-10 text-white text-lg tracking-wide font-semibold py-1.5 bg-blue-950 rounded-md">Login</button>
                </div>

                <div class="flex justify-center items-center mt-5">
                    <p>Dont have an account ? <span onclick="toggleForm()"
                            class="text-blue-700 cursor-pointer font-semibold tracking-wide underline">Register</span>
                    </p>
                </div>
            </form>
        </div>
        <!-- ---------------------------------------------------------------------------------- -->

        <!-- ---------------------------------------------------------------------------------- -->
        <div
            class='register flex my-login-toggle-class gap-10 md:gap-20 flex-wrap justify-center items-center py-10 md:py-20'>
            <img class='h-96' src="./public/student-registration/std-reg.png" alt="" />

            <form action="./student_register_db.php" method="POST"
                class="p-5 h-fit w-full mx-3 md:w-96 border border-slate-700 rounded-md">
                <p class='text-2xl font-semibold'>Student Registration</p>
                <br />
                <div class="mt-2 mb-4">
                    <input required name="name" type="text" placeholder="Enter Name"
                        class="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div class="mt-2 mb-4">
                    <input required name="email" type="email" placeholder="Enter Email"
                        class="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div class="mt-2 mb-4">
                    <select class="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full"
                        name="course">
                        <option value="">Select Option</option>
                        <option value="Ty">TY BSC CS</option>
                        <option value="Sy">SY BSC CS</option>
                        <option value="Fy">FY BSC CS</option>
                    </select>
                </div>
                <div class="mt-2">
                    <input required minlength="7" name="password" type="password" placeholder="Enter password"
                        class="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div class="flex justify-center items-center mt-9">
                    <button type="submit"
                        class="px-10 text-white text-lg tracking-wide font-semibold py-1.5 bg-blue-950 rounded-md">Register</button>
                </div>

                <div class="flex justify-center items-center mt-5">
                    <p>Already have an account ? <span
                            class="text-blue-700 cursor-pointer font-semibold tracking-wide underline"
                            onclick="toggleForm()">Login</span></p>
                </div>

            </form>
        </div>
        <!-- ---------------------------------------------------------------------------------- -->

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