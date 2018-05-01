<?php include 'addCheckOut.php';?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Checkout</title>
  <link href="../CSS/checkOut.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form>
<h2>Checkout</h2>
  <div class="checkoutPad">
    <div class="container">
      <h4>Cart</h4>
      <p><?php listCheckOut();?></p>
    </div>
  </div>
  <div class = "cardPad">
    <div class = "paymentTable">
      <div class = "cardPad">
        <h3>Payment Info</h3>
        <div class = "dropdownContainer">
          <select>
            <option value="Visa">Visa</option>
            <option value="Master Card">Master Card</option>
            <option value="Discover">Discover</option>
            <option value="American Express">American Express</option>
          </select>
        </div>
        <label for="cname">Name on Card</label>
        <input type="text" id="cname" name="cardname" placeholder="Bob Alice"autofocus>
        <label for="ccnum">Credit card number</label>
        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
        <label for="expDate">Exp Date</label>
        <input type="text" id="expDate" name="expDate" placeholder="MM/YYYY">
      </div>
    <div class = "billingPad">
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
      <input type="submit" value="Complete Checkout" class="button">
    </div>
  </div>
</form>
<script>
  function valNameOnCard(){
    var name = $('#cname').val().trim();
    var errors = [];
    if(name === ""){
      errors.push('Required');
    }
    else if (name.length<1) {
      errors.push('Name on Card must be one character or more');
    }
    if(!name.match(/^[A-Za-z]+$/i) && name !== ""){
      errors.push('Name on Card can only contain alphabets');
    }
    return errors;
  }
  function valCreditCardNumber(){
    var ccard = $('#ccnum').val().trim();
    var errors = [];
    if(ccard === ""){
      errors.push('Required');
    }
    else if (ccard.length<16) {
      errors.push('Credit Card must be 16 digits long');
    }
    if(!ccard.match(/^[0-9]{16}$/i) && name !== ""){
      errors.push('Name on Card can only contain digits');
    }
    return errors;
  }
  function valExpDate(){
    var exp = $('#expDate').val().trim();
    var errors = [];
    if(exp === ""){
      errors.push('Required');
    }
    else if (exp.length<5) {
      errors.push('Expiration Date must have a two digit month and a two digit year.');
    }
    if(!exp.match(/^[0-9]{2}\/[0-9]{4}$/i) && name !== ""){
      errors.push('Expiration Data must be in this format 55 MM/YYYY');
    }
    return errors;
  }
  function valFullName(){
    var flNm = $('#fname').val().trim();
    var errors = [];
    if(flNm === ""){
      errors.push('Required');
    }
    else if (flNm.length<1) {
      errors.push('Full name must at least be a character long.');
    }
    if(!flNm.match(/^[a-z ,.'-]+$/i) && name !== ""){
      errors.push('Must all be alphabetic and with the exception 0f {",".","\'","-"}');
    }
    return errors;
  }
  }
  function valEmail(){
    var eml = $('#email').val().trim();
    var errors = [];
    if(eml === ""){
      errors.push('Required');
    }
    else if (eml.length<7) {
      errors.push('Email contains a minimun of 7 characters.');
    }
    if(!eml.match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i) && name !== ""){
      errors.push('email must follow the name@email.com format.');
    }
    return errors;
  }
  }
  function valAddress(){
    var addrs = $('#adr').val().trim();
    var errors = [];
    if(addrs === ""){
      errors.push('Required');
    }
    else if (addrs.length<3) {
      errors.push('Address must at lest be 3 characters excluding spaces.');
    }
    if(!addrs.match(/^[0-9]{1,5}\s[A-Za-z]?\s?(\b[A-Za-z]*\b\s)+[A-Za-z]*$/i) && name !== ""){
      errors.push('Address must at least have a house number and one full street name.');
    }
    return errors;
  }
  function valCity(){
    var cty = $('#city').val().trim();
    var errors = [];
    if(cty === ""){
      errors.push('Required');
    }
    else if (cty.length<3) {
      errors.push('City Name must be at atleast 3 characters.');
    }
    if(!cty.match(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/i) && name !== ""){
      errors.push('City Name can only cointain alphabets.');
    }
    return errors;
  }
  function valState(){
    var st = $('#state').val().trim();
    var errors = [];
    if(st === ""){
      errors.push('Required');
    }
    else if (st.length<5) {
      errors.push('Zipcode must be at atleast 2 characters.');
    }
    if(!st.match(/^[A-Z]{2}$/i) && name !== ""){
      errors.push('Zipcode can only contain 2 alphabets.');
    }
    return errors;
  }
  function valZip(){
    var zip = $('#zip').val().trim();
    var errors = [];
    if(zip === ""){
      errors.push('Required');
    }
    else if (zip.length<5) {
      errors.push('Zipcode must be at atleast 5 characters.');
    }
    if(!zip.match(/^[0-9]{5}$/i) && name !== ""){
      errors.push('Zipcode can only contain 5 digits.');
    }
    return errors;
  }
</script>
</body>
</html>
