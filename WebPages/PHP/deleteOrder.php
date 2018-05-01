<?php include 'Order.css';
function deleteGame(){
  $title = $_POST['gtitle'];
  $servername = "localhost";
  $username = "proj1";
  $password = "foreach";
  $dname = "proj1";
  $connect = mysqli_connect($servername, $username, $password, $dname);
  if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $query = "SELECT Game_ID FROM Games WHERE Title = '$title'";
  $result = mysqli_query($connect, $query);

  while ($row=mysqli_fetch_assoc($result)) {
      $id = htmlspecialchars($row['Game_ID']);
  }

  $query = "DELETE FROM Orders WHERE Game_ID = '$id'";
  mysqli_query($connect, $query);

  mysqli_close($connect);
}
 ?>
