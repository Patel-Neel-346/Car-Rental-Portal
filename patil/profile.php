<?php 
session_start();
include("conn.php"); 
if (!isset($_SESSION['user_name'])){
    header('Location: signin.php');
    exit();
}
// $bookingQuery = "SELECT * FROM tblbook1 WHERE email = '{$_SESSION['user_name']}'";
// $bookingResult = $conn->query($bookingQuery);
            
$select = "SELECT * FROM user WHERE email = '{$_SESSION['email']}'";
$cmd=mysqli_query($conn,$select);

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname=$_POST['name'];
    $email=$_POST['email'];

    $sql=mysqli_query($conn,"update user set fullname='$fullname',email='$email' where email='{$_SESSION['email']}'");
    if ($sql) {
        $success = "Profile Updated Successfully!";
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings & Profile</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
     * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container {
    display: flex;
    
    min-height: 100vh;
}

/* Sidebar Styles */
.sidebar {
    width: 260px;
    background-color: #222;
    padding: 30px;
    color: #fff;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 22px;
    font-weight: 600;
    border-bottom: 1px solid #444;
    padding-bottom: 10px;
}

.sidebar p {
    text-align: center;
    font-size: 14px;
    margin-bottom: 30px;
}

.sidebar nav ul {
    /* display:block; */
    list-style-type: none;
    padding: 0;
    display:flex;
    margin-bottom:10px;
    flex-direction:column;
   
}

.sidebar nav ul li {
    margin-bottom: 20px;
}

.sidebar nav ul li a {
    text-decoration: none;
    color: #fff;
    display: block;
    padding: 12px 20px;
    border-radius: 4px;
    background-color: #444;
    text-align: left;
    transition: background-color 0.3s ease;
}

.sidebar nav ul li a:hover {
    /* background-color:black; */
    color:white;
}

/* Main content styles */
.main {
    flex: 1;
    padding: 40px;
    background-color: #f9f9f9;
}

.main h2 {
    margin-bottom: 25px;
    color: #444;
}

/* Booking section styles */
.booking-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f4f4f4;
    color: #333;
}

/* Update profile form styles */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    padding: 12px 25px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #218838;
}

/* Media queries for responsiveness */
@media screen and (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        height: auto;
    }

    .main {
        padding: 20px;
    }
}

     nav ul li a:hover {
    color:none;
    border-bottom:none;
   
    font-family: none;
    text-transform: none;
    font-weight: 400;
    /* font-weight: 900; */
    z-index: 0;
    /* content: ''; */
    /* height: 100%; */
    /* width: 100%; */
    /* left: 0; */
    /* top: 0; */
    
    border-color: none;
    color: white;
    box-shadow: none;
    transform: translateY(0);
  
  
    }

nav ul li a::before {
    position: absolute;
    color: #ffd277;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    transition-duration: 1s;
    background-color: rgba(0, 0, 0, 0.842);
    background-size: 200%;
  }
  
  nav ul li a:hover {
    background-position: right;
    transition-duration: 1s;
    color:red;
  }
  
nav ul li a:hover::before {
    background-position: right;
    transition-duration: 1s;
  }


nav ul li a:hover::active {
    transform: scale(0.95);
  } 
  .register-btn {
    padding: 10px 20px;
    background-color: #1A2238;
    color: #fff;
    border-radius: 20px;
    transition: background-color 0.6s;
}

.register-btn:hover {
    background-color: white;
    color: black;
}
   </style>

    
</head>

<body style="background:white">





    <header style="background: rgba(21, 114, 211, 1);">
        <div class="logo">
            <img src="images/Icons/car.png" alt="Car Rental Logo">
            <h1>CAR4U</h1>
        </div>
        <nav>
            <ul>
                <li><a href="home.php"  style="color: white;font-weight: 900">HOME</a></li>
                <li><a href="about.php"  style="color: white;font-weight: 900">ABOUT</a></li>
                <li><a href="collection.php"  style="color: white;font-weight: 900">VEHICLES MODELS</a></li>
                <li><a href="ternmin.php"  style="color: white;font-weight: 900">TESTIMONIALS</a></li>
                <li><a href="team2.php"  style="color: white;font-weight: 900">OUR TEAM</a></li>
                <li><a href="contact.php"  style="color: white;font-weight: 900">CONTACT</a></li>
               
          

                <?php 
                   if(!isset($_SESSION['user_name']))
                    {                
                ?>
                <li><a href="login.php" class="register-btn" id="lr">Register</a></li>
                  <?php }
                  else{
                    ?>  
                <li><a href="profile.php" class="register-btn" id="lr"><?php echo $_SESSION['user_name'] ?></a></li>  
                
                <?php
                  } 
                ?>  
            </ul>
        </nav>
    </header>
<div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <h2><?php echo $_SESSION['user_name']; ?></h2>
           
            </div>
            <nav >
                <ul class="pronav">
                    <li><a href="profile.php">Profile Settings</a></li>
                    <li><a href="userBooking.php">My Booking</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main"> 
            <!-- My Bookings Section -->
            <!-- <section id="my-bookings">
                <h2>My Bookings</h2>
                <div class="booking-container">
                     <?php if ($bookingResult->num_rows > 0): ?> 
                        <table>
                            <thead>
                                <tr>
                                    <th>Booking No</th>
                                    <th>Car Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $bookingResult->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $row['bid']; ?></td>
                                        <td><?php echo $row['cname']; ?></td>
                                        <td><?php echo $row['bdate']; ?></td>
                                        <td><?php echo $row['duration']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <p>No bookings found.</p>
                    <?php endif; ?>
                </div>
            </section>  -->


            <?php if (isset($success)): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                    <p><?php echo $success; ?></p>
                </div>
            <?php elseif (isset($error)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>

<?php

while($ru=mysqli_fetch_assoc($cmd)){
?> 
            
            <!-- Update Profile Section -->
             <section id="update-profile">
                <h2>Update Profile</h2>
                <form action="profile.php" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo $ru['fullname']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo $ru['email']; ?>" required>
                    </div>
                    <button type="submit">Update Profile</button>
                </form>
            </section>
            <?php
}
?>
        </main> 
    </div>
</body>

</html>
