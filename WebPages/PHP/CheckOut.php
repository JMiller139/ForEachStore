<!DOCTYPE html>
<html>
<head>
  <link href="../CSS/checkOut.css" rel="stylesheet" type="text/css"/>
  <title>Checkout</title>

</head>
<body>

<h2>Checkout</h2>
  <div class="checkoutPad">
    <div class="checkoutTable">
      <h4>Cart</h4>
      <p><a href=" ">Grand Theft Auto 5</a> <span class="price">$59.99</span></p>
      <p><a href=" ">Border Lands 2</a> <span class="price">$39.99</span></p>
      <p><a href=" ">Rocket League</a> <span class="price">$45.00</span></p>
      <p><a href=" ">Eco</a> <span class="price">$50.00</span></p>
      <hr>
      <p>Total <span class="price" style="color:red"><b>$194.98</b></span></p>
    </div>
  </div>
</div>
<div class = "infoPad">
  <div class = "paymentTable">
    <h3>Payment Info</h3>
    <label for="cname">Name on Card</label>
    <input type="text" id="cname" name="cardname" placeholder="Bob Alice">
    <label for="ccnum">Credit card number</label>
    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
    <label for="expmonth">Exp Month</label>
    <input type="text" id="expmonth" name="expmonth" placeholder="September">
  </div>
</div>
  <div class = "infoPad">
    <div class = "infoTable">
      <h3>Billing Address</h3>
      <label for="fname">Full Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Bob Alice">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="bob@example.com">
      <label for="adr">Address</label>
      <input type="text" id="adr" name="address" placeholder="801 E Main St">
      <label for="city">City</label>
      <input type="text" id="city" name="city" placeholder="Radford">
      <label for="state">State</label>
      <input type="text" id="state" name="state" placeholder="VA">
      <label for="zip">Zip</label>
      <input type="text" id="zip" name="zip" placeholder="24141">
    </div>
  </div>
  <input type="submit" value="Complete Checkout" class="button">
</body>
</html>
