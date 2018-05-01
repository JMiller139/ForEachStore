<!DOCTYPE HTML5>
<html>
<head>
  <title>Account</title>
  <link rel="stylesheet" href="../CSS/Account.css">
  <link rel="stylesheet" href="../CSS/Theme.css">
  <meta charset='utf-8'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class='fe-bg-color'>

  <!-- Account Page -->
  <div id='Header'>
  <!-- <h1>Username</h1> -->
  <h1 class='fe-blue'>Account Info</h1>
  </div>
  <form>
  <table>
    <tr>
      <td><label class='field-label'>First Name: </label></td>
      <td><input type="text" id="fname" class='field'></td>
    </tr>
    <tr>
      <td><label class='field-label'>Last Name: </label></td>
      <td><input type="text" id="lname" class='field'></td>
    </tr>
    <tr>
      <td><label class='field-label'>Username: </label></td>
      <td><input type="text" id="username" class='field'></td>
    </tr>
    <tr>
      <td><label class='field-label'>Email: </label></td>
      <td><input type="text" id="email" class='field'></td>
    </tr>
  </table><br>
  <input id='edit-button' type='button' value="Edit">
  <!-- <a href='./Home.php'><input id='save-button' type='button' value="Save Changes" onclick="DisableText()"></a><br><br> -->
  <input id='save-button' type='button' value="Save Changes" ><br><br> <!--onclick="DisableText();saveUserNames();" -->
  </form>
  <div id='result'></div>
  <table id='pHistory'>
    <tr>
      <th class='fe-blue' id='purchase-hist-title'>Purchase History</th>
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
     // alert("Changes Saved");
    }
    function saveUserNames() {
      var firstname = $('#fname').val();
      var lastname = $('#lname').val();
      var username = $('#username').val();
      var email = $('#email').val();

      $.ajax({
        type: "POST",
        url: "test.php",
        data: {fname:firstname,lname:lastname,uname:username,email:email},
        dataType: "JSON"
      });
    }
    function getUserInfo() {
      
          var ajax = new XMLHttpRequest();
          var method = "GET";
          var url = "getUser.php";
          var asynchronous = true;

          ajax.open(method, url, asynchronous);

          ajax.send();

          ajax.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              var data = JSON.parse(this.responseText);
              console.log(data);

              for(var a = 0; a < data.length; a++){
                var firstname = data[a].First_Name;
                var lastname = data[a].Last_Name;
                var username = data[a].Username;
                var email = data[a].Email;
              }
              document.getElementById('fname').value = firstname;
              document.getElementById('lname').value = lastname;
              document.getElementById('username').value = username;
              document.getElementById('email').value = email;


            }
          }    
    }

    $(document).ready(function(){
      DisableText();
    });

    $('#edit-button').click(function(){
      if( document.getElementById('fname').disabled){
        document.getElementById('fname').disabled = false;
        document.getElementById('lname').disabled = false;
        document.getElementById('username').disabled = false;
        document.getElementById('email').disabled = false;
      }
      else {
        document.getElementById('fname').disabled = true;
        document.getElementById('lname').disabled = true;
        document.getElementById('username').disabled = true;
        document.getElementById('email').disabled = true;
      }
    });
  </script>
</body>
</html>
