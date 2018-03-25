<!DOCTYPE HTML5>
<html>
<head>
  <title>Account</title>
  <link rel="stylesheet" href="../CSS/Account.css">
</head>
<body>
  <div id='Header'>
  <label for='username'>Username</label><br>
  <label>Account Info</lable><br><br>
  </div>
  <table>
    <tr>
      <td><label>First Name: </label></td>
      <td><input type="text" id="fname" disabled></td>
    </tr>
    <tr>
      <td><label>Last Name: </label></td>
      <td><input type="text" id="lname" disabled></td>
    </tr>
    <tr>
      <td><label>Username: </label></td>
      <td><input type="text" id="username" disabled></td>
    </tr>
    <tr>
      <td><label>Email: </label></td>
      <td><input type="text" id="email" disabled></td>
    </tr>
    <tr>
      <td><label>Age: </label></td>
      <td><label for='age'>#</lable></td>
    </tr>
  </table><br>
  <input id='edit-button' type='button' value="Edit" onclick="EnableText()">
  <input id='save-button' type='button' value="Save Changes" onclick="DisableText()"><br><br>
  <table id='pHistory'>
    <tr>
      <th>Purchase History</th>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>


  <script>
    function EnableText() {
      document.getElementById('fname').disabled = false;
      document.getElementById('lname').disabled = false;
      document.getElementById('username').disabled = false;
      document.getElementById('email').disabled = false;
    }
    function DisableText() {
      document.getElementById('fname').disabled = true;
      document.getElementById('lname').disabled = true;
      document.getElementById('username').disabled = true;
      document.getElementById('email').disabled = true;
    }
  </script>
</body>
</html>
