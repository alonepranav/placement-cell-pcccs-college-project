<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <?php require ("./navbar.php"); ?>

    <!-- --------------------------------------------------------------------------------------- -->

    <div>

        <div class="h-screen w-screen home-bg flex justify-center items-center bg-cover bg-center">
            <div class="flex flex-col justify-center items-center text-white">
                <p class="text-7xl font-bold tracking-wider">Placement Cell PCCCS</p>
                <p class="mt-9 text-2xl font-semibold">Pratibha College of Commerce and Computer Studies</p>
            </div>
        </div>

        <!-- <div class="">
            <br />
            <br />
            <br />

            <div class="">
                <video class="elementor-video"
                    src="https://pcccs.org.in/wp-content/uploads/2023/07/Untitled-design.webm" autoplay="" loop
                    muted="muted" playsinline="" controlslist="nodownload"></video>
            </div>
        </div> -->












        <div class="flex flex-col md:flex-row justify-center gap-10 py-20">
            <div class="px-20 py-28 w-2/3">
                <p class='text-blue-950 font-semibold text-6xl'>Pathways to Success </p>
                <p class='text-lg text-stone-700 mt-5 leading-relaxed text-wrap'>
                    Placement is the culmination of a journey undertaken by our students. We feel its our priority to
                    make sure our students achieve what they set out for. Around the year special attention is given to
                    make sure our students excel in placement process. Pre-placement talks, CV writing workshops, Mock
                    GD-PI sessions & spoken English lectures are organized to make our students ready for the gruelling
                    placement process.
                </p>
            </div>
            <div class="flex justify-center items-center">
                <img src="./public/home/home1.webp" alt="" class='h-80 md:h-[28rem] w-80 md:w-[44rem]' />
            </div>
        </div>



        <div class="">
            <div class="py-20">
                <p class="text-4xl underline text-center font-semibold">Upcoming Companies</p>
            </div>
            <div class="flex justify-center items-center gap-10 flex-wrap px-20">

                <?php
                $host = "localhost";
                $user = "id21731308_star";
                $password = "@Pranav173";
                $database = "id21731308_placement";
                
                $mysqli = new mysqli($host, $user, $password, $database);

                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                $sql = "SELECT name, position FROM companies";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="h-40 w-80 shadow-lg shadow-slate-200 border-2 border-slate-300 rounded-md p-5 flex justify-center flex-col items-center gap-4">';
                        echo '<p class="text-3xl font-semibold">' . $row["name"] . '</p>';
                        echo '<p class="text-lg font-semibold px-7 py-1.5 rounded-md text-white bg-amber-400 cursor-pointer shadow-md shadow-slate-300">' . $row["position"] . '</p>';
                        echo '</div>';
                    }
                } 

                $mysqli->close();
                ?>





            </div>
        </div>

        <br>
        <br>
        <br>
        <br>


        <div class="px-32 py-40 bg-stone-100">
            <p class='text-5xl font-bold text-blue-950'>Department Placement Co-Ordinators </p>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20 mt-20">

                <div class="">
                    <p class='text-2xl font-semibold'>Prof. Harshita Vachhani </p>
                    <p class='text-slate-700'>Training and Placement Officer
                        Program Co-ordinator (Comp.Sci.) </p>
                    <a class='text-blue-900 font-semibold mt-1 block' href='#'>harshitavachhani@pratibhagroup.org.in</a>
                </div>

                <div class="">
                    <p class='text-2xl font-semibold'>Prof. Hanumant Koli </p>
                    <p class='text-slate-700'>Program Co-ordinator (BBA -IB)</p>
                    <a class='text-blue-900 font-semibold mt-1 block' href='#'>hanumanta.pibm@pratibhagroup.org.in</a>
                </div>

                <div class="">
                    <p class='text-2xl font-semibold'>Prof. Dinesh Lahori </p>
                    <p class='text-slate-700'>Assistant Professor </p>
                    <a class='text-blue-900 font-semibold mt-1 block' href='#'>dineshlahori@pratibhagroup.org.in</a>
                </div>

                <div class="">
                    <p class='text-2xl font-semibold'>Prof. Anuradha Godke </p>
                    <p class='text-slate-700'>Prof. Anuradha Godke </p>
                    <a class='text-blue-900 font-semibold mt-1 block' href='#'>anuradhaghodke@pratibhagroup.org.in</a>
                </div>

                <div class="">
                    <p class='text-2xl font-semibold'>Prof. Poonam Bora </p>
                    <p class='text-slate-700'>Assistant Professor </p>
                    <a class='text-blue-900 font-semibold mt-1 block' href='#'>poonamkankariya@pratibhagroup.org.in</a>
                </div>

            </div>

        </div>


        <?php require ("./footer.php"); ?>

</body>

</html>