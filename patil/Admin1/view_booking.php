<?php
session_start();
include('includes/db_connect.php');

// Fetch all users from the database
// $sql = "SELECT * FROM cars";

$sql="select user.fullname,tblbooking.id as id1,tblbooking.name,tblbooking.email,tblbooking.price,tblbooking.starting_date,tblbooking.ending_date,tblbooking.days,tblbooking.status,car_image as image from tblbooking inner join user on tblbooking.email=user.email join cars on cars.car_name=tblbooking.name";
$result = $conn->query($sql);

if(isset($_REQUEST['eid']))
{
    $id=$_REQUEST['eid'];
    $statement=mysqli_query($conn,"update tblbooking set status='Conformed' where id='$id'");
    if($statement)
    {
        $success="Booking Successfully Conformed";
    }
    else{
        $error = "Booking Is Not Conformed ";
    }

}
elseif (isset($_REQUEST['eid1'])) {
    $id1=$_REQUEST['eid1'];
    $statement=mysqli_query($conn,"update tblbooking set status='Cancel' where id='$id1'");
    if($statement)
    {
        $success="Booking Successfully Cancel";
    }
    else{
        $error = "Booking Is Not Cancel ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="bootstrap.min.css">
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
                    <li class="mb-4"><a href="add_car.php" class="block py-2 px-4 rounded hover:bg-gray-600 ">Add Car</a></li>
                    <li class="mb-4"><a href="view_users.php" class="block py-2 px-4  hover:bg-gray-600 rounded">View Users</a></li>
                    <li class="mb-4"><a href="view_cars.php" class="block py-2 px-4  rounded hover:bg-gray-600">View Cars</a></li>
                    <li class="mb-4"><a href="view_booking.php" class="block py-2 px-4 bg-gray-700 rounded hover:bg-gray-600">View Booking</a></li>
                    <li class="mb-4"><a href="view_contact.php" class="block py-2 px-4  rounded hover:bg-gray-600">View User Contact</a></li>

                    <li class="mb-4"><a href="logout.php" class="block py-2 px-4 text-red-400 ">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 ml-64 p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Cars</h2>

            <?php if (isset($success)): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                    <p><?php echo $success; ?></p>
                </div>
            <?php elseif (isset($error)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>

            <div class="bg-white shadow-lg rounded-lg p-8">
                <table class="min-w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Full Name</th>
                            <th class="px-4 py-2">Car Name</th>
                            <th class="px-4 py-2">User Email</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">Image</th>
                            <th class="px-4 py-2">Stating_date</th>  
                            <th class="px-4 py-2">Ending_date</th>  
                            <th class="px-4 py-2">Duration</th>  
                            <th class="px-4 py-2" scope="col">Status</th>
                            <th class="px-4 py-2">Booking</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="border px-4 py-2"><?php echo $row['id1']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['fullname']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['name']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['email']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['price']; ?></td>
                                <td class="border px-4 py-2"><img src="uploads\<?php echo $row['image']; ?>"width="300" height="300" ></td>
                                <td class="border px-4 py-2"><?php echo $row['starting_date']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['ending_date']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['days']; ?></td>
                                <td class="border px-4 py-2"><button class="btn btn-primary"> <?php echo $row['status']; ?></button></td>
                                <td class="border px-4 py-2"  style="display:inline-grid;gap:11px;">
                                <a href="view_booking.php?eid=<?php echo  $row['id1'] ?>"  class="btn btn-outline-success">Conformed</a>
                                <a href="view_booking.php?eid1=<?php echo  $row['id1'] ?>" class= "btn btn-outline-danger">Cancel</a>
                                </td>
                                <!-- <td class="border px-4 py-2" style="text-align:center"><a href="update_car.php?id=<?php echo  $row['id1'] ?>">🔄</a></td> -->
                                <!-- <td class="border px-4 py-2" style="text-align:center"><a href="delete_car.php?id=<?php echo  $row['id1'] ?>">🗑️</a></td> -->
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php


?>
</body>
</html>
