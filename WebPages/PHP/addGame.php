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
$dnmae = "proj1";

$connect = mysqli_connect($servername, $username, $password, $dnmae);
if(mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }

$query = "INSERT INTO Games (Game_ID,Title,Release_Date,ESRB_Rating,Price,Icon) VALUES (0,'$title','$releaseDate','$esrbRating','$price','$icon')";
mysqli_query($connect, $query);
$query = "SELECT Game_ID FROM Games WHERE Title = '$title'";
$result = mysqli_query($connect, $query);
while ($row=mysqli_fetch_assoc($result)) {
    $id = htmlspecialchars($row['Game_ID']);
}
$query = "INSERT INTO Game_Developers (Game_Id,Developer) VALUES ('$id','$developer')";
mysqli_query($connect, $query);
$query = "INSERT INTO Game_Publishers (Game_Id,Publisher) VALUES ('$id','$publisher')";
mysqli_query($connect, $query);
if($platformPC != ""){
    $query = "INSERT INTO Game_Platforms (Game_Id,Platform) VALUES ('$id','$platformPC')";
    mysqli_query($connect, $query);
}
if($platformXbox != ""){
    $query = "INSERT INTO Game_Platforms (Game_Id,Platform) VALUES ('$id','$platformXbox')";
    mysqli_query($connect, $query);
}
if($platformPlay != ""){
    $query = "INSERT INTO Game_Platforms (Game_Id,Platform) VALUES ('$id','$platformPlay')";
    mysqli_query($connect, $query);
}
$query = "INSERT INTO Game_Genres (Game_Id,Genre) VALUES ('$id','$genre')";
mysqli_query($connect, $query);

mysqli_close($connect);



?>