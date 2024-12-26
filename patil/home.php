<?php 
 session_start();
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
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="index.js"></script> 
    <style>
           .page3 {
            height: 100%;
            width: 100%;
            /* background-color: aqua; */
            display: flex;
            padding: 50px 0px 0 0;
            /* background-color: aqua; */
        }

        .page3-left {
            height: 100%;
            width: 50%;
            /* background-color: coral; */
            background-image: url(Vector.png);
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .page3-right {
            height: 100%;
            width: 50%;
            /* background-color:red; */
            /* border: 1px solid black; */
            display: flex;
            flex-direction: column;
            padding: 0 80px 0 20px;

            /* justify-content: flex-start;
            align-items: flex-start; */
        }

        .page3-right h4 {
            padding: 12px 35px;
            gap: 8px;
            /* white-space: nowrap; */
            border-radius: 8px;
            /* opacity: 0px; */
            background: rgba(21, 114, 211, 0.1);
            /* color: ;     */
            font-family: Poppins;
            font-size: 14px;
            font-weight: 600;
            line-height: 21px;
            /* text-align: left; */
            color: rgba(21, 114, 211, 1);
            cursor: pointer;
            width: 187px;
        }

        .page3-right h1 {
            font-family: Poppins;
            font-size: 38px;
            font-weight: 700;
            line-height: 49.4px;
            /* text-align: left; */
            color: rgba(51, 51, 51, 1);
            padding-top: 15px;
            padding-bottom: 30px;
            width: 80%;

        }

        .page3-part2 {
            display: flex;
            gap: 40px;
            flex-direction: column;
            padding-top: 15px;
        }

        .part2-contanier {
            display: flex;
            gap: 30px;
            height: 75px;


        }

        .part2-contanier .part2-svg {
            height: 65px;
            width: 65px;
            /* border: 1px solid black; */
            /* text-align: center; */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            background: rgba(236, 245, 255, 1);


        }

        .part2-contanier .part2-data {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            /* font-size: 14px; */
            /* height: 70px; */
        }

        .part2-contanier .part2-data h3 {
            font-family: Poppins;
            font-size: 20px;
            font-weight: 700;
            line-height: 30px;
            text-align: left;


        }

        .part2-contanier .part2-data p {
            font-family: Poppins;
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
            text-align: left;
            color: rgba(109, 109, 109, 1);

        }
        .mbtn-primary:hover {
            font-weight: 400;
            border-style: none;
         }
          .mbtn-secondary:hover {
        background-color: black;
        font-weight: 400;
        color: white;
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
    <!-- <section class="hero-section">
        <h1>The perfect car for your next trip is just around the corner</h1>
        <div class="search-form">
            <div class="date-input">
                <label for="start-date">Select start date</label>
                <input type="datetime-local" id="start-date">
            </div>
            <div class="date-input">
                <label for="end-date">Select end date</label>
                <input type="datetime-local" id="end-date">
            </div>
            <a id="search-btn" href="collection.php" style="text-align: center;margin: 10px 10px;line-height: 32px;margin-top: 22px;">Search</a>
        </div>
    </section> -->
    <main>
        <section class="hero" style="background:white">
            <div class="hero-text">
                <p  style="color: rgba(21, 114, 211, 1)">Plan your trip now</p>
                <h1 style="color: black">Save <span style="color: rgba(21, 114, 211, 1)">big</span> with our car rental</h1>
                <p style="color: black">Rent the car of your dreams. Unbeatable prices, unlimited miles, flexible pick-up options and much
                    more.</p>
                <div class="hero-buttons">
                    <a href="collection.php" class="mbtn mbtn-primary" style="background: rgba(21, 114, 211, 0.1);color: rgba(21, 114, 211, 1);">Book Ride</a>


                    <a href="contact.php" class="mbtn mbtn-secondary">Learn More</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="images/audi-removebg-preview.png" alt="Car Image" style="height: 500px;" >
            </div>
        </section>
    </main>

    <!-- <section id="booking" >
        <main>
            <div class="book-container">
                <h1 id="book">Book Your Dream Car</h1>
                <form>
                    <div class="form-group">
        
                        <label for="car_type"><i class="fas fa-map-marker-alt"></i>Select Car Type: <span>*</span></label>
                        <select name="car_type" id="car_type">
                            <option value="Sedan">Sedan</option>
                            <option value="SUV">SUV</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Convertible">Convertible</option>
                            <option value="Coupe">Coupe</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pick-up-location"><i class="fas fa-map-marker-alt"></i> Pick-up <span>*</span></label>
                        <input type="text" id="pick-up-location" placeholder="Select pick up location">
                    </div>
                    <div class="form-group">
                        <label for="drop-off-location"><i class="fas fa-map-marker-alt"></i> Drop-off <span>*</span></label>
                        <input type="text" id="drop-off-location" placeholder="Select drop off location">
                    </div>
                    <div class="form-group">
                        <label for="pick-up-date"><i class="fas fa-calendar-alt"></i> Pick-up <span>*</span></label>
                        <input type="date" id="pick-up-date" placeholder="dd - mm - yyyy">
                    </div>
                    <div class="form-group">
                        <label for="drop-off-date"><i class="fas fa-calendar-alt"></i> Drop-off <span>*</span></label>
                        <input type="date" id="drop-off-date" placeholder="dd - mm - yyyy">
                    </div>
                    <button type="submit" class="search-button">Search</button>
                </form>
            </div>
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        </main>
    </section> -->

    <div class="page3" style="background: white;">
        <div class="page3-left">
            <img src="Audi 1.png" alt="" style=" position: absolute;top: 45%;">
        </div>
        <div class="page3-right">
            <h4>WHY CHOSSE US</h3>
                <h1>We Offer The Best Experience With Our Rental Deals</h1>
                <div class="page3-part2">
                    <div class="part2-contanier">
                        <div class="part2-svg">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.94 2.71L9.53001 8.32H7.12001C6.72001 8.32 6.33001 8.35 5.95001 8.43L6.95001 6.03L6.99001 5.94L7.05001 5.78C7.08001 5.71 7.10001 5.65 7.13001 5.6C8.29001 2.91 9.59001 2.07 11.94 2.71Z"
                                    fill="#1572D3" />
                                <path
                                    d="M18.73 8.59L18.71 8.58C18.11 8.41 17.5 8.32 16.88 8.32H10.62L12.87 3.09L12.9 3.02C13.04 3.07 13.19 3.14 13.34 3.19L15.55 4.12C16.78 4.63 17.64 5.16 18.17 5.8C18.26 5.92 18.34 6.03 18.42 6.16C18.51 6.3 18.58 6.44 18.62 6.59C18.66 6.68 18.69 6.76 18.71 6.85C18.86 7.36 18.87 7.94 18.73 8.59Z"
                                    fill="#1572D3" />
                                <path
                                    d="M12.52 18.16H12.77C13.07 18.16 13.32 17.89 13.32 17.56C13.32 17.14 13.2 17.08 12.94 16.98L12.52 16.83V18.16Z"
                                    fill="#1572D3" />
                                <path
                                    d="M18.29 10.02C17.84 9.89 17.37 9.82 16.88 9.82H7.11999C6.43999 9.82 5.79999 9.95 5.19999 10.21C3.45999 10.96 2.23999 12.69 2.23999 14.7V16.65C2.23999 16.89 2.25999 17.12 2.28999 17.36C2.50999 20.54 4.20999 22.24 7.38999 22.45C7.61999 22.48 7.84999 22.5 8.09999 22.5H15.9C19.6 22.5 21.55 20.74 21.74 17.24C21.75 17.05 21.76 16.85 21.76 16.65V14.7C21.76 12.49 20.29 10.63 18.29 10.02ZM13.28 16C13.74 16.16 14.36 16.5 14.36 17.56C14.36 18.47 13.65 19.2 12.77 19.2H12.52V19.42C12.52 19.71 12.29 19.94 12 19.94C11.71 19.94 11.48 19.71 11.48 19.42V19.2H11.39C10.43 19.2 9.63999 18.39 9.63999 17.39C9.63999 17.1 9.86999 16.87 10.16 16.87C10.45 16.87 10.68 17.1 10.68 17.39C10.68 17.81 11 18.16 11.39 18.16H11.48V16.47L10.72 16.2C10.26 16.04 9.63999 15.7 9.63999 14.64C9.63999 13.73 10.35 13 11.23 13H11.48V12.78C11.48 12.49 11.71 12.26 12 12.26C12.29 12.26 12.52 12.49 12.52 12.78V13H12.61C13.57 13 14.36 13.81 14.36 14.81C14.36 15.1 14.13 15.33 13.84 15.33C13.55 15.33 13.32 15.1 13.32 14.81C13.32 14.39 13 14.04 12.61 14.04H12.52V15.73L13.28 16Z"
                                    fill="#1572D3" />
                                <path
                                    d="M10.68 14.64C10.68 15.06 10.8 15.12 11.06 15.22L11.48 15.37V14.04H11.23C10.92 14.04 10.68 14.31 10.68 14.64Z"
                                    fill="#1572D3" />
                            </svg>
                        </div>
                        <div class="part2-data">
                            <h3>Best Price Guaranteed</h3>
                            <p>Find a lower price? We'll refund you 100% <br>of the difference</p>
                        </div>
                    </div>
                    <div class="part2-contanier">
                        <div class="part2-svg">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.94 2.71L9.53001 8.32H7.12001C6.72001 8.32 6.33001 8.35 5.95001 8.43L6.95001 6.03L6.99001 5.94L7.05001 5.78C7.08001 5.71 7.10001 5.65 7.13001 5.6C8.29001 2.91 9.59001 2.07 11.94 2.71Z"
                                    fill="#1572D3" />
                                <path
                                    d="M18.73 8.59L18.71 8.58C18.11 8.41 17.5 8.32 16.88 8.32H10.62L12.87 3.09L12.9 3.02C13.04 3.07 13.19 3.14 13.34 3.19L15.55 4.12C16.78 4.63 17.64 5.16 18.17 5.8C18.26 5.92 18.34 6.03 18.42 6.16C18.51 6.3 18.58 6.44 18.62 6.59C18.66 6.68 18.69 6.76 18.71 6.85C18.86 7.36 18.87 7.94 18.73 8.59Z"
                                    fill="#1572D3" />
                                <path
                                    d="M12.52 18.16H12.77C13.07 18.16 13.32 17.89 13.32 17.56C13.32 17.14 13.2 17.08 12.94 16.98L12.52 16.83V18.16Z"
                                    fill="#1572D3" />
                                <path
                                    d="M18.29 10.02C17.84 9.89 17.37 9.82 16.88 9.82H7.11999C6.43999 9.82 5.79999 9.95 5.19999 10.21C3.45999 10.96 2.23999 12.69 2.23999 14.7V16.65C2.23999 16.89 2.25999 17.12 2.28999 17.36C2.50999 20.54 4.20999 22.24 7.38999 22.45C7.61999 22.48 7.84999 22.5 8.09999 22.5H15.9C19.6 22.5 21.55 20.74 21.74 17.24C21.75 17.05 21.76 16.85 21.76 16.65V14.7C21.76 12.49 20.29 10.63 18.29 10.02ZM13.28 16C13.74 16.16 14.36 16.5 14.36 17.56C14.36 18.47 13.65 19.2 12.77 19.2H12.52V19.42C12.52 19.71 12.29 19.94 12 19.94C11.71 19.94 11.48 19.71 11.48 19.42V19.2H11.39C10.43 19.2 9.63999 18.39 9.63999 17.39C9.63999 17.1 9.86999 16.87 10.16 16.87C10.45 16.87 10.68 17.1 10.68 17.39C10.68 17.81 11 18.16 11.39 18.16H11.48V16.47L10.72 16.2C10.26 16.04 9.63999 15.7 9.63999 14.64C9.63999 13.73 10.35 13 11.23 13H11.48V12.78C11.48 12.49 11.71 12.26 12 12.26C12.29 12.26 12.52 12.49 12.52 12.78V13H12.61C13.57 13 14.36 13.81 14.36 14.81C14.36 15.1 14.13 15.33 13.84 15.33C13.55 15.33 13.32 15.1 13.32 14.81C13.32 14.39 13 14.04 12.61 14.04H12.52V15.73L13.28 16Z"
                                    fill="#1572D3" />
                                <path
                                    d="M10.68 14.64C10.68 15.06 10.8 15.12 11.06 15.22L11.48 15.37V14.04H11.23C10.92 14.04 10.68 14.31 10.68 14.64Z"
                                    fill="#1572D3" />
                            </svg>
                        </div>
                        <div class="part2-data">
                            <h3>Experience Driver</h3>
                            <p>Don't have Drive? Dont't Worry,We Have Many <br> Exprienced Driver For You</p>
                        </div>
                    </div>
                    <div class="part2-contanier">
                        <div class="part2-svg">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.94 2.71L9.53001 8.32H7.12001C6.72001 8.32 6.33001 8.35 5.95001 8.43L6.95001 6.03L6.99001 5.94L7.05001 5.78C7.08001 5.71 7.10001 5.65 7.13001 5.6C8.29001 2.91 9.59001 2.07 11.94 2.71Z"
                                    fill="#1572D3" />
                                <path
                                    d="M18.73 8.59L18.71 8.58C18.11 8.41 17.5 8.32 16.88 8.32H10.62L12.87 3.09L12.9 3.02C13.04 3.07 13.19 3.14 13.34 3.19L15.55 4.12C16.78 4.63 17.64 5.16 18.17 5.8C18.26 5.92 18.34 6.03 18.42 6.16C18.51 6.3 18.58 6.44 18.62 6.59C18.66 6.68 18.69 6.76 18.71 6.85C18.86 7.36 18.87 7.94 18.73 8.59Z"
                                    fill="#1572D3" />
                                <path
                                    d="M12.52 18.16H12.77C13.07 18.16 13.32 17.89 13.32 17.56C13.32 17.14 13.2 17.08 12.94 16.98L12.52 16.83V18.16Z"
                                    fill="#1572D3" />
                                <path
                                    d="M18.29 10.02C17.84 9.89 17.37 9.82 16.88 9.82H7.11999C6.43999 9.82 5.79999 9.95 5.19999 10.21C3.45999 10.96 2.23999 12.69 2.23999 14.7V16.65C2.23999 16.89 2.25999 17.12 2.28999 17.36C2.50999 20.54 4.20999 22.24 7.38999 22.45C7.61999 22.48 7.84999 22.5 8.09999 22.5H15.9C19.6 22.5 21.55 20.74 21.74 17.24C21.75 17.05 21.76 16.85 21.76 16.65V14.7C21.76 12.49 20.29 10.63 18.29 10.02ZM13.28 16C13.74 16.16 14.36 16.5 14.36 17.56C14.36 18.47 13.65 19.2 12.77 19.2H12.52V19.42C12.52 19.71 12.29 19.94 12 19.94C11.71 19.94 11.48 19.71 11.48 19.42V19.2H11.39C10.43 19.2 9.63999 18.39 9.63999 17.39C9.63999 17.1 9.86999 16.87 10.16 16.87C10.45 16.87 10.68 17.1 10.68 17.39C10.68 17.81 11 18.16 11.39 18.16H11.48V16.47L10.72 16.2C10.26 16.04 9.63999 15.7 9.63999 14.64C9.63999 13.73 10.35 13 11.23 13H11.48V12.78C11.48 12.49 11.71 12.26 12 12.26C12.29 12.26 12.52 12.49 12.52 12.78V13H12.61C13.57 13 14.36 13.81 14.36 14.81C14.36 15.1 14.13 15.33 13.84 15.33C13.55 15.33 13.32 15.1 13.32 14.81C13.32 14.39 13 14.04 12.61 14.04H12.52V15.73L13.28 16Z"
                                    fill="#1572D3" />
                                <path
                                    d="M10.68 14.64C10.68 15.06 10.8 15.12 11.06 15.22L11.48 15.37V14.04H11.23C10.92 14.04 10.68 14.31 10.68 14.64Z"
                                    fill="#1572D3" />
                            </svg>
                        </div>
                        <div class="part2-data">
                            <h3>24 Hour Car Delivery</h3>
                            <p>Book Your Car Anytime And We Will Deliver it <br>Directly To You</p>
                        </div>
                    </div>
                    <div class="part2-contanier">
                        <div class="part2-svg">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.94 2.71L9.53001 8.32H7.12001C6.72001 8.32 6.33001 8.35 5.95001 8.43L6.95001 6.03L6.99001 5.94L7.05001 5.78C7.08001 5.71 7.10001 5.65 7.13001 5.6C8.29001 2.91 9.59001 2.07 11.94 2.71Z"
                                    fill="#1572D3" />
                                <path
                                    d="M18.73 8.59L18.71 8.58C18.11 8.41 17.5 8.32 16.88 8.32H10.62L12.87 3.09L12.9 3.02C13.04 3.07 13.19 3.14 13.34 3.19L15.55 4.12C16.78 4.63 17.64 5.16 18.17 5.8C18.26 5.92 18.34 6.03 18.42 6.16C18.51 6.3 18.58 6.44 18.62 6.59C18.66 6.68 18.69 6.76 18.71 6.85C18.86 7.36 18.87 7.94 18.73 8.59Z"
                                    fill="#1572D3" />
                                <path
                                    d="M12.52 18.16H12.77C13.07 18.16 13.32 17.89 13.32 17.56C13.32 17.14 13.2 17.08 12.94 16.98L12.52 16.83V18.16Z"
                                    fill="#1572D3" />
                                <path
                                    d="M18.29 10.02C17.84 9.89 17.37 9.82 16.88 9.82H7.11999C6.43999 9.82 5.79999 9.95 5.19999 10.21C3.45999 10.96 2.23999 12.69 2.23999 14.7V16.65C2.23999 16.89 2.25999 17.12 2.28999 17.36C2.50999 20.54 4.20999 22.24 7.38999 22.45C7.61999 22.48 7.84999 22.5 8.09999 22.5H15.9C19.6 22.5 21.55 20.74 21.74 17.24C21.75 17.05 21.76 16.85 21.76 16.65V14.7C21.76 12.49 20.29 10.63 18.29 10.02ZM13.28 16C13.74 16.16 14.36 16.5 14.36 17.56C14.36 18.47 13.65 19.2 12.77 19.2H12.52V19.42C12.52 19.71 12.29 19.94 12 19.94C11.71 19.94 11.48 19.71 11.48 19.42V19.2H11.39C10.43 19.2 9.63999 18.39 9.63999 17.39C9.63999 17.1 9.86999 16.87 10.16 16.87C10.45 16.87 10.68 17.1 10.68 17.39C10.68 17.81 11 18.16 11.39 18.16H11.48V16.47L10.72 16.2C10.26 16.04 9.63999 15.7 9.63999 14.64C9.63999 13.73 10.35 13 11.23 13H11.48V12.78C11.48 12.49 11.71 12.26 12 12.26C12.29 12.26 12.52 12.49 12.52 12.78V13H12.61C13.57 13 14.36 13.81 14.36 14.81C14.36 15.1 14.13 15.33 13.84 15.33C13.55 15.33 13.32 15.1 13.32 14.81C13.32 14.39 13 14.04 12.61 14.04H12.52V15.73L13.28 16Z"
                                    fill="#1572D3" />
                                <path
                                    d="M10.68 14.64C10.68 15.06 10.8 15.12 11.06 15.22L11.48 15.37V14.04H11.23C10.92 14.04 10.68 14.31 10.68 14.64Z"
                                    fill="#1572D3" />
                            </svg>
                        </div>
                        <div class="part2-data">
                            <h3>24/7 Technical Support</h3>
                            <p>Have A Question? Contact Rentcars Support<br>Any Time When You Have Problem</p>
                        </div>
                    </div>
                </div>

        </div>
</div>
    <!-- <section id="contact">
        <main>
            < <h1 id="contact">CONTACT-US </h1> 
        <div class="contact-container">
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
                <form>
                    <label for="name">Full Name <span>*</span></label>
                    <input type="text" id="name" placeholder="E.g: 'Joe Shmoe'" required>
    
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" placeholder="youremail@example.com" required>
    
                    <label for="message">Tell us about it <span>*</span></label>
                    <textarea id="message" placeholder="Write Here.." required></textarea>
    
                    <button type="submit" class="btn"> 
                        <i class="fas fa-envelope"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    
         </main>
    </section> -->

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





    <script>
        //background video speed 
        document.addEventListener('DOMContentLoaded', function () {
            var video = document.getElementById('background-video');
            video.playbackRate = 0.5; // Set the video speed (1.0 is normal speed, 0.5 is half speed, 2.0 is double speed, etc.)
        });

    </script>
</body>

</html>