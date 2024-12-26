<?php
include("conn.php");
 session_start();

if (isset($_POST['lsubmit'])) {
    // Check if email and password are set
    if (isset($_POST['lemail']) && isset($_POST['lpwd'])) {
        $email = $_POST['lemail'];
        $pwd = $_POST['lpwd'];

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        
        // Execute the prepared statement
        $stmt->execute();
        
        // Get the result of the query
        $result = $stmt->get_result();
        
        // Check if a user with the given email exists
        if ($result->num_rows > 0) {
            // Fetch the user data
            $user = $result->fetch_assoc();

            // Verify the password using the password hash stored in the database
            if (password_verify($pwd, $user['password'])) {
                // Start the session and set session variables for the logged-in user
            
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['fullname'];
                $_SESSION['email']=$user['email'];
                // Redirect to the home page or dashboard after successful login
                header("Location: home.php");
                exit();
            } else {
                echo "<script>alert('Incorrect password');</script>";
            }
        } else {
            echo "<script>alert('No user found with this email');</script>";
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "<script>alert('Please enter both email and password');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="login.css">
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
.toggle-btl:hover,
.toggle-btl.active {
    border-bottom: none;
    background: white;
    color: blue;
    font-weight: bold;
}
.btn {
    width: 100%;
    /* padding: 10px; */
    background-color: #2575fc;
    border: none;
    border-radius: 20px;
    /* color: rgb(255, 0, 0); */
    color:white;
    font-size: 18px;
    cursor: pointer;
    transition: 0.3s ease;
}
   </style>

    
</head>

<body>
    <header style="background: rgba(21, 114, 211, 1);">
        <div class="logo" style="  background:rgba(21, 114, 211, 1);color: white;">
            <img src="images/Icons/car.png" alt="Car Rental Logo">
            <h1 style="color:white">CAR4U</h1>
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

    <div class="containel" style="box-shadow: 0 0 19px black; margin-top:50px">        
        <div class="form-containel">
            <div class="form-toggle">
                <button id="login-toggle" class="toggle-btl">Login</button>
                <button id="signup-toggle" class="toggle-btl">Sign Up</button>
            </div>
            <div class="form-body">
                <form id="login-form" class="form active" method="post">
                    <h2 id="loginh2">Login</h2>
                    <label for="login-email">Email Address</label>
                    <input type="email" id="login-email" placeholder="Email Address" name="lemail" required>
                    <label for="login-password">Password</label>
                    <input type="password" name="lpwd" id="login-password" placeholder="Password" required>
                    <input type="submit" class="btn" name="lsubmit" value="SUBMIT" ></button>
                    <p class="form-text">Don't have an account? <span id="switch-to-signup">Sign Up</span></p>
                    <p class="form-text">Admin Login ?<span id="switch-to-signup"><a href="Admin1\login.php">Sign In</a></span></p>
                </form>

                
                <form id="signup-form" class="form" method="post">
                    <h2>Sign Up</h2>
                    <label for="signup-name">Full Name</label>
                    <input type="text" id="signup-name" placeholder="Full Name" name="name" required>
                    <label for="signup-email">Email Address</label>

                    <input type="email" id="signup-email" placeholder="Email Address" name="email" required>
                    <label for="signup-password">Password</label>
                    <input type="password" id="signup-password" placeholder="Password" name="pwd" required>
                    <label for="signup-cpassword">Confirm Password</label>
                    <input type="password" id="signup-cpassword" placeholder="Confirm Password" name="cpwd"
                        required>
                    <input type="submit" class="btn" name="rsubmit" value="SUBMIT">
                    <p class="form-text">Already have an account? <span id="switch-to-login">Login</span></p>
                </form>
            </div>
        </div>
    </div>
    <script src="login.js"></script>

</body>

</html>
<?php
include("conn.php");

if (isset($_POST['rsubmit'])) {
    // Check if the required fields are set
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['cpwd'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];

        // Check if passwords match
        if ($pwd === $cpwd) {
            // Hash the password for security
            $hashed_pwd = password_hash($pwd, PASSWORD_BCRYPT);

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO user (fullname, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashed_pwd);

            // Execute the prepared statement
            if ($stmt->execute()) {
                echo "<script>alert('Data Inserted');</script>";
                header("Location: login.php"); // Redirect to the login page after successful registration
            } else {
                echo "<script>alert('Data Insertion Failed');</script>";
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            echo "<script>alert('Passwords do not match');</script>";
            header("Location:signup.php");


        }
    } else {
        echo "<script>alert('All fields are required');</script>";
    }
}
?>
