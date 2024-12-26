<?php 
 session_start();
//  $select = "SELECT * FROM user WHERE email = '{$_SESSION['email']}'";
//  $cmd=mysqli_query($conn,$select);
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname=$_POST['name'];
    $email=$_POST['email'];
    $text=$_POST['text'];

   $sql= mysqli_query($conn,"insert into tblcontact(name,email,messg) values('$fullname','$email','$text')");
  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link rel="stylesheet" href="index.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <script src="index.js"></script>
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


<section id="contact" style="background:white">
    <main>
        
    <!-- <div class="contact-container">
        <div class="contact-info">
            <h2>Need additional information?</h2>
            <p>A multifaceted professional skilled in multiple fields of research, development as well as a learning specialist. Over 15 years of experience.</p>
            <ul class="info-list">
                <li><i class="fas fa-phone"></i> (123) 456-7869</li>
                <li><i class="fas fa-envelope"></i> carrental@carmail.com</li>
                <li><i class="fas fa-map-marker-alt"></i> Belgrade, Serbia</li>
            </ul>
        </div>
        <div class="contact-form">
            <form  method="Post" action="contact.php">
                <label for="name">Full Name <span>*</span></label>
                <input type="text" id="name" placeholder="E.g: 'Joe Shmoe'" value="<?php echo $_SESSION['user_name'] ?>"  name="name"required>

                <label for="email">Email <span>*</span></label>
                <input type="email" id="email" placeholder="youremail@example.com"  value="<?php echo $_SESSION['email'] ?>" name="email" required>

                <label for="message">Tell us about it <span>*</span></label>
                <textarea id="message" placeholder="Write Here.." name="text" required></textarea>

                <button type="submit" class="btn"> 
                    <i class="fas fa-envelope"></i> Send Message
                </button>
            </form>
        </div>
    </div> -->
    <section id="contact"style="background: white;" >
    <main>
        
        <div class="contact-container">
            <div class="contact-info" style="background: white;">
                <h2>Need additional information?</h2>
                <p>A multifaceted professional skilled in multiple fields of research, development as well as a learning specialist. Over 15 years of experience.</p>
                <ul class="info-list">
                    <li><i class="fas fa-phone" style="color: rgba(21, 114, 211, 1);"></i> (123) 456-7869</li>
                    <li><i class="fas fa-envelope" style="color: rgba(21, 114, 211, 1);"></i> carrental@carmail.com</li>
                    <li><i class="fas fa-map-marker-alt" style="color: rgba(21, 114, 211, 1);"></i> Belgrade, Serbia</li>
                </ul>
            </div>
            <div class="contact-form">
                <form  method="Post" action="contact.php">
                    <label for="name">Full Name <span>*</span></label>
                    <input type="text" id="name" placeholder="E.g: 'Joe Shmoe'" value="<?php echo $_SESSION['user_name'] ?>"  name="name"required>

                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" placeholder="youremail@example.com"  value="<?php echo $_SESSION['email'] ?>" name="email" required>

                    <label for="message">Tell us about it <span>*</span></label>
                    <textarea id="message" placeholder="Write Here.." name="text" required></textarea>

                    <button type="submit" class="btn" style="background: rgba(21, 114, 211, 1);"> 
                        <i class="fas fa-envelope" ></i> Send Message
                    </button>
                </form>
            </div>
        </div>

    </main>
</section>              
</main>
</section>

</body>
</html> 