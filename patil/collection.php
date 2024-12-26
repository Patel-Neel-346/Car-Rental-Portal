
<?php 
 session_start();
   include("conn.php");
   $sql=mysqli_query($conn,"select * from cars")

?>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Cards</title> 
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="index.css">   
    <style>
        .price-tag {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(21, 114, 211, 1);
            color: white;
            padding: 0.5rem;
            border-radius: 9999px;
            font-weight: bold;
        }
        .car-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
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

.car-card {
    color:rgba(21, 114, 211, 1);
    background: transparent;
    width: 350px;
    margin-bottom: 20px;
    border: 2px solid white;
    padding: 20px;
    box-shadow: 2px 2px 10px black;
}
   </style>
</head>
<body class="bg-gray-100" style="background:white">
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
    <div class="container mx-auto px-4 py-8" style="align-items: center;margin-top: 40px;justify-content: center;">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
             <?php while($row = $sql->fetch_assoc()): ?>
            <!-- Car Card 1 -->
            <div class="car-card bg-white rounded-lg shadow-md overflow-hidden relative">
                <img src="Admin1\uploads\<?php echo $row['car_image'] ?>" alt="Toyota Land Cruiser">
                <span class="price-tag"><?php echo $row['price_per_day'] ?></span>
                <div class="p-4">
                    <div class="flex items-center justify-between">
                        <h2 class="font-bold text-xl"><?php echo $row['car_name'] ?></h2>
                        <div class="flex items-center">
                            <span class="text-yellow-400">★★★★★</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 my-2"><?php echo $row['car_des'] ?></p>
                    <div class="text-sm text-gray-600 space-y-2">
                        <p><span class="inline-block text-red-500">🧍‍♂️</span> Seat Capacity: 4 People</p>
                        <p><span class="inline-block text-red-500">🚪</span> Total Doors: 4 Doors</p>
                        <p><span class="inline-block text-red-500">⛽</span> Fuel Tank: 450 Liters</p>
                    </div>
                    <a href="booking.php?id=<?php echo $row['id']?>" class="block mt-4 bg-gray-900 text-white text-center py-2 rounded-full hover:bg-rgba(21, 114, 211, 1)-700">Rent Now</a>
                </div>
            </div>
            <?php endwhile; ?>
            

            
        </div>
    </div>
    <header class="header-section">
            <div class="header-container">
                <h2>Book a car by getting in touch with us</h2>
                <p><i class="fas fa-phone-alt"></i> <span style="color:rgba(21, 114, 211, 1)">(123) 456-7869</span></p>
            </div>
    </header>
</body>
</html>
