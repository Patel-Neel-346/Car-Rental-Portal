<?php
session_start();
include('includes/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_name = $_POST['car_name'];
    $car_type = $_POST['car_type'];
   
    $price_per_day = $_POST['price_per_day'];

    $car_image = $_FILES['car_image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["car_image"]["name"]);

    if (move_uploaded_file($_FILES["car_image"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO cars (car_name, car_des,car_image, price_per_day) 
                VALUES ('$car_name', '$car_type','$car_image', '$price_per_day')";
        
        if ($conn->query($sql) === TRUE) {
            $success = "Car added successfully!";
        } else {
            $error = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $error = "Sorry, there was an error uploading the file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Car</title>
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
                    <li class="mb-4"><a href="add_car.php" class="block py-2 px-4 rounded bg-gray-700 hover:bg-gray-600">Add Car</a></li>
                    <li class="mb-4"><a href="view_users.php" class="block py-2 px-4 rounded hover:bg-gray-600">View Users</a></li>
                    <li class="mb-4"><a href="view_cars.php" class="block py-2 px-4  rounded hover:bg-gray-600">View Cars</a></li>
                    <li class="mb-4"><a href="view_booking.php" class="block py-2 px-4  rounded hover:bg-gray-600">View Booking</a></li>
                    <li class="mb-4"><a href="view_contact.php" class="block py-2 px-4  rounded hover:bg-gray-600">View User Contact</a></li>

                    <li class="mb-4"><a href="logout.php" class="block py-2 px-4 text-red-400 ">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 ml-64 p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Add New Car</h2>

            <!-- Success/Error Messages -->
            <?php if (isset($success)): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                    <p><?php echo $success; ?></p>
                </div>
            <?php elseif (isset($error)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>

            <!-- Form to Add Car -->
            <form action="add_car.php" method="post" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-8">
                <div class="mb-6">
                    <label for="car_name" class="block text-gray-700 font-bold mb-2">Car Name</label>
                    <input type="text" name="car_name" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="car_type" class="block text-gray-700 font-bold mb-2">Car Description</label>
                    <input type="text" name="car_type" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                </div>

               
                <div class="mb-6">
                    <label for="price_per_day" class="block text-gray-700 font-bold mb-2">Price Per Day</label>
                    <input type="number" name="price_per_day" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="car_image" class="block text-gray-700 font-bold mb-2">Car Image</label>
                    <input type="file" name="car_image" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Add Car</button>
            </form>
        </div>
    </div>

</body>
</html>
