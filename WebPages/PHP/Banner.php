<?php
/**
 * Banner Before Login
 * Logo:  48x48
 * Icons: 32x32
 */
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Banner Before Login</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='../CSS/Theme.css'>
    <link rel='stylesheet' type='text/css' href='../CSS/Banner.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script>
      function initDropdown() {
        $('#month-drop').empty();
        $('#day-drop').empty();
        $('#year-drop').empty();

        var months = ['January','February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        for (var i = 0; i < months.length; i++)
          $('#month-drop').append("<option value='" + (i+1) + "'>" + months[i] + "</option>");
        for (var day = 1; day <= 31; day++)
          $('#day-drop').append("<option value='" + day + "'>" + day + "</option>");        
        for(var year = 2018; year >= 1960; year--)
          $('#year-drop').append("<option value='" + year + "'>" + year + "</option>");
      }
      
      function calcNumDaysByMonth() {
        var month = $('#month-drop').val();
        var year = $('#year-drop').val();
        var daysPerMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        $('#day-drop').empty();
        for (var day = 1; day <= daysPerMonth[month-1]; day++)
          $('#day-drop').append("<option value='" + day + "'>" + day + "</option>");

        if(isLeapYear(year) && month == 2) {
          $('#leap-year-label').show();
          $('#day-drop').append("<option value='" + 29 + "'>" + 29 + "</option>");
        }
        else if(isLeapYear(year))
          $('#leap-year-label').show();
        else
          $('#leap-year-label').hide();
      }
      
      function makeLeapYearChanges() {
        var year = $('#year-drop').val();
        var month = $('#month-drop').val();
        var currentDays = $('#day-drop').children('option').length;

        if(isLeapYear(year) && month == 2 && currentDays === 28) {
          $('#leap-year-label').show();
          $('#day-drop').append("<option value='" + 29 + "'>" + 29 + "</option>");
        }
        else if(isLeapYear(year))
          $('#leap-year-label').show();
        else if(!isLeapYear(year) && month == 2) {
          $('#leap-year-label').hide();
          $("#day-drop option[value='29']").remove();
        }
        else
          $('#leap-year-label').hide();
      }

      function isLeapYear(year) {
        return (year % 400 == 0) || ((year % 4 == 0) && (year % 100 != 0));
      }

      function valFirstName() {
        var fname = $('#firstname-tbox').val().trim();
        var errors = [];
        var isPlural = (fname.length -15) === 1 ? 'character' : 'characters';
        
        if(fname === "")
          errors.push('Required');
        else if(fname.length > 15)
          errors.push('Length Must be 15 characters or less.' + ' (' + (fname.length-15) + ' ' + isPlural + ' too large.)');

        if(!fname.match(/^[A-Z]+$/i) && fname !== "")
          errors.push('Must be all alphabetic characters');

        return errors;
      }
      
      function valLastName() {
        var lname = $('#lastname-tbox').val().trim();
        var errors = [];
        var isPlural = (lname.length -15) === 1 ? 'character' : 'characters';
        
        if(lname === "")
          errors.push('Required');
        else if(lname.length > 15)
          errors.push('Length must be 15 characters or less' + ' (' + (lname.length-15) + ' ' + isPlural + ' too large.)');

        if(!lname.match(/^[A-Z]+$/i) && lname !== "")
          errors.push('Must be all alphabetic characters');

        return errors;
      }
      
      function valUserName() {
        var user = $('#username-tbox').val().trim();
        var errors = [];
        var isPlural = (user.length -10) === 1 ? 'character' : 'characters';
        
        if(user === "")
          errors.push('Required');
        else if(user.length > 10)
          errors.push('Length must be 10 characters or less' + ' (' + (user.length-10) + ' ' + isPlural + ' too large.)');

        if(!user.match(/^[ A-Z0-9]+$/i) && user !== "")
          errors.push('Must be alpha-numeric');

        return errors;
      }
      
      function valPwd() {
        var pwd = $('#password-tbox').val().trim();
        var cpwd = $('#confirm-password-tbox').val().trim();
        var errors = [];
        var isPlural = (6-pwd.length) === 1 ? 'character' : 'characters';
        
        if(pwd === "" || cpwd === "")
          errors.push('Required');
        else if(pwd.length < 6)
          errors.push('Length must be at least 6 characters long' + ' (' + (6-pwd.length) + ' ' + isPlural + ' too small.)');

        if(pwd != cpwd)
          errors.push('Passwords do not match.');

        return errors;
      }

       
      // in here set the border colors green is valid red is not valid
      function valSubmission() {
        $('#error-section-info').empty();
        var fnameErrors = valFirstName();
        var lnameErrors = valLastName();
        var unameErrors = valUserName();
        var pwdErrors = valPwd();
        var totalErrors = fnameErrors.length + lnameErrors.length + unameErrors.length + pwdErrors.length;
        console.log('total errors ', totalErrors);
        
        if(totalErrors > 0)
          $('#error-section').show();
        else
          $('#error-section').hide();

        if(fnameErrors.length > 0) {
          $('#error-section-info').append("<div class='error-sub-section' id='fname-error-section'></div>");
          $('#fname-error-section').append("<span class='error-sub-label' id='fname-error-sub-label'>First Name:</span>");
          $('#fname-error-section').append("<span class='error-sub-info'>" + fnameErrors[0] + "</span>");
        }
        if(lnameErrors.length > 0) {
          $('#error-section-info').append("<div class='error-sub-section' id='lname-error-section'></div>");
          $('#lname-error-section').append("<span class='error-sub-label' id='lname-error-sub-label'>Last Name:</span>");
          $('#lname-error-section').append("<span class='error-sub-info'>" + lnameErrors[0] + "</span>");
        }
        if(unameErrors.length > 0) {
          $('#error-section-info').append("<div class='error-sub-section' id='unameErrors-error-section'></div>");
          $('#unameErrors-error-section').append("<span class='error-sub-label' id='unameErrors-error-sub-label'>Username:</span>");
            $('#unameErrors-error-section').append("<span class='error-sub-info'>" + unameErrors[0] + "</span>");
        }
        if(pwdErrors.length > 0) {
          $('#error-section-info').append("<div class='error-sub-section' id='pwdErrors-error-section'></div>");
          $('#pwdErrors-error-section').append("<span class='error-sub-label' id='pwdErrors-error-sub-label'>Password:</span>");
          $('#pwdErrors-error-section').append("<span class='error-sub-info'>" + pwdErrors[0] + "</span>");
        }
        
        return (totalErrors === 0) ? true: false;
      }

      function resetModal() {
        // clear all text boxes, reset all fields. 
        // clear errorsS
        initDropdown();
        $('#error-section-info').empty();
        $('#error-section').hide();
        $('#leap-year-label').hide();
        $('#signout-banner-section').hide();
        $('#myaccount-banner-section').hide();
        $('#mycart-banner-section').hide();
        $('#signout-banner-section').hide();
        $('#myaccount-banner-section').hide();
        $('#mycart-banner-section').hide();
        $('.field').val("");
      }
      
      function getUserData() {
        var userData = {
          fname: $('#firstname-tbox').val() ,
          lname: $('#lastname-tbox').val() ,
          month: $('#month-drop').val(),
          day: $('#day-drop').val(),
          year: $('#year-drop').val(),
          username: $('#username-tbox').val(),
          password: $('#password-tbox').val(),
        }
        return userData;
      }
      
      function signIn(userData) {
        $('#greetings-label').text('Hi '+userData.username+'!');
        $('.logged-in').show();
        $('.logged-out').hide();
      }
      
      function signIn() {
        $('#greetings-label').text('Hi '+$('#username-banner-tbox').val().trim()+'!');
        $('.logged-in').show();
        $('.logged-out').hide();
      }
      
      function signOut() {
        $('#username-banner-tbox').val("");
        $('#password-banner-tbox').val("");
        $('.logged-in').hide();
        $('.logged-out').show();
      }

      $(document).ready(function(){
        resetModal();

        $('#month-drop').change(function() {
          calcNumDaysByMonth();
        });        
        
        $('#year-drop').change(function() {
          makeLeapYearChanges();
        }); 
        
        $('#account-creation-form').submit(function() {
          if(valSubmission()){
            var userData = getUserData();
            console.log('userData', userData);
            $.ajax({
              type: "POST",
              url: "AccountCreation-handle.php",
              data: {fname:userData.fname, lname:userData.lname, month:userData.month, day:userData.day, year:userData.year, username:userData.username, password:userData.password},
              dataType: "JSON"
            });
            $('#close-signup-modal').trigger('click');
            signIn(userData);
          }
          return false;
        });

        $('#login-banner-btn').off('click').on('click', function() {
            signIn()
        });

        $('#signup-banner-btn').off('click').on('click', function() {
          resetModal();
        });

        $('#signout-banner-btn').off('click').on('click', function() {
          signOut();

        });
        
        $('#close-signup-modal').off('click').on('click', function(){
          resetModal();
        });
      });

    </script>
</head>
<body>
  <!-- Banner -->
  <div class='container' id='out-banner-container'>
    <div class='row' id='banner-row'>

      <div class='banner-section' id='logo-banner-section'>
        <a href='Home.php'>
          <img src='../IMGS/Logo.png' alt='Logo' class='foreach-logo'  id='banner-logo'>
        </a>
      </div>

      <!-- Before Login -->
      <div class='banner-section' id='home-banner-section'>
        <a href='Home.php' class='logged-out-banner-section banner-nav-link' id='home-banner-nav-link'>Home</a>
      </div>

      <div class='banner-section' id='store-banner-section'>
        <a href='Store.php' class='logged-out-banner-section banner-nav-link' id='store-banner-nav-link'>Store</a>
      </div>

      <div class='logged-out banner-section' id='signup-banner-section'>
        <button type='button' class='logged-out-banner-section banner-nav-btn' data-toggle='modal' id = 'signup-banner-btn' data-target='#accountCreationModal'>Sign Up</button>
      </div> 

      <div class='logged-out banner-section' id='login-banner-section'>
        <button class='logged-out-banner-section banner-nav-btn' id='login-banner-btn'>Login</button>
      </div> 

      <div class='logged-out banner-section' id='password-banner-section'>
        <input type='text' class='logged-out-banner-section banner-nav-tbox' id='password-banner-tbox' placeholder='Enter Password'>
      </div>

      <div class='logged-out banner-section' id='username-banner-section'>
        <input type='text' class='logged-out-banner-section banner-nav-tbox' id='username-banner-tbox' placeholder='Enter Username'>
      </div>

      <!-- After Login -->
      <div class='logged-in banner-section' id='mycart-banner-section'>
        <a href='Order.php' class='banner-nav-link' id='mycart-banner-nav-link'>My Cart</a>
      </div>

      <div class='logged-in banner-section' id='myaccount-banner-section'>
        <a href='Account.php' class='banner-nav-link' id='myaccount-banner-nav-link'>My Account</a>
      </div>
      
      <div class='logged-in banner-section' id='signout-banner-section'>
        <p id='greetings-label'></p>
        <button class='banner-nav-btn' id='signout-banner-btn'>Sign Out</button>
      </div>

    </div> <!-- End of .row -->
  </div> <!-- End of #out-banner-cont -->
  
  <!-- Account Creation Modal -->
  <form id='account-creation-form' action='Home.php' method='post'>
    <div class='container'>
      <div class='modal fade' id='accountCreationModal' role='dialog'> <!-- Modal -->
        <div class='modal-dialog'> 
          <div class='modal-content'>
            <div class='modal-header'>
              <button type='button' class='close' data-dismiss='modal' id='close-signup-modal'>&times;</button>
              <h2 class='modal-title' align='center'>Create Account</h2>
            </div> <!-- End of .modal-header -->
            <div class='modal-body' id='body-section'>
              <div class='row' id='ac-row'>
                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12' id='personal-info-section'>
                  <div class='col-lg-12' id='firstname-container'> <!-- first name -->
                    <p class='field-label' id='firstname-label'>First Name:</p>
                    <input type='text' class='field' id='firstname-tbox' name='firstname' placeholder='Charles'>
                  </div>
                  <div class='col-lg-12' id='lastname-container'> <!-- last name -->
                    <p class='field-label' id='lastname-label'>Last Name:</p>
                    <input type='text' class='field' id='lastname-tbox' name='lastname' placeholder='Jones'>
                  </div>
                  <div class='col-lg-12' id='dob-container'> <!-- date of birth -->
                    <p class='field-label' id='dob-label'>
                      Date of Birth:
                      <span id='leap-year-label'>*leap year </span>
                    </p>
                    <p>
                      <select class='dropdown' id='month-drop' name='month'></select>
                      <select class='dropdown' id='day-drop' name='day'></select>
                      <select class='dropdown' id='year-drop' name='year'></select>
                    </p>
                  </div>
                </div> <!-- End of #personal-info-section -->
                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12' id='account-info-section'>
                  <div class='col-lg-12' id='username-container'> <!-- username -->
                    <p class='field-label' id='username-label'>Username:</p>
                    <input type='text' class='field' id='username-tbox' name='username' placeholder='Big Cat'>
                  </div>
                  <div class='col-lg-12' id='password-container'> <!-- password -->
                    <p class='field-label' id='password-label'>Password:</p>
                    <input type='text' class='field' id='password-tbox' name='password'>
                  </div>
                  <div class='col-lg-12' id='confirm-password-container'> <!-- password confirm-->
                    <p class='field-label' id='confirm-password-label'>Confirm Password:</p>
                    <input type='text' class='field' id='confirm-password-tbox' name='confirm-password'>
                  </div>
                </div> <!-- End of #account-info-section -->
              </div> <!-- End of .row -->
            </div> <!--End of .modal-body -->
            <div class='modal-footer' id='create-section'>
              <div id='error-section'>
                <!-- <p id='error-section-header'>Errors:</p> -->
                <p id='error-section-info'><p>
              </div>
              <p><button type='submit' class='btn btn-info' id='create-btn'>Create</button></p>
            </div> <!--End of .modal-footer -->
          </div> <!-- End of .modal-content -->
        </div> <!-- End of .modal-dialog -->
      </div> <!-- End of #accountCreationModal -->
    </div> <!-- End of .container -->
  </form>



</body>
</html>

