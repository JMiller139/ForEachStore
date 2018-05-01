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
  echo "<table>";
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $totalPrice += $row["Price"];
      $count += 1;
      echo "<tr class='order-row'>";
      echo "<td class='order-row-section'><input type='button' id='".$row["Game_ID"]."' value='&times' class='dbutton' /></td>";
      echo  "<td class='order-row-section order-item'><a id = 'games' href= ' ' class = 'games'>".$row["Title"]."</a></td>";
      echo "<td id='price-td'><span id='game-price-info'class='order-row-section price'>$".$row["Price"]."</span></td>";
      echo "</tr>";
    }
    echo "<td></td>";
    echo "<td id='total-label'>Total</td>";
    echo "<td id='total-price-info'>$".$totalPrice."</td>";
  } 
  else {
    echo "<tr>";
    echo "<td id='total-label'>Total</td>";
    echo "<td id='total-price-info'>$".$totalPrice."</td>";
    echo "</tr>";
  }
    echo "</table>";
    mysqli_close($connect);
}
 ?>
