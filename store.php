<?php
 $name = $_POST['name'];
 $age = $_POST['age'];
 $roll = $_POST['roll'];
 $adress = $_POST['adress'];
 $mobile = $_POST['mobile'];
 $tmpFilePath = $_FILES['myimage']['tmp_name'];

 if ($tmpFilePath != ""){
                //Setup our new file path
                $newFilePath = "image/" . $_FILES['myimage']['name'];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {

                  
               
                }
            }


 $conn = mysqli_connect('localhost', 'root', '', 'test');

 // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `info` (`Name`, `Age`, `Roll`, `Adress`, `Mobile` ,`Image`) VALUES ('$name', '$age', '$roll', '$adress', '$mobile','$newFilePath')";


 if (mysqli_query($conn, $sql)) {
  header("location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




 ?>