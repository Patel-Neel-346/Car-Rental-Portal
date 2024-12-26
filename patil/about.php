<?php 
 session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Service</title>
    <link rel="stylesheet" href="index.css">
<style>
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

<body>
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
    <section class="about-company">
        <div class="acontainer">
            <div class="about-content">
                <div class="mimage">
                    <img src="images/carrental" alt="About Company" style="border-radius: 50px;">
                </div>
                <div class="text">
                    <h3 style="color:rgba(21, 114, 211, 1);">About Company</h3>
                    <h1>You start the engine and your adventure begins</h1>
                    <p>Certain but she but shyness why cottage. Guy the put instrument sir entreaties affronting...</p>
                    <div class="statistics">
                        <div class="stat-item">
                            <img src="Images/Icons/car12.png" alt="Car Types" width="70rem">
                            <h2 style="color:rgba(21, 114, 211, 1);">20</h2>
                            <p>Car Types</p>
                        </div>
                        <div class="stat-item">
                            <img src="Images/Icons/mechanical.png" alt="Rental Outlets" width="70rem">
                            <h2 style="color:rgba(21, 114, 211, 1);">85</h2>
                            <p>Rental Outlets</p>
                        </div>
                        <div class="stat-item">
                            <img src="Images/Icons/car-service.png" alt="Repair Shop" width="70rem">
                            <h2 style="color:rgba(21, 114, 211, 1);">75</h2>
                            <p>Repair Shop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="plan-trip" style="background:white;">
        <div class="acontainer">
            <h2 style="color:rgba(21, 114, 211, 1);">Plan your trip now</h2>
            <h1>Quick & easy car rental</h1>
            <div class="features">
                <div class="feature-item">
                    <img src="images/Icons/car.png" alt="Select Car">
                    <h3>Select Car</h3>
                    <p>We offer a big range of vehicles for all your driving needs...</p>
                </div>
                <div class="feature-item">
                    <img src="images/Icons/car (1).png" alt="Contact Operator">
                    <h3>Contact Operator</h3>
                    <p>Our knowledgeable and friendly operators are always ready to help...</p>
                </div>
                <div class="feature-item">
                    <img src="images/Icons/steering-wheel.gif" alt="Let's Drive">
                    <h3>Let's Drive</h3>
                    <p>Whether you're hitting the open road, we've got you covered...</p>
                </div>
            </div>
        </div>
    </section>
    <header class="header-section">
        <div class="header-container">
            <h2>Book a car by getting in touch with us</h2>
            <p style="color:rgba(21, 114, 211, 1);"><i class="fas fa-phone-alt"></i> <span style="color:rgba(21, 114, 211, 1);">(123) 456-7869</span></p>
        </div>
    </header>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="footer-container">
            <div class="footer-box">
                <h3>ADMIN LOGIN</h3>
                <ul>
                    <li><a href="Admin1\login.php">Admin login</a></li>
                    
                </ul> 
            </div>
            <div class="footer-box">
                <h2>CAR <span style="color:rgba(21, 114, 211, 1);">Rental</span></h2>
                <p>We offer a big range of vehicles for all your driving needs. We have the perfect car to meet your needs.</p>
                <div class="acontact-info">
                    <p><i class="fas fa-phone-alt"></i> (123) -456-789</p>
                    <p><i class="fas fa-envelope"></i> carrental@gmail.com</p>
                </div>
                <p>Design by XpeedStudio</p>
            </div>
            <div class="footer-box">
                <h3>COMPANY</h3>
                <ul>
                    <li><a href="#">New York</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">How we work</a></li>
                </ul>
            </div>
            <div class="footer-box">
                <h3>WORKING HOURS</h3>
                <p>Mon - Fri: 9:00AM - 9:00PM</p>
                <p>Sat: 9:00AM - 19:00PM</p>
                <p>Sun: Closed</p>
            </div>
            <div class="footer-box">
                <h3>SUBSCRIPTION</h3>
                <p>Subscribe your Email address for latest news & updates.</p>
                <form action="#" method="POST" class="subscription-form">
                    <input type="email" placeholder="Enter Email Address" required>
                    <button type="submit" style="background:rgba(21, 114, 211, 1);">Submit</button>
                </form>
            </div>
        </div>
    </footer>

    <script src="scripts.js">
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>
</body>

</html>