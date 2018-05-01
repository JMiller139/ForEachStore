<?php include 'getOrder.php';?>
<!DOCTYPE html>
<html lang="en-au">
<head>
<meta charset="utf-8" />
<title>Your Order</title>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../CSS/Order.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <form action = "CheckOut.php" >
    <h2>Review Order</h2>
    <div class="orderTable">
      <h4>Games</h4>
      <p><?php listOrder();?></p>
    </div>
  </div>
</div>
<input type="submit" value="Continue to Checkout" class="button">
<input type='button' onclick='getOrder()' value='Query MySQL' />
</form>
</body>
</html>
