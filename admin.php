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
        <div class='py-10 px-20'>

            <div class="text-3xl font-semibold tracking-wider">
                <p>Admin</p>
            </div>

            <div class="mt-10 flex gap-5">
                <a href='add companies.php' class='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>Add
                    Companies</a>
                <a href='student application.php'
                    class='px-6 py-1.5 bg-emerald-500 rounded-md text-white font-semibold'>Student Application</a>
                <button id="logout" class='px-6 py-1.5 bg-red-500 rounded-md text-white font-semibold'>Log
                    Out</button>
            </div>

            <div class="mt-10 flex flex-col gap-6">


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
                        <button class="text-white font-semibold px-5 py-1.5 bg-rose-600 rounded-md">Delete
                            Company</button>
                    </div>
                </div>

            </div>
        </div>

         <p class='text-3xl font-semibold px-20'>No companies present</p> 

    </div>



    <?php require ("./footer.php"); ?>

</body>

</html>