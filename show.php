<?php

$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'test');

  $sql = "SELECT * FROM `info` WHERE id = $id";
     $result = mysqli_query($conn, $sql);
     $std = mysqli_fetch_assoc($result);
    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
</head>

<body>
 <br><br><br>

    
    <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a class="btn btn-info" href="index.php">Students</a>
    </div>
    <div class="col-md-9">
      <h2>Student Infomation <h2>
        <hr>
      <table class="table">

        <tr>
         <th width="100" class="text-right"> Name: </th>
          <td> <?php echo $std['name']; ?> </td>
        </tr>
        <tr>
          <th class="text-right"> Age: </th>
          <td> <?php echo $std['age']; ?> </td>

        </tr>
        <tr>
          <th class="text-right"> Roll: </th>
          <td> <?php echo $std['roll']; ?> </td>
        </tr>
        <tr>
          <th class="text-right"> Adress: </th>
          <td> <?php echo $std['adress']; ?> </td>

        </tr>
        <tr>
          <th class="text-right"> Mobile: </th>
          <td> <?php echo $std['mobile']; ?> </td>
           </tr>

           <tr>
             <th class="text-right"> Image: </th>
            <td><?php echo $std['Image']; ?> </td>
           </tr>
           
      </table>
    </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>