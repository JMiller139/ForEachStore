<?php include 'addCheckOut.php';?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Checkout</title>
  <link href="../CSS/checkOut.css" rel="stylesheet" type="text/css"/>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  
  <script>
    // function valNameOnCard(){
    //   var name = $('#cname').val().trim();
    //   console.log("name", name)
    //   var errors = [];
    //   if(name === ""){
    //     errors.push('Required');
    //   }
    //   else if (name.length<1) {
    //     errors.push('Name on Card must be one character or more');
    //   }
    //   if(!name.match(/^[A-Za-z]+$/i) && name !== ""){
    //     errors.push('Name on Card can only contain alphabets');
    //   }
    //   return errors;
    // }
    
    // function valCreditCardNumber(){
    //   var ccard = $('#ccnum').val().trim();
    //   var errors = [];
    //   if(ccard === ""){
    //     errors.push('Required');
    //   }
    //   else if (ccard.length<16) {
    //     errors.push('Credit Card must be 16 digits long');
    //   }
    //   if(!ccard.match(/^[0-9]{16}$/i) && name !== ""){
    //     errors.push('Name on Card can only contain digits');
    //   }
    //   return errors;
    // }
    // function valExpDate(){
    //   var exp = $('#expDate').val().trim();
    //   var errors = [];
    //   if(exp === ""){
    //     errors.push('Required');
    //   }
    //   else if (exp.length<5) {
    //     errors.push('Expiration Date must have a two digit month and a two digit year.');
    //   }
    //   if(!exp.match(/^[0-9]{2}\/[0-9]{4}$/i) && name !== ""){
    //     errors.push('Expiration Data must be in this format 55 MM/YYYY');
    //   }
    //   return errors;
    // }
    // function valFullName(){
    //   var flNm = $('#fname').val().trim();
    //   var errors = [];
    //   if(flNm === ""){
    //     errors.push('Required');
    //   }
    //   else if (flNm.length<1) {
    //     errors.push('Full name must at least be a character long.');
    //   }
    //   if(!flNm.match(/^[a-z ,.'-]+$/i) && name !== ""){
    //     errors.push('Must all be alphabetic and with the exception 0f {",".","\'","-"}');
    //   }
    //   return errors;
    // }
    
    // function valEmail(){
    //   var eml = $('#email').val().trim();
    //   var errors = [];
    //   if(eml === ""){
    //     errors.push('Required');
    //   }
    //   else if (eml.length<7) {
    //     errors.push('Email contains a minimun of 7 characters.');
    //   }
    //   if(!eml.match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i) && name !== ""){
    //     errors.push('email must follow the name@email.com format.');
    //   }
    //   return errors;
    // }
    
    // function valAddress(){
    //   var addrs = $('#adr').val().trim();
    //   var errors = [];
    //   if(addrs === ""){
    //     errors.push('Required');
    //   }
    //   else if (addrs.length<3) {
    //     errors.push('Address must at lest be 3 characters excluding spaces.');
    //   }
    //   if(!addrs.match(/^[0-9]{1,5}\s[A-Za-z]?\s?(\b[A-Za-z]*\b\s)+[A-Za-z]*$/i) && name !== ""){
    //     errors.push('Address must at least have a house number and one full street name.');
    //   }
    //   return errors;
    // }
    // function valCity(){
    //   var cty = $('#city').val().trim();
    //   var errors = [];
    //   if(cty === ""){
    //     errors.push('Required');
    //   }
    //   else if (cty.length<3) {
    //     errors.push('City Name must be at atleast 3 characters.');
    //   }
    //   if(!cty.match(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/i) && name !== ""){
    //     errors.push('City Name can only cointain alphabets.');
    //   }
    //   return errors;
    // }
    // function valState(){
    //   var st = $('#state').val().trim();
    //   var errors = [];
    //   if(st === ""){
    //     errors.push('Required');
    //   }
    //   else if (st.length<5) {
    //     errors.push('Zipcode must be at atleast 2 characters.');
    //   }
    //   if(!st.match(/^[A-Z]{2}$/i) && name !== ""){
    //     errors.push('Zipcode can only contain 2 alphabets.');
    //   }
    //   return errors;
    // }
    // function valZip(){
    //   var zip = $('#zip').val().trim();
    //   var errors = [];
    //   if(zip === ""){
    //     errors.push('Required');
    //   }
    //   else if (zip.length<5) {
    //     errors.push('Zipcode must be at atleast 5 characters.');
    //   }
    //   if(!zip.match(/^[0-9]{5}$/i) && name !== ""){
    //     errors.push('Zipcode can only contain 5 digits.');
    //   }
    //   return errors;
    // }
    // function valSubmission(){
    //   var valNameOnCardError = valNameOnCard();
      // var valCrdtCrdNmError = valCreditCardNumber();
      // var valExpDateError = valExpDate();
      // var valFullNameError = valFullName();
      // var valEmailError = valEmail();
      // var valAddressError = valAddress();
      // var valCityError = valCity();
      // var valStateError = valState();
      // var valZipError = valZip();
      // var totalErrors = valNameOnCardError.length + valCrdtCrdNmError.length + valExpDateError.length +
      // valFullNameError.length + valEmailError.length + valAddressError.length + valCityError.length +
      // valStateError.length + valZipError.length;

      // if(valNameOnCardError.length > 0) {
      //   console.log(valNameOnCardError.length);
        // $('#error-info').append("<div class='error-sub-section' id='FullName-error-section'></div>");
        // $('#NameOnCard-error-section').append("<span class='error-sub-label' id='NameOnCard-error-sub-label'>Name On Card:</span>");
        // $('#NameOnCard-error-section').append("<span class='error-sub-info'>" + valNameOnCardError[0] + "</span>");
      // }
      // if(valCrdtCrdNmError.length > 0) {
      //   $('#error-info').append("<div class='error-sub-section' id='CrdtCrdNm-error-section'></div>");
      //   $('#CrdtCrdNm-error-section').append("<span class='error-sub-label' id='CrdtCrdNm-error-sub-label'>Credit Card:</span>");
      //   $('#CrdtCrdNm-error-section').append("<span class='error-sub-info'>" + valCrdtCrdNmError[0] + "</span>");
      // }
      // if(valExpDateError.length > 0) {
      //   $('#error-info').append("<div class='error-sub-section' id='ExpDate-error-section'></div>");
      //   $('#ExpDate-error-section').append("<span class='error-sub-label' id='ExpDate-error-sub-label'>Exp Date:</span>");
      //   $('#ExpDate-error-section').append("<span class='error-sub-info'>" + valExpDateError[0] + "</span>");
      // }
      // if(valFullNameError.length > 0) {
      //   $('#error-info').append("<div class='error-sub-section' id='FullName-error-section'></div>");
      //   $('#FullName-error-section').append("<span class='error-sub-label' id='FullName-error-sub-label'>Full Name:</span>");
      //   $('#FullName-error-section').append("<span class='error-sub-info'>" + valFullNameError[0] + "</span>");
      // }
      // if(valEmailError.length > 0) {
      //   $('#error-info').append("<div class='error-sub-section' id='Email-error-section'></div>");
      //   $('#Email-error-section').append("<span class='error-sub-label' id='Email-error-sub-label'>Email:</span>");
      //   $('#Email-error-section').append("<span class='error-sub-info'>" + valEmailError[0] + "</span>");
      // }
      // if(valAddressError.length > 0) {
      //   $('#error-info').append("<div class='error-sub-section' id='Address-error-section'></div>");
      //   $('#Address-error-section').append("<span class='error-sub-label' id='Address-error-sub-label'>Address:</span>");
      //   $('#Address-error-section').append("<span class='error-sub-info'>" + valAddressError[0] + "</span>");
      // }
      // if(valCityError.length > 0) {
      //   $('#error-info').append("<div class='error-sub-section' id='City-error-section'></div>");
      //   $('#City-error-section').append("<span class='error-sub-label' id='City-error-sub-label'>City:</span>");
      //   $('#City-error-section').append("<span class='error-sub-info'>" + valCityError[0] + "</span>");
      // }
      // if(valStateError.length > 0) {
      //   $('#error-info').append("<div class='error-sub-section' id='State-error-section'></div>");
      //   $('#State-error-section').append("<span class='error-sub-label' id='State-error-sub-label'>State:</span>");
      //   $('#State-error-section').append("<span class='error-sub-info'>" + valStateError[0] + "</span>");
      // }
      // if(valZipError.length > 0) {
      //   $('#error-info').append("<div class='error-sub-section' id='Zip-error-section'></div>");
      //   $('#Zip-error-section').append("<span class='error-sub-label' id='Zip-error-sub-label'>Zip:</span>");
      //   $('#Zip-error-section').append("<span class='error-sub-info'>" + valZipError[0] + "</span>");
      // }
    // }

    // $(document).ready(function(){
    //   $('#complete-checkout').click(function(){
    //     alert('click');
    //   });
    // });

  </script>
