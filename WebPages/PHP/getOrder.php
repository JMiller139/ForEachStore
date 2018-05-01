<?php include 'Order.css';
function connectToDB(){
  $servername = "localhost";
  $username = "proj1";
  $password = "foreach";
  $dname = "proj1";
  $totalPrice = 0.0;
  $connect = mysqli_connect($servername, $username, $password, $dname);
  if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
  }
}
function listOrder(){
  $servername = "localhost";
  $username = "proj1";
  $password = "foreach";
  $dname = "proj1";
  $totalPrice = 0.0;
  $count = 0;
  $connect = mysqli_connect($servername, $username, $password, $dname);
  if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $query = "SELECT * FROM Games";
  $result = mysqli_query($connect, $query);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $totalPrice += $row["Price"];
      $count += 1;
      echo  "<a id = 'games' href= ' ' class = 'games'>".$row["Title"]."</a>";
      echo "<input type='button' id='".$row["Game_ID"]."' value='Delete' class='dbutton' />";
      echo "<span class='price'>$".$row["Price"]."</span>"."<br>";
      }
      echo "<hr>";
      echo "<p>Total <span class='price' style='color:red'><b>$".$totalPrice."</b></span></p>";
    } else {
      echo "Your Cart is Empty!";
      echo "<hr>";
      echo "<p>Total <span class='price' style='color:red'><b>$".$totalPrice."</b></span></p>";
    }
    mysqli_close($connect);
}
 ?>
