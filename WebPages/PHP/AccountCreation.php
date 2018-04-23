<?php
/**
 * Account Creation
 * 
 */
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Account Creation</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='../CSS/AccountCreation.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script>

      function initDropdowns() {
        var months = ['January','February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        console.log(months);
        for (var i = 0; i < months.length; i++)
          $('#month-drop').append("<option value='" + months[i] + "'>" + months[i] + "</option>");

        for (var day = 1; day <= 31; day++)
          $('#day-drop').append("<option value='" + day + "'>" + day + "</option>");        

        for(var year = 2018; year >= 1960; year--)
          $('#year-drop').append("<option value='" + year + "'>" + year + "</option>");


      }



      $(document).ready(function(){
        
        initDropdowns();

        $('#month-drop').change(function() {
          // var dropDownValue = document.getElementById("chase-dropdown").value;
          alert('changed');
          var month = $('#month-drop').val();

          if(month === 'January') {
            $('#day-drop').empty();
            for(var day = 1 ; day <= 36; day++)
              $('#day-drop').append("<option value='" + day + "'>" + day + "</option>");
          }
        });

        /*
        $('#month-drop').change(function() {
          var month = $('#month-drop').val();

          if(month === 'January') {
            $('#day-drop').empty();
            for(var days = 1 ; days <= 36; days++)
              $('#day-drop').append("<option value='" + day + "'>" + day + "</option>");
          }
        });*/
      });


    </script>



</head>
<body>
  <h2>Account Creation Form</h2>
  <button type='button' class='btn btn-info' data-toggle='modal' data-target='#accountCreationModal'>New Account</button> <!-- Trigger the modal with a button -->
  
  <div class='container'>
    <div class='modal fade' id='accountCreationModal' role='dialog'> <!-- Modal -->
      <div class='modal-dialog'> 
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
            <h2 class='modal-title' align='center'>Create Account</h2>
          </div> <!-- End of .modal-header -->
          <div class='modal-body' id='body-section'>
            <div class='row'>
              <div class='col-lg-6 col-md-6' id='personal-info-section'>
                <div class='col-lg-12' id='firstname-container'> <!-- first name -->
                  <p class='field-label' id='firstname-label'>First Name:</p>
                  <input type='text' class='field' id='firstname-tbox' placeholder='Anthony'>
                </div>
                <div class='col-lg-12' id='lastname-container'> <!-- last name -->
                  <p class='field-label' id='lastname-label'>Last Name:</p>
                  <input type='text' class='field' id='lastname-tbox' placeholder='Thomas'>
                </div>
                <div class='col-lg-12' id='dob-container'> <!-- date of birth -->
                  <p class='field-label' id='dob-label'>Date of Birth:</p>
                  <p>
                    <select class='dropdown' id='month-drop'></select>
                    <select class='dropdown' id='day-drop'></select>
                    <select class='dropdown' id='year-drop'></select>
                  </p>
                  <!-- <input type='text' class='field' id='' placeholder='03-12-1994'> -->
                  <!-- do drop down for month day year. also make sure you look into leap year logic -->
                </div>
              </div> <!-- End of #personal-info-section -->
              <div class='col-lg-6 col-md-6' id='account-info-section'>
                <div class='col-lg-12' id='username-container'> <!-- username -->
                  <p class='field-label' id='username-label'>Username:</p>
                  <input type='text' class='field' id='username-tbox' placeholder='Big Cat'>
                </div>
                <div class='col-lg-12' id='password-container'> <!-- password -->
                  <p class='field-label' id='password-label'>Password:</p>
                  <input type='text' class='field' id='password-tbox'>
                </div>
                <div class='col-lg-12' id='confirm-password-container'> <!-- password confirm-->
                  <p class='field-label' id='confirm-password-label'>Confirm Password:</p>
                  <input type='text' class='field' id='confirm-password-tbox'> <!-- look into show password for this and password secton -->
                </div>
              </div> <!-- End of #personal-info-section -->
            </div> <!-- End of .row -->
          </div> <!--End of .modal-body -->
          <div class='modal-footer' id='create-section'>
            <button type='button' class='btn btn-info' id='create-btn'>Create</button>
          </div> <!--End of .modal-footer -->
        </div> <!-- End of .modal-content -->
      </div> <!-- End of .modal-dialog -->
    </div> <!-- End of #accountCreationModal -->
  </div> <!-- End of .container -->




</body>
</html>
<!-- -->



<?php

?>