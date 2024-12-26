<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Sidebar -->
    <div class="flex">
        <aside class="w-64 bg-gray-800 h-screen text-white p-5">
            <h2 class="text-2xl font-bold mb-8">Admin Dashboard</h2>
            <nav>
                <ul>
                    <li class="mb-4"><a href="index.php" class="block py-2 px-4  bg-gray-700 rounded hover:bg-gray-600">Dashboard</a></li>
                    <li class="mb-4"><a href="add_car.php" class="block py-2 px-4 rounded  hover:bg-gray-600">Add Car</a></li>
                    <li class="mb-4"><a href="view_users.php" class="block py-2 px-4  rounded hover:bg-gray-600">View Users</a></li>
                    <li class="mb-4"><a href="view_cars.php" class="block py-2 px-4  rounded hover:bg-gray-600">View Cars</a></li>
                    <li class="mb-4"><a href="view_booking.php" class="block py-2 px-4  rounded hover:bg-gray-600">View Booking</a></li>
                    <li class="mb-4"><a href="view_contact.php" class="block py-2 px-4  rounded hover:bg-gray-600">View User Contact</a></li>

                    <li class="mb-4"><a href="logout.php" class="block py-2 px-4 text-red-400 ">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 p-6">
            <h1 class="text-4xl font-bold text-gray-800 mb-8">Welcome, Admin!</h1>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-3 gap-6">
                <!-- Add Car Card -->
                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl">
                    <h3 class="text-xl font-semibold mb-4">Add New Car</h3>
                    <p class="text-gray-600 mb-6">Manage Cars In Your System.</p>
                    <a href="add_car.php" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Add Car</a>
                </div>

                <!-- View Users Card -->
                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl">
                    <h3 class="text-xl font-semibold mb-4">View Users</h3>
                    <p class="text-gray-600 mb-6">Manage Users In The System.</p>
                    <a href="view_users.php" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">View Users</a>
                </div>

                
                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl">
                    <h3 class="text-xl font-semibold mb-4">View Cars</h3>
                    <p class="text-gray-600 mb-6">Manage Cars In The System.</p>
                    <a href="view_cars.php" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">View Cars</a>
                </div>
                

                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl">
                    <h3 class="text-xl font-semibold mb-4">View Booking</h3>
                    <p class="text-gray-600 mb-6">Manage User Booking System.</p>
                    <a href="view_booking.php" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">View Booking</a>
                </div>


                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl">
                    <h3 class="text-xl font-semibold mb-4">View User Contacts</h3>
                    <p class="text-gray-600 mb-6">Manage User Contact System.</p>
                    <a href="view_contact.php" class="bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600">View User Contacts</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
