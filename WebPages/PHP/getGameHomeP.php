<?php


$servername = "localhost";
$username = "proj1";
$password = "foreach";
$dnmae = "proj1";

$connect = mysqli_connect($servername, $username, $password, $dnmae);
if(mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }



$qu = "SELECT * FROM Games"; 
$results = mysqli_query($connect, $qu);
$data = array();
while ($row = mysqli_fetch_assoc($results)){
    $data[] = $row;
}

echo json_encode($data);


mysqli_close($connect);



?>