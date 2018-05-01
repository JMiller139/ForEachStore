<?php

$title = $_POST['gtitle'];

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

$query = "DELETE FROM Game_Developers WHERE Game_ID = '$id'";
mysqli_query($connect, $query);

$query = "DELETE FROM Game_Publishers WHERE Game_ID = '$id'";
mysqli_query($connect, $query);

$query = "DELETE FROM Game_Platforms WHERE Game_ID = '$id'";
mysqli_query($connect, $query);

$query = "DELETE FROM Game_Genres WHERE Game_ID = '$id'";
mysqli_query($connect, $query);

$query = "DELETE FROM Games WHERE Game_ID = '$id'";
mysqli_query($connect, $query);

mysqli_close($connect);


?>
