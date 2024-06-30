<?php
    include 'connection.php';

    $save = $_POST['Save'];

    if(isset($save)){

        $destination = $_POST['destination'];
        $dates = $_POST['dates'];
        $budget = $_POST['budget'];
        $accommodation = $_POST['accommodation'];
        $transportation = $_POST['transportation'];
        $companions = $_POST['companions'];
        $activities = $_POST['activities'];

        $query = "INSERT INTO plans(destination, dates, budget, accommodation, transportation, companions, activities) VALUES ('$destination', '$dates', '$budget', '$accommodation', '$transportation', '$companions', '$activities')";

        $data = mysqli_query($conn, $query);

        if($data){
            echo "<script type='text/javascript'>
                alert('Trip successfully added.');
                window.location.href = 'show-trip.php';
              </script>";
        }

    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Planner</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header
        class="bg-white px-20 z-50 fixed w-full bg-opacity-20 backdrop-blur-md border-b p-4 text-white text-center items-center flex justify-between mx-auto">
        <h1 class="text-2xl font-bold font-poppins text-black">Travel Planner</h1>
        <ul class="flex font-poppins font-semibold justify-between gap-10 text-black">
            <li><a href="index.php" class="duration-300 hover:underline">Add Upcoming Trip</a></li>
            <li><a href="show-trip.php" class="duration-300 hover:underline">Show Upcoming Trips</a></li>

        </ul>
    </header>

    <!-- Main Content -->
    <main style="background-image: url('./cover.jpg')"
        class="w-full bg-cover bg-center min-h-screen mx-auto flex justify-center items-center ">
        <!-- Add New Trip Section -->
        <div
            class="bg-white backdrop-blur-sm font-poppins bg-opacity-20 h-[550px] rounded-2xl border p-10  mx-auto shadow-xl mt-20">
            <h2 class="text-xl font-semibold mb-4">Plan Upcoming Trip</h2>
            <form action="#" method="POST" class="w-[800px] space-y-4">
                <div class="flex flex-wrap justify-between">
                    <div class="w-1/2 space-y-2 pr-3">
                        <div>
                            <label class="block">Destination</label>
                            <input type="text" name="destination"
                                class="w-full opacity-50 p-2 border border-blue-400 rounded-md focus:outline-none"
                                placeholder="Enter destination">
                        </div>
                        <div>
                            <label class="block text-gray-700">Date</label>
                            <input name="dates"
                                class="w-full opacity-50 p-2 border border-blue-400 rounded-md focus:outline-none"
                                placeholder="Enter travel dates">
                        </div>
                        <div>
                            <label class="block text-gray-700">Budget (Tk)</label>
                            <input name="budget" type="number"
                                class="w-full opacity-50 p-2 border border-blue-400 rounded-md focus:outline-none"
                                placeholder="Enter Budget Amount">
                        </div>
                    </div>
                    <div class="w-1/2 space-y-2 pl-2">
                        <div>
                            <label class="block text-gray-700">Accommodation</label>
                            <input type="text" name="accommodation"
                                class="w-full opacity-50 p-2 border border-blue-400 rounded-md focus:outline-none"
                                placeholder="Enter accommodation details">
                        </div>
                        <div>
                            <label class="block text-gray-700">Transportation Method</label>
                            <input name="transportation" type="text"
                                class="w-full opacity-50 p-2 border border-blue-400 rounded-md focus:outline-none"
                                placeholder="Enter Transportation Method">
                        </div>
                        <div>
                            <label class="block text-gray-700">Travel Companions</label>
                            <input type="text" name="companions"
                                class="w-full opacity-50 p-2 border border-blue-400 rounded-md focus:outline-none"
                                placeholder="Enter Travel Companions">
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <label class="block text-gray-700">Activities</label>
                    <textarea name="activities"
                        class="w-full opacity-50 p-2 border border-blue-400 rounded-md focus:outline-none"
                        placeholder="Enter activities" rows="4"></textarea>
                </div>
                <div class="w-80 text-lg font-semibold mx-auto">
                    <input type="submit" name="Save"
                        class="w-full bg-gradient-to-l from-cyan-400 to-cyan-500 text-white p-3 rounded-md">
                </div>
            </form>
        </div>
    </main>

</body>

</html>