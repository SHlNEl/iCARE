<?php
    require 'iCAREconf.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Request</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #0b301f;
            background-size: cover;
            background-position: center;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-size: 0.5rem;
        }
        header {
            text-align: center;
            position: absolute;
            top: 0;
            width: 100%;
            background-color: #ffd900;
        }
        h1 {
            font-family: 'Bebas Neue', bold;
            font-size: 3rem;
            color: #ffffff;
            padding: 10px 400px;
            margin: 0;
            letter-spacing: 0.2em;
            text-align: center; /* Center the text */
        }
        .logo {
            position: absolute;
            top: 5px;
            left: 10px;
            width: 250px;
        }
        .button-container {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }
        .button {
            background-color: #FFD700;
            border-radius: 5px;
            color: rgb(0, 0, 0);
            padding: 7.5px;
            font-size: 1.25rem;
            width: 135px;
            height: 35px;
            margin: 0 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            font-weight: bolder;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2; /* Ensure button is on top */
        }
        .button:hover {
            background-color: #23e85e;
        }
        .label {
            color: rgb(255, 255, 255);
            padding: 7.5px;
            font-size: 1rem;
            width: 200px; /* Increase width */
            height: 50px; /* Increase height */
            margin: 0 10px;
           
            text-decoration: none;
            font-weight: bolder;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2; /* Ensure button is on top */
            text-align: center; /* Center the text */
            white-space: pre-wrap; /* Allow text to wrap to the next line */
        }
        .emblem {
            position: absolute;
            top: 110px; /* Adjust top position */
            left: 100px;
            width: 100%;
            pointer-events: none; /* Make emblem non-interactive */
        }
        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.75rem;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 125px; /* Adjust top position */
            left: calc(50% + 200px); 
            transform: translateX(-50%);
            width: 400px; /* Increase width */
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            z-index: 2;
        }
        .form-container input, .form-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            font-size: 1rem;
        }
        .form-container label {
            width: 100%;
            text-align: left;
            margin-top: 10px;
            font-size: 1rem;
            display: block; /* Add page break */
        }
        .form-container h2 {
            font-size: 2rem; /* Make the title larger */
            margin: 5px; /* Add some space below the title */
        }
    </style>
</head>
<body>
    <header>
        <h1>SERVICE REQUEST</h1>
    </header>
    <img class="logo" src="images/icare.png" alt="iCARE Logo" width="150">
    <p style="padding-bottom: 50px;"></p>
   
    <div class="emblem">
        <img src="images/emblem.png" alt="Emblem" width="300">
    </div>
    <div class="form-container">
        <h2>Service Request Form</h2> <!-- Add title on top of the form -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="cs">Computer Science</option>
            <option value="it">Information Technology</option>
            <option value="cpe">Computer Engineering</option>
            <option value="ce">Civil Engineering</option>
            <option value="ee">Electrical Engineering</option>
            <option value="me">Mechanical Engineering</option>
            <!-- Add more options as needed -->
        </select>
        
        <label for="prof">Professor:</label>
        <select id="prof" name="prof" required>
            <option value="prof1">Professor 1</option>
            <option value="prof2">Professor 2</option>
            <option value="prof3">Professor 3</option>
            <!-- Add more options as needed -->
        </select>
        
        <label for="service">Service:</label>
        <select id="service" name="service" required>
            <option value="consultation">Faculty Consultation</option>
            <option value="grade">Grade Consultation</option>
            <option value="tutorial">Peer Tutorial</option>
            <option value="tutorial">Special Assessment</option>
            <option value="tutorial">Individual Study</option>
            <option value="tutorial">Group Study</option>
            <!-- Add more options as needed -->
        </select>
        
        <div class="button-container">
            <button type="submit" class="button">Submit</button> <!-- Add submit button -->
        </div>
    </div>
    <div class="button-container" style="position: absolute; bottom: 10px; left: 160px;">
        <a href="https://feutech-edu-ph.zoom.us/j/99809052576#success" class="button" target="_blank">ZOOM LINK</a>
    </div>
    <div class="button-container" style="position: absolute; bottom: 50px; left: 130px;">
        <a class="label" target="_blank">Click this button<br>for consultation!</a>
    </div>
</body>
</html>