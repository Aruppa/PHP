<?php
 $id = $_GET['id'];
 $name = $_POST['name'];
 $age = $_POST['age'];
 $roll = $_POST['roll'];
 $adress = $_POST['adress'];
 $mobile = $_POST['mobile'];

 $conn = mysqli_connect('localhost', 'root', '', 'test');

 // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE info SET name='$name', age='$age', roll ='$roll', adress='$adress', mobile='$mobile' WHERE id = $id"; 

 if (mysqli_query($conn, $sql)) {
  header("location: show.php?id=" . $id);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




 ?>