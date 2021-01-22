
<?php


$conn = mysqli_connect('localhost', 'root', '', 'test');

  $sql = "select * from `info` WHERE 1";
     $result = mysqli_query($conn, $sql);


$tr="";
     while($row = mysqli_fetch_assoc($result)){ 
     $tr.=" <tr>
        <td>". $row['id']." </td>
        <td>".$row['name']." </td>
        <td>". $row['age']." </td>
        <td>".$row['roll']." </td>
        <td>".$row['adress']." </td>
        <td>".$row['mobile']." </td>
        <td><img width=\"50\" src=\"".$row['Image']. "\"> </td>
        <td>          
          <a class=\"btn btn-info\" href=\"show.php?id=".$row['id']."\"> View</a>
          <a class=\"btn btn-primary\" href=\"Edit.php?id=".$row['id']."\"> Edit</a>
          <a class=\"btn btn-danger\" onclick=\"return confirm('Are you sure?')\" href=\"delete.php?id=".$row['id']."\"> Delete</a>

        </td>
      </tr>";


   }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>student registration!</title>
  </head>
  <body>
    <div class="content">
      <a href="insert.php" class="btn btn-primary">New Student</a>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Roll</th>
            <th>Adress</th>
            <th>Mobile</th>
            <th>Action</th>
            <th>Picture</th>
          </tr>
        </thead>
        <tbody>
         <?=$tr?>
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html><!-- <?php


$conn = mysqli_connect('localhost', 'root', '', 'test');

  $sql = "select * from `info` WHERE 1";
     $result = mysqli_query($conn, $sql);
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
        <a class="btn btn-info" href="insert.php">New student</a>
    </div>
    <div class="col-md-9">
      <h2>Student list<h2>
      <table class="table">
        <thead>
          <th>id</th>
          <th>Name</th>
          <th>Age</th>
          <th>Roll</th>
          <th>Adress</th>
          <th>Mobile</th>
          <th>Action</th>
        </thead>
        <tbody>
         <?php  while($row = mysqli_fetch_assoc($result)){ ?>         
        <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Age']?></td>
        <td><?php echo $row['Roll']?></td>
        <td><?php echo $row['Adress']?></td>
        <td><?php echo $row['Mobile']?></td>
        <td>

          
          <a class="btn btn-info" href="show.php?id=<?php echo $row['id']; ?>"> View</a>
          <a class="btn btn-primary" href="Edit.php?id=<?php echo $row['id']; ?>"> Edit</a>
          <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>"> Delete</a>
        </td>
      </tr>
       <?php } ?>
        </tbody>
      </table>
    </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html> -->