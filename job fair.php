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

        <div class='bg-[url(./public/hero.webp)] h-96 bg-center bg-cover flex flex-col justify-center items-center text-white mt-[4.5rem]'>
            <p class='text-5xl font-bold mt-3 text-center leading-tight'>
                Job Fair
            </p>
            <p class="text-2xl font-semibold mt-3">
                Activity for Placements & Internships
            </p>
        </div>

        <div class="md:px-10 lg:px-20 mx-5">

            <div class="flex justify-between items-center gap-20 flex-col md:flex-row py-20">
                <div class=" md:w-2/3">
                    <p class="text-5xl font-semibold text-blue-950 mb-7">About Job Fair</p>
                    <p class="text-stone-700 text-lg">
                        <span class="font-semibold">PRATIBHA JOB FAIR </span>
                        is an initiative to provide a platform to students and employers to come together under one
                        roof. Pratibha Group is pioneer to start JOB FAIR in the Pimpri Chinchwad Municipal Corporation
                        area in 2009. PCMC is an industrial hub. Pratibha Job Fair acts as a bridge to connect the
                        companies and students, where students get an opportunity to get job and can understand the
                        skill set required to get a desired job. Even employers get a chance to approach fresh talent.
                        This is a mega platform for jobseekers, recruiters and our students to achieve their goals.
                        <br />
                        Objectives:-
                        <br />
                        -To provide a common platform for students across Maharashtra to find suitable jobs and for
                        employers to select deserving candidates for their job profile.
                        <br />
                        -To provide an opportunity to students, teachers and administrators to implement mega events.
                        <br />
                        -To inculcate managerial skills among students.
                    </p>
                </div>

                <div class="flex justify-center items-center">
                    <img src="./public/job fair/jobfair.jpg" alt="" class="h-[30rem] w-[37rem] object-cover" />
                </div>
            </div>


            <div class="mb-10">
                <p class="text-5xl font-semibold text-blue-950 mb-7 text-center md:text-left">Analysis - Job Fair
                </p>
                <br />
                <br />
                <br />
                <div class="flex justify-center md:justify-start items-center flex-wrap gap-10 md:gap-14">
                    <div class="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2">
                        <img class="h-72 w-72" src="./public/job fair/analysis 1.png" alt="" />
                        <p class="text-2xl">Companies Participated</p>
                    </div>
                    <div class="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2">
                        <img class="h-72 w-72" src="./public/job fair/analysis 1.png" alt="" />
                        <p class="text-2xl">Companies Participated</p>
                    </div>
                    <div class="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2">
                        <img class="h-72 w-72" src="./public/job fair/analysis 1.png" alt="" />
                        <p class="text-2xl">Companies Participated</p>
                    </div>
                    <div class="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2">
                        <img class="h-72 w-72" src="./public/job fair/analysis 1.png" alt="" />
                        <p class="text-2xl">Companies Participated</p>
                    </div>
                </div>
            </div>

            <div class="">
                <p class="text-5xl font-semibold text-center md:text-left text-blue-950 mb-7">Report Of Job </p>

                <div class="flex gap-10 justify-center md:justify-start">

                    <div class="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2 w-fit">
                        <img class="h-40 w-52" src="./public/pdf-icon.jpg" alt="" />
                        <p class="text-2xl">Report 2017</p>
                    </div>

                    <div class="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2 w-fit">
                        <img class="h-40 w-52" src="./public/pdf-icon.jpg" alt="" />
                        <p class="text-2xl">Report 2017</p>
                    </div>
                </div>

            </div>

            <br />
            <br />
            <br />
        </div>
    </div>


    <?php require ("./footer.php"); ?>

</body>

</html>