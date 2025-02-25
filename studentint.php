<?php
    require 'iCAREconf.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Interface</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/back.png'); /* Set your background image here */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent the background from repeating */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh; /* Ensure the body covers the entire viewport height */
        }
        h1 {
            font-size: 3rem;
            color: #000000;
            background: linear-gradient(to right, rgba(255, 217, 0, 0.526), rgba(255, 217, 0, 0.997));
            padding: 10px; /* Add padding to make the background visible */
            margin-top: 30px;
            align-self: flex-end; /* Move h1 to the furthest right side */
            margin-right: 0px; /* Add some margin to the right */
        }
        
        .library-img {
            position: absolute;
            top: 35px;
            left: 225px;
        }
        .library-img:hover {
            transform: scale(1.1); /* Scale up by 10% */
        }
        .homepage-img {
            position: center;
            top: 90px;
            
        }
        .homepage-img:hover {
            transform: scale(1.1); /* Scale up by 10% */
        }
        .service-request-img {
            position: absolute;
            bottom: 40px;
            left: 285px;
        }
        .service-request-img:hover {
            transform: scale(1.1); /* Scale up by 10% */
        }
        .tutorial-img {
            position: absolute;
            bottom: 20px;
            right: 405px;
        }
        .tutorial-img:hover {
            transform: scale(1.1); /* Scale up by 10% */
        }
        .character {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
       
    </style>
</head>
<body>
    <h1>STUDENT INTERFACE</h1> <!-- Edit this line to change the text -->
    <div class="library-img">
        <img src="images/library.png" alt="Library" width="300">
    </div>
    <div class="homepage-img">
        <img src="images/homepage.png" alt="Homepage" width="400">
    </div>
    <div class="service-request-img">
        <img src="images/service-request.png" alt="Service Request" width="330">
    </div>
    <div class="tutorial-img">
        <img src="images/tutorial.png" alt="Tutorial" width="250">
    </div>
    <div class="character">
        <img src="images/itam.png" alt="Mascot" width="370">
        
    </div>
</body>
</html>