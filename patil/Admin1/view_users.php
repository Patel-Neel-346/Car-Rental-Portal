<?php
session_start();
include('includes/db_connect.php');

// Fetch all users from the database
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">
        <aside class="w-64 bg-gray-800 h-screen text-white p-5 fixed">
            <h2 class="text-2xl font-bold mb-8">Admin Dashboard</h2>
            <nav>
                <ul>
                    <li class="mb-4"><a href="index.php" class="block py-2 px-4  rounded hover:bg-gray-600 ">Dashboard</a></li>
                    <li class="mb-4"><a href="add_car.php" class="block py-2 px-4 rounded hover:bg-gray-600">Add Car</a></li>
                    <li class="mb-4"><a href="view_users.php" class="block py-2 px-4 bg-gray-700  rounded hover:bg-gray-600">View Users</a></li>
                    <li class="mb-4"><a href="view_cars.php" class="block py-2 px-4 hover:bg-gray-600 rounded">View Cars</a></li>
                    <li class="mb-4"><a href="view_booking.php" class="block py-2 px-4  rounded hover:bg-gray-600">View Booking</a></li>
                    <li class="mb-4"><a href="view_contact.php" class="block py-2 px-4  rounded hover:bg-gray-600">View User Contact</a></li>
                    <li class="mb-4"><a href="logout.php" class="block py-2 px-4 text-red-400 ">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 ml-64 p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Registered Users</h2>

            <div class="bg-white shadow-lg rounded-lg p-8">
                <table class="min-w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Username</th>
                            <th class="px-4 py-2">Email</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="border px-4 py-2"><?php echo $row['id']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['fullname']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['email']; ?></td>
                               
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
