<?php include 'getOrder.php';
$connect = mysqli_connect("localhost", "proj1", "foreach", "proj1");
$cust = $_POST["Cust_ID"];
$ordr = $_POST["Order_ID"];
$query = "SELECT * FROM Orders WHERE Customer_ID = '$cust' AND Order_ID = '$ordr'";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en-au">
<head>
<meta charset="utf-8" />
<title>Your Order</title>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../CSS/Order.css" rel="stylesheet" type="text/css"/>
  <script>
    $(document).ready(function(){
      $('.delete_order').click(function(){
        var game_id = $(this).attr("id");
        $.ajax({
          url:"deleteOrder.php",
          method:"post",
          data:{game_id:game_id},
          dataType: "JSON"
        });
        window.location.reload();
      });
    });
  </script>
</head>
<body id='order-body'>
  <form action = "CheckOut.php" name ="myForm">
    <div id='order-page-section' align='center'>
      <h1 align='center'>Review Order</h1>
      <div class="orderTable" id='order-table'>
        <h1>Games</h1>
        <p><?php listOrder();?>
          <?php/*
            while($row = mysqli_fetch_array($result)){
              ?>
            <button name='delete' class='delete-order' id='<?php echo $row['Game_ID']?>'>Delete</button>
            <?php
          }*/
        ?>
        </p>
      </div>
      <input type="submit" value="Continue to Checkout" id='cont-checkout-btn' class="button">
    </div>
  </form>
</body>
</html>
