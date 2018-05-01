<?php include 'Order.css';
function deleteGame(){
  $id = $_POST['Game_ID'];
  $servername = "localhost";
  $username = "proj1";
  $password = "foreach";
  $dname = "proj1";
  $connect = mysqli_connect($servername, $username, $password, $dname);
  if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $query = "DELETE FROM Orders WHERE Game_ID = '$id'";
  mysqli_query($connect, $query);

  mysqli_close($connect);
}
 ?>
