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
        <a class="btn btn-info" href="index.php>">Student list</a>
    </div>
    <div class="col-md-9">
      <h2>Edit Student<h2>
      

      <form action="update.php?id=<?php echo $id ?>" method="POST">
  <div class="form-group">
    <label for="name">name: </label>
    <input required type="text" class="form-control-file" name="name" placeholder="enter your name" value="<?php echo $std['name']?>"></div>

    
  <div class="form-group">
    <label for="Age">Age: </label>
    <input type="text" class="form-control-file" name="age" placeholder="Enter your Age" value="<?php echo $std['age']?>">
    </div>
        
  <div class="form-group">
    <label for="Roll">Roll: </label>
    <input type="text" class="form-control-file" name="roll" placeholder="Enter your Roll" value="<?php echo $std['roll']?>">

  </div>

  <div class="form-group">
    <label for="Adress">Adress: </label>
    <input required type="text" class="form-control-file" name="adress" placeholder="Enter your Adress" value="<?php echo $std['adress']?>">

  </div>

  <div class="form-group">
    <label for="Mobile">Mobile: </label>
    <input type="text" class="form-control-file" name="mobile" placeholder="Enter your Mobile" value="<?php echo $std['mobile']?>">

  </div>
   <div>
          
           <input type="file" name="myimage">
          
        </div><br>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


    </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>