</head>
<body>
<form id = "submit-order-form" action = "">
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
          <select name = "Cards" onchange="showUser(this.value)">
            <option value="">Select a Card Type:</option>
            <option value="Visa">Visa</option>
            <option value="Master Card">Master Card</option>
            <option value="Discover">Discover</option>
            <option value="American Express">American Express</option>
          </select>
        </div>
        <label for="cname">Name on Card</label>
        <input type="text" id="cname" name="cardname" required=required placeholder="Bob Alice"autofocus>
        <label for="ccnum">Credit card number</label>
        <input type="text" id="ccnum" name="cardnumber" required=required placeholder="1111-2222-3333-4444">
        <label for="expDate">Exp Date</label>
        <input type="text" id="expDate" name="expDate" required=required placeholder="MM/YYYY">
      </div>
    <div class = "billingPad">
      <h3>Billing Address</h3>
      <label for="fname">Full Name</label>
      <input type="text" id="fname" name="firstname" required=required placeholder="Bob Alice">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" required=required placeholder="bob@example.com">
      <label for="adr">Address</label>
      <input type="text" id="adr" name="address" required=required placeholder="801 E Main St">
      <label for="city">City</label>
      <input type="text" id="city" name="city" required=required placeholder="Radford">
      <label for="state">State</label>
      <input type="text" id="state" name="state" required=required placeholder="VA">
      <label for="zip">Zip</label>
      <input type="text" id="zip" name="zip" required=required placeholder="24141">
    </div>
    <div id='errors'>
      <p id='error-info'></p>
    </div>
      <input type="submit" value="Complete Checkout" class="button" id='complete-checkout'>
    </div>
  </div>
</form>
</body>
</html>
