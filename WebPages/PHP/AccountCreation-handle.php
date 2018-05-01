<?php
  function convertDate($year, $month, $day) {
    // $year = $year + "";
    // $month = ($month > 0 && $month < 10) ? $month) : ($month + "");
    // $day = ($day > 0 && $day < 10) ? ("0" + $day) : ($day + "");
    // // return date("Y-m-d", $dob);
    // $dob = $year + '-' + $month + '-' + $day;
    // return date("Y-m-d",strtotime($dob));


    // $timestamp = strtotime( "February 15, 2015" );
    // print date( 'Y-m-d', $timestamp );
   
    // $monthsArr = array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    // $dateStr = strtotime($monthsArr[$month-1] + ' ' + $day + ', ' + $year);
    // return date('Y-m-d', $dateStr);
    $date = "2016-03-16"; 
    $date = date('Y-m-d');

    return $date;
  }
?>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$month = ($_POST['month'] > 0 && $_POST['month'] < 10) ? "0"+ $_POST['month'] : $_POST['month'];
$day = ($_POST['day'] > 0 && $_POST['day'] < 10) ? "0"+ $_POST['day'] : $_POST['day'];
$year = $_POST['year'];
$username = $_POST['username'];
$password = $_POST['password'];

// YYYY-MM-DD
$dob = convertDate($year, $month, $day);

$servername = "localhost";
$username = "proj1";
$dbPassword = "foreach";
$dbName = "proj1";

$connect = mysqli_connect($servername, $username, $dbPassword, $dbName);
if(mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }

// 0 says next auto index
$query = "INSERT INTO Customers(Cust_ID, First_Name, Last_Name, DOB, Username) VALUES (0, '$fname', '$lname', '$dob', '$username')";
mysqli_query($connect, $query);
// password
$query = "INSERT INTO Accounts(Cust_ID, Password) VALUES (0, '$password')";
mysqli_query($connect, $query);

mysqli_close($connect);
?>