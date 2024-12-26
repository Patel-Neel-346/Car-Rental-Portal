<?php 
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip Team Card</title>
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
    <div class="team-container" style="background:white">
        <div class="team-member">
            <div class="card">
                <div class="front">
                    <img src="images/clients/client3.jpeg" alt="Luke Miller">
                    <h3>Luke Miller</h3>
                    <p>Salesman</p>
                </div>
                <div class="back">
                    <h3>About Luke</h3>
                    <p>Luke has been with us for over 5 years, helping customers find the perfect products for their needs.</p>
                </div>
            </div>
        </div>
        <div class="team-member">
            <div class="card">
                <div class="front">
                    <img src="images/clients/client3.jpeg" alt="Michael Diaz">
                    <h3>Michael Diaz</h3>
                    <p>Business Owner</p>
                </div>
                <div class="back">
                    <h3>About Michael</h3>
                    <p>Michael is a passionate entrepreneur with a focus on delivering quality services.</p>
                </div>
            </div>
        </div>
        

        <div class="team-member">
            <div class="card">
                <div class="front">
                    <img src="images/clients/client3.jpeg" alt="Michael Diaz">
                    <h3>Michael Diaz</h3>
                    <p>Business Owner</p>
                </div>
                <div class="back">
                    <h3>About Michael</h3>
                    <p>Michael is a passionate entrepreneur with a focus on delivering quality services.</p>
                </div>
            </div>
        </div>


        <div class="team-member">
            <div class="card">
                <div class="front">
                    <img src="images/clients/client3.jpeg" alt="Michael Diaz">
                    <h3>Michael Diaz</h3>
                    <p>Business Owner</p>
                </div>
                <div class="back">
                    <h3>About Michael</h3>
                    <p>Michael is a passionate entrepreneur with a focus on delivering quality services.</p>
                </div>
            </div>
        </div>


        <div class="team-member">
            <div class="card">
                <div class="front">
                    <img src="images/clients/client3.jpeg" alt="Michael Diaz">
                    <h3>Michael Diaz</h3>
                    <p>Business Owner</p>
                </div>
                <div class="back">
                    <h3>About Michael</h3>
                    <p>Michael is a passionate entrepreneur with a focus on delivering quality services.</p>
                </div>
            </div>
        </div>

        <div class="team-member">
            <div class="card">
                <div class="front">
                    <img src="images/clients/client3.jpeg" alt="Michael Diaz">
                    <h3>Michael Diaz</h3>
                    <p>Business Owner</p>
                </div>
                <div class="back">
                    <h3>About Michael</h3>
                    <p>Michael is a passionate entrepreneur with a focus on delivering quality services.</p>
                </div>
            </div>
        </div>

        


    </div>
    <script src="script.js"></script>
</body>
</html>
