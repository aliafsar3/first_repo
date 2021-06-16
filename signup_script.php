<?php

require("includes/common.php");

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
//$password = mysqli_real_escape_string($con, $password);
//$password = MD5($password);

$MobileNumber = $_POST['MobileNumber'];
$MobileNumber = mysqli_real_escape_string($con, $MobileNumber);


$address = $_POST['address'];
$address = mysqli_real_escape_string($con, $address);
     
    $query = "INSERT INTO userstbl( FullName , EmailID , Password , MobileNumber , Address)
              VALUES('" . $name . "','" . $email . "','" . $password . "','" . $MobileNumber ."','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    
    $_SESSION['success_message'] = "Contact form saved successfully.";
    header("Location: signup.php");
    
?>