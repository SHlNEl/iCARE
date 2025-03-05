<?php
    require 'iCAREconf.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCARE Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/tamaraws.png');
            background-size: cover;
            background-position: center;
            background-color: rgb(1, 1, 1);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        .container {
            background: rgb(252, 252, 252);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            z-index: 2;
        }
        .logo {
            font-size: 32px;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .welcome {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left; /* Keep text alignment left */
            width: 100%; /* Set to 100% to occupy full width */
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            display: block;
            margin: 0 auto; /* Center the input boxes */
            width: 90%; /* Adjust width as needed */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .checkbox {
            display: flex;
            align-items: center;
        }
        .checkbox input {
            margin-right: 10px;
        }
        .login-btn {
            background: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .login-btn:hover {
            background: #FFD700;
        }
    </style>
</head>
<body>

    <div class="overlay"></div>

    <div class="container">

        <img class="logo" src="images/icare.png" alt="iCARE Logo" width="250">
        <form action="student.php" method="post">
            <div class="input-group">
                <label for="student-number">Student Number</label>
                <input name="snum" type="text" id="student-number" placeholder="Enter Student Number" required/>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input name="spass" type="password" id="password" placeholder="Enter Password" required/>
            </div>
            <button name="loginbtn" class="login-btn">LOG IN</button>
        </form>
        <?php
            if(isset($_POST['loginbtn'])){
                //echo '<script type="text/javascript">alert("Insert Clicked")</script>';
                $snum=$_POST['snum'];
                $spass=$_POST['spass'];
                $query="select * from  Student WHERE StudentNumber='$snum' AND Password='$spass'";
                $query_run=mysqli_query($con,$query);
                if(mysqli_num_rows($query_run)>0){
                    //valid
                    $_SESSION['snum']=$snum;
                    header('location:studentint.php');
                }
                else{
                    //invalid
                    echo '<script type="text/javascript">alert("Invalid credentials")</script>';
                }
            }
        ?>
    </div>

</body>
</html>
