<?php
// Database connection
include('conn.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $car_name = $_POST['name'];
    $email = $_POST['email'];
    $price = $_POST['price'];
    $startDate = $_POST['start'];
    $endDate = $_POST['end'];
    
    $startTime = strtotime($startDate);
    $endTime = strtotime($endDate);
    
    // Calculate the difference in seconds
    $diffInSeconds = $endTime - $startTime;
    
    // Convert seconds to days (60 sec/min * 60 min/hr * 24 hr/day)
    $days = $diffInSeconds / (60 * 60 * 24);
    $total_price=$price * $days;

    // Insert booking into the database
    $sql = "INSERT INTO tblbooking (name,email,price,starting_date,ending_date,days,total_price) VALUES ('$car_name','$email','$price','$startDate','$endDate','$days','$total_price')";
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
        // Redirect back to the car list or show success message
        header('Location: collection.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
