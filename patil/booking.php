<?php
// Database connection
include("conn.php");
session_start();
// Check if car ID is passed in the URL
if (isset($_GET['id'])) {
    $car_id = intval($_GET['id']); // Ensure the ID is treated as an integer
    $id= $_SESSION['user_id'];
    // Fetch the car details from the database
    $result = $conn->query("SELECT * FROM cars WHERE id = $car_id");
    $result1=$conn->query("select * from user where id=$id ");
    if ($result->num_rows > 0) {
        $car = $result->fetch_assoc(); // Fetch car data
        $user=$result1->fetch_assoc();
    } else {
        echo "Car not found!";
        exit;
    }
} else {
    echo "Invalid car ID!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom styling for modal */
        .modal-dialog {
            max-width: 700px;
        }
        .modal-header {
            background-color: #f8f9fa;
            border-bottom: 2px solid #6c757d;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <div class="card-body">
            <h3 class="text-center mb-4">Book a Car</h3>
            <div class="text-center mb-4">
                <img src="Admin1/uploads/<?php echo $car['car_image']; ?>" alt="Car Image" height="300" width="400" class=" object-cover mb-3">
            </div>
            <form action="process-booking.php?id=<?php echo $car['id']?>" method="POST">
                <input type="hidden" name="car_id" value="<?php echo $car_id; ?>">
                
                <div class="mb-3">
                    <label for="car-name" class="form-label">Car Name</label>
                    <input type="text" class="form-control" id="car-name" name="name" value="<?php echo $car['car_name']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="user-name" class="form-label">Email</label>
                    <input type="text" class="form-control" id="user-name" name="email" value="<?php echo $user['email']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="user-name" class="form-label">Price</label>
                    <input type="text" class="form-control" id="user-name" name="price" value="<?php echo $car['price_per_day']; ?>"required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Starting_Date</label>
                    <input type="date" class="form-control" id="email" name="start" placeholder="e.g., 12/20/2024" required>
                </div>
                <div class="mb-3">
                    <label for="rental-dates" class="form-label">Ending_Date</label>
                    <input type="date" class="form-control" id="rental-dates" name="end" placeholder="e.g., 12/25/2024" required>
                </div>
                <button type="submit" class="btn btn-success w-full">Submit Booking</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
