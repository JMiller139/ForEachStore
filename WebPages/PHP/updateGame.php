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

$query = "SELECT Game_ID FROM Games WHERE Title = '$title'";
$result = mysqli_query($connect, $query);

while ($row=mysqli_fetch_assoc($result)) {
    $id = htmlspecialchars($row['Game_ID']);
}


$query = "UPDATE Game_Developers SET Developer='$developer' WHERE Game_ID='$id'";
mysqli_query($connect, $query);

$query = "UPDATE Game_Publishers SET Publisher='$publisher' WHERE Game_ID='$id'";
mysqli_query($connect, $query);

$query = "SELECT Platform FROM Game_Platforms WHERE Game_ID='$id'";

$query = "DELETE FROM Game_Platforms WHERE Game_ID = '$id'";
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

$query = "UPDATE Game_Genres SET Genre='$genre' WHERE Game_ID='$id'";
mysqli_query($connect, $query);

$query = "UPDATE Games SET Release_Date='$releaseDate', ESRB_Rating='$esrbRating', Price='$price', Icon='$icon' WHERE Game_ID='$id'";
mysqli_query($connect, $query);

mysqli_close($connect);


?>
