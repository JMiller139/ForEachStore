<?php
$gameType = $_POST['gametype'];
$orderID = $_POST['order_ID'];
$custID= $_POST['cust_ID'];
$servername = "localhost";
$username = "proj1";
$password = "foreach";
$dname = "proj1";

$connect = mysqli_connect($servername,$username,$password,$dname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($connect));
}

$sql="INSERT INTO Checkout (Order_ID,Cust_ID,Game_ID)
  VALUES ('$gameType','$orderID','$custID')";
  if (mysqli_query($connect, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }

mysqli_close($connect);
?>
</body>
</html>
