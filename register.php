<?php

//create connection to database
$conn = mysqli_connect('localhost', 'root', '', 'test');
if($conn->connect_error >0){


	die("unable to connection database");
}else"database connection OK";



?>