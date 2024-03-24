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

    <div class="flex justify-center items-center h-screen w-screen">

        <div class="w-[30rem]">
            <p class="font-semibold text-gray-800 mb-9 text-center text-4xl">Add Company</p>
            <br />
            <form class="">
                <div class="mb-8">
                    <label class="mb-1 block text-lg">Company Name</label>
                    <input type="text" placeholder="Enter Company Name" id="name" name="name"
                        class="border border-slate-500 px-2 py-2  w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md" />
                </div>
                <div class="mb-6">
                    <label class="mb-1 block text-lg">Company Visiting Date</label>
                    <input type="date" placeholder="Enter Company Name" id="name" name="name"
                        class="border border-slate-500 px-2 py-2  w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md" />
                </div>
                <div class="mb-6">
                    <label class="mb-1 block text-lg">Open Position</label>
                    <select name=""
                        class="border border-slate-500 px-2 py-2  w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md">
                        <option value="Web Developer">Choose Role</option>
                        <option value="Web Developer">Web Developer</option>
                        <option value="Web Developer">Android Developer</option>
                        <option value="Web Developer">Backend Developer</option>
                        <option value="Web Developer">Frontend Developer</option>
                        <option value="Web Developer">Software Developer</option>
                    </select>
                </div>
                <div class="mt-10">
                    <button type="submit"
                        class="py-2.5 px-4 w-full bg-indigo-500 text-white rounded-md shadow-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <?php require ("./footer.php"); ?>

</body>

</html>