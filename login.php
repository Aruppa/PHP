<?php

$username = $_POST['username'];
$Password = $_POST['password'];

$conn = mysqli_connect('localhost', 'root', '', 'test');

  $sql = "SELECT * FROM `info` WHERE mobile = $username";
     $result = mysqli_query($conn, $sql);
     $std = mysqli_fetch_assoc($result);

  

     if ( $result->num_rows == 1 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: dashboard.php");
}
  
     
?>

