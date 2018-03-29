<?php
/**
 * Account Creation
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Creation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type='text/css' href='../CSS/AccountCreation.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Account Creation Form</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#accountCreationModal">New Account</button>

        <!-- Modal -->
        <div class="modal fade" id="accountCreationModal" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Create Account</h2>
                </div> <!-- End of .modal-header -->
                <div class="modal-body">
                    <form action='AccountCreation-handle.php' method='post'>
                        <div class='field'>
                            <p class='field-title'>First Name:</p>
                            <p class='field-box'><input class='form-tbox' type='text' name='firstName'></p>
                        </div>
                        <div class='field'>
                            <p class='field-title'>Last Name:</p>
                            <p class='field-box'><input class='form-tbox' type='text' name='lastName'></p>
                        </div>
                        <div class='field'>
                            <p class='field-title'>Username:</p>
                            <p class='field-box'><input class='form-tbox' type='text' name='username'></p>
                        </div>
                        <div class='field'>
                            <p class='field-title'>Email:</p>
                            <p class='field-box'><input class='form-tbox' type='email' name='email'></p>
                        </div>
                        <div class='field'>
                            <p class='field-title'>Age:</p>
                            <p class='field-box'><input class='form-tbox' type='number' name='age'></p>
                        </div>
                        <div class='field'>
                            <p class='field-title'>Password:</p>
                            <p class='field-box'><input class='form-tbox' type='password' name='password'></p>
                        </div>
                        <div class='field'>
                            <p class='field-title'>Confirm Password:</p>
                            <p class='field-box'><input class='form-tbox' type='password' name='confirm-password'></p>
                        </div>
                        <div class='field'>
                            <hr>
                            <button class='submit' type='submit'>Create Account</button>
                        </div>
                    </form>
                </div> <!-- End of .modal-body -->
            </div> <!-- End of .modal-content -->
            </div> <!-- End of .modal-dialog -->
        </div> <!-- End of .modal fader -->
    </div> <!-- End of .container -->
</body>
</html>