<!DOCTYPE HTML5>
<html>
<head>
  <title>Account</title>
  <link rel="stylesheet" href="../CSS/Account.css">
  <meta charset='utf-8'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body onload="getUserInfo();DisableText();">

  <!-- Account Page -->
  <div id='Header'>
  <label for='username'>Username</label><br>
  <label>Account Info</lable><br><br>
  </div>
  <form>
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
  <!-- <a href='./Home.php'><input id='save-button' type='button' value="Save Changes" onclick="DisableText()"></a><br><br> -->
  <input id='save-button' type='button' value="Save Changes" onclick="DisableText();saveUserNames();"><br><br>
  </form>
  <div id='result'></div>
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
      
      // $.post('test.php', {fname:firstname,lname:lastname,uname:username,email:email}, 
      // function(data) {
      //   $('#result').html(data);
      // });
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
  </script>
</body>
</html>
