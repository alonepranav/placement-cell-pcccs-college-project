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


    <div class="">
        <br />
        <br />

        <div class="p-10">
            <div class="mt-2">
                <p class="text-5xl text-blue-950 font-bold">About Us</p>
                <br />
            </div>
            <img src="./public/p.avif" class="h-[34rem] object-cover w-full" alt="" />
        </div>

        <div class="flex justify-center items-center gap-20 bg-stone-100 pt-32">
            <div class="w-1/2">
                <p class="text-5xl font-bold text-blue-950">
                    Kamala Education Society was
                    <br />
                    established in the year 1992.
                </p>
                <p class="text-slate-800 text-lg mb-4 mt-5">
                    In the year 2000, Dr. Deepak Shah, a renowned activist, social worker, and educator, assumed
                    leadership of the trust, injecting a dynamic impetus to propel the noble cause of the organization
                    forward. Alongside him, Mrs. Pratibha Shah, an esteemed social activist, has actively engaged in
                    fostering the growth of the trust on multiple fronts.
                </p>
                <p class="text-slate-800 text-lg mb-4">
                    Their shared dedication and focused approach to education have resulted in the Kamala Education
                    Society experiencing overall expansion and progress. Through their tireless efforts, the trust
                    continues to make a profound impact in the lives of individuals, empowering them through quality
                    education and advancing the society as a whole.
                </p>
            </div>
            <div class="">
                <video src="./public/about.webm" class="h-80" autoplay loop></video>
            </div>
        </div>

        <div class="px-10 bg-stone-100 py-20">
            <p class="text-5xl font-bold text-blue-950">
                Our Offerings
            </p>
            <br />
            <div class="">
                <br />
                <div class="flex gap-60 text-lg items-center ml-10">
                    <ul class="list-disc">
                        <li>Graduate Programs</li>
                        <li>Undergraduate Programs</li>
                        <li>Doctoral Degrees</li>
                    </ul>
                    <ul class="list-disc">
                        <li>International Hubs</li>
                        <li>Alumni & Giving</li>
                        <li>Global Students</li>
                    </ul>
                </div>
            </div>
            <br />
            <br />
        </div>

    </div>

    <?php require ("./footer.php"); ?>

</body>

</html>