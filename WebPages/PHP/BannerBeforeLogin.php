<?php
/**
 * Banner Before Login
 * Logo:  48x48
 * Icons: 32x32
 */

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Banner Before Login</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='../CSS/BannerBeforeLogin.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <!-- <link rel='stylesheet' type='text/css' href='BannerBeforeLogin-CSS.css'> -->
</head>
<body>
    <div class = 'test'>
    <div class='row'>
        <div class='col-lg-5'>
            <a href='./Home.php'><img class='logo-icon' src='../IMGS/Logo.png' alt='Logo'></a>
            <img class='vbar-icon' src='../IMGS/VerticalBar.png' alt='vertical bar'>
            <a href='./Home.php'><img class='page-icon' src='../IMGS/HomeIcon.png' alt='Logo'></a>
            <a href='./Store.php'><img class='page-icon' src='../IMGS/StoreIcon.png' alt='Logo'></a>
            <img class='vbar-icon' src='../IMGS/VerticalBar.png' alt='Logo'>
        </div>
        <div class='col-lg-2'>
            The Four Eaches!
        </div>  
        <div class='col-lg-5'>
            <input class='banner-textbox' type='text' placeholder='username'>
            <input class='banner-textbox' type='password' placeholder='password'>
            <button class='banner-btn' type='button'>Login</button>
            <a class='signup' href='AccountCreation.php'>sign-up</a>
        </div>
    </div>
    </div>
</body>
</html>