<?php 
 session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client's Testimonials</title>
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
.testimonial-box:hover {
    box-shadow: rgb(255, 255, 255) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    border: 2px solid rgba(21, 114, 211, 1);
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
    <section class="testimonials-section" style="background:white">
        <div class="testimonials-header">
            <p style="color:rgba(21, 114, 211, 1)">Reviewed by People</p>
            <h1  style="color:rgba(21, 114, 211, 1)">Client's Testimonials</h1>
            <p  style="color:black">Discover the positive impact we've made on our clients by reading through their testimonials. Our clients
                have experienced our service and results, and they're eager to share their positive experiences with
                you.</p>
        </div>
        <div class="testimonials-container">
            <div class="testimonial-box">
                <p class="testimonial-text">"We rented a car from this website and had an amazing experience! The
                    booking was easy and the rental rates were very affordable."</p>
                <div class="testimonial-author">
                    <img src="images/clients/client2.jpeg" alt="Parry Hotter">
                    <div class="author-info">
                        <h3>Divya Panchal</h3>
                        <p>Mumbai</p>
                    </div>
                </div>
                <div class="testimonial-icon"  style="color:rgba(21, 114, 211, 1)">""</div>
            </div>
            <div class="testimonial-box">
                <p class="testimonial-text">"The car was in great condition and made our trip even better. Highly
                    recommend for this car rental website!"</p>
                <div class="testimonial-author">
                    <img src="images/clients/client3.jpeg" alt="Surat">
                    <div class="author-info">
                        <h3>Max Patel</h3>
                        <p>New Delhi</p>
                    </div>
                </div>
                <div class="testimonial-icon"  style="color:rgba(21, 114, 211, 1)">""</div>
            </div>
            <div class="testimonial-box">
                <p class="testimonial-text">"The car was in great condition and made our trip even better. Highly
                    recommend for this car rental website!"</p>
                <div class="testimonial-author">
                    <img src="images/clients/client3.jpeg" alt="Surat">
                    <div class="author-info">
                        <h3>Max Patel</h3>
                        <p>New Delhi</p>
                    </div>
                </div>
                <div class="testimonial-icon"  style="color:rgba(21, 114, 211, 1)">""</div>
            </div>
            <div class="testimonial-box">
                <p class="testimonial-text">"The car was in great condition and made our trip even better. Highly
                    recommend for this car rental website!"</p>
                <div class="testimonial-author">
                    <img src="images/clients/client3.jpeg" alt="Surat">
                    <div class="author-info">
                        <h3>Max Patel</h3>
                        <p>New Delhi</p>
                    </div>
                </div>
                <div class="testimonial-icon"  style="color:rgba(21, 114, 211, 1)">""</div>
            </div>
            <div class="testimonial-box">
                <p class="testimonial-text">"The car was in great condition and made our trip even better. Highly
                    recommend for this car rental website!"</p>
                <div class="testimonial-author">
                    <img src="images/clients/client3.jpeg" alt="Surat">
                    <div class="author-info">
                        <h3>Max Patel</h3>
                        <p>New Delhi</p>
                    </div>
                </div>
                <div class="testimonial-icon"  style="color:rgba(21, 114, 211, 1)">""</div>
            </div>

        </div>
    </section>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            const testimonials = document.querySelectorAll('.testimonial-box');

            testimonials.forEach((testimonial, index) => {
                setTimeout(() => {
                    testimonial.classList.add('fade-in');
                }, index * 200); // Staggered animation
            });
        });

    </script>
</body>

</html>