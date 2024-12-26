<?php 
$servername="localhost";
$username="root";
$pwd="";
$dbname="db";
// Create connection
$conn=mysqli_connect($servername,$username,$pwd,$dbname);


// if(isset($conn)){
//     $message ="Connected successfully";
// }else{
//     $message ="Connection Failed !";
// }
?>
<!-- <html>
    <head>
    <style> 
    #message {
            font-size: 20px;
            color: blue;
            position: fixed; /* Sticks the element to the viewport */
            bottom: 0; /* Aligns it to the bottom of the page */
            width: 100%; /* Full width */
            text-align: center; /* Center text */
            background-color: #ff7e5f; /* Background color */
            padding: 10px; /* Padding around text */
            font-size: 18px; /* Text size */
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3); /* Shadow for effect */
            z-index: 1000; /* Ensures the element stays on top */
        }

    </style>
</head>
<body>
<div id="message"><?php echo $message; ?></div>

<script>
    // Set a timer to hide the element after 5 seconds (5000 milliseconds)
    setTimeout(function() {
        document.getElementById("message").style.display = "none";
    }, 3000);
</script>
</body>
</html> -->
