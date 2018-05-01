<?php

$title = $_POST['gtitle'];
$releaseDate = $_POST['rdate'];
$esrbRating = $_POST['esrbrate'];
$price = $_POST['price'];
$icon = $_POST['icon'];
$developer = $_POST['developer'];
$publisher = $_POST['publisher'];
$platformPC = $_POST['platformPC'];
$platformXbox = $_POST['platformXbox'];
$platformPlay = $_POST['platformPlay'];
$genre = $_POST['genre'];

$servername = "localhost";
$username = "proj1";
$password = "foreach";
$dname = "proj1";

$connect = mysqli_connect($servername, $username, $password, $dname);
if(mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }



mysqli_close($connect);



?>
