<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Appointment Form</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    
</head>

<body>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danta Dentals - Your smile is our priority </title>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" />

    <style>
    body {
        background-color: #e9e9e9;
    }

    .form-c {
        max-width: 500px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px #c9c9c9;
    }

    h1 {
        text-align: center;
        font-size: 32px;
        margin-bottom: 30px;
        color: #1a1a1a;
    }

    .input-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #1a1a1a;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #f4f4f4;
        color: #1a1a1a;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        outline: none;
        background-color: #e0e0e0;
    }

    .btnn {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #4CAF50;
        color: #ffffff;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
    }

    .btnn:hover {
        background-color: #3e8e41;
    }
</style>


</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-tooth"></i> Danta </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#team">team</a>
            <a href="#pricing">pricing</a>
            <a href="#blog">blog</a>
        </nav>

        <a href="admin_login.php" class="btn">Admin Login</a>
        <div id="menu-btn" class="fas fa-bars"></div>

    </header>


    <div class="form-c">
        <form id="login-form" action="login.php" method="POST">
            <h1>Admin Login</h1>
            <div class="input-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btnn">Login</button>
        </form>
    </div>

    <section class="footer">

<div class="box-container">

    <div class="box">
        <h3>address</h3>
        <p>Danta Dentals,
            #45, 2nd Floor,
            MG Road,
            Koramangala,
            Bangalore - 560034.</p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
    </div>

    <div class="box">
        <h3>e-mail</h3>
        <a href="#" class="link">dantadentals@gmail.com</a>
        <a href="#" class="link">customersupport@gmail.com</a>
    </div>

    <div class="box">
        <h3>call us</h3>
        <p>+91 (0) 3 2587 45691</p>
        <p>+91 (0) 3 7852 19654</p>
    </div>

    <div class="box">
        <h3>opening hours</h3>
        <p>monday - friday : 8:00 - 16:00 <br>
            saturday : 9:00 - 15:00
        </p>
    </div>

</div>

<div class="credit">created by <span>"The Tooth Whisperers"</span> | all rights reserved!</div>

</section>
</body>

</html>
