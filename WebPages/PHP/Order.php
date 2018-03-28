<!DOCTYPE html>
<html>
<head>
  <link href="../CSS/Order.css" rel="stylesheet" type="text/css"/>
  <title>Order</title>
</head>
<body>
  <form action = "CheckOut.php" method ="post">
    <h2>Review Order</h2>
    <div class="orderTable">
      <h4>Games</h4>
      <p><a href=" " class = "games">Grand Theft Auto 5</a>
        <a href=" " class = "remove">Remove</a>
        <span class="price">$59.99</span></p>
      <p><a id = "games" href=" " class = "games">Border Lands 2</a>
        <a id = "remove" href=" " class = "remove">Remove</a>
        <span class="price">$39.99</span></p>
      <p><a href=" " class = "games">Rocket League</a>
        <a href=" " class = "remove">Remove</a>
        <span class="price">$45.00</span></p>
      <p><a href=" " class = "games">Eco</a>
        <a href=" " class = "remove">Remove</a>
        <span class="price">$50.00</span></p>
      <hr>
      <p>Total <span class="price" style="color:red"><b>$194.98</b></span></p>
    </div>
  </div>
</div>
<input type="submit" value="Continue to Checkout" class="button">
</form>
</body>
</html>
