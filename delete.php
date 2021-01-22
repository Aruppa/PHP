<?php

$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'test');

  $sql = "DELETE FROM `info` WHERE id = $id";
  if(mysqli_query($conn, $sql)){
  	header("location: index.php");
  } else {
  	echo "Not Delete";
  }
     

