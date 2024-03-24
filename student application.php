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
                <a href='admin.php' class='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>Admin</a>
                <a href='' class='px-6 py-1.5 bg-amber-500 rounded-md text-white font-semibold'>Refresh</a>
            </div>

            <div class="mt-10">

                <table class="w-full   even:bg-black border-2 border-slate-300">
                    <thead>
                        <tr>
                            <th class="text-left p-3.5">S.No</th>
                            <th class="text-left p-3.5">Name</th>
                            <th class="text-left p-3.5">Email</th>
                            <th class="text-left p-3.5">Class</th>
                            <th class="text-left p-3.5">Company Name</th>
                            <th class="text-left p-3.5">Position</th>
                            <th class="text-left p-3.5">Drive Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even:bg-slate-50 odd:bg-slate-200">
                            <td class="p-3.5">
                                <p class="text-lg ">{i + 1}</p>
                            </td>
                            <td class="p-3.5">
                                <p class="text-lg ">Danny Wadje</p>
                            </td>
                            <td class="p-3.5">
                                <p class="text-lg ">dnyaneshwarwadje88@gmail.com</p>
                            </td>
                            <td class="p-3.5">
                                <p class="text-lg ">TY BSC (CS)</p>
                            </td>
                            <td class="p-3.5">
                                <p class="text-lg ">Amazon</p>
                            </td>
                            <td class="p-3.5">
                                <p class="text-lg ">Backend Developer</p>
                            </td>
                            <td class="p-3.5">
                                <p class="text-lg ">2/3/4</p>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>

   <p class='text-3xl font-semibold px-20'>No student present</p> 

    </div>





    <?php require ("./footer.php"); ?>

</body>

</html>