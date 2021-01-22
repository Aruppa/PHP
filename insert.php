
<?php


$conn = mysqli_connect('localhost', 'root', '', 'test');

  $sql = "select * from `info` WHERE 1";
  $result = mysqli_query($conn, $sql);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="content">
      <div class="row">
        <div class="col-5"></div>
      <div class="col-3">
      <form  action="store.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Name: </label>
          <input required type="text" class="form-control-file" name="name" placeholder="enter your name"></div>

          
        <div class="form-group">
          <label for="Age">Age: </label>
          <input type="text" class="form-control-file" name="age" placeholder="Enter your Age">
          </div>
              
        <div class="form-group">
          <label for="Roll">Roll: </label>
          <input type="text" class="form-control-file" name="roll" placeholder="Enter your Roll">

        </div>

        <div class="form-group">
          <label for="Adress">Adress: </label>
          <input required type="text" class="form-control-file" name="adress" placeholder="Enter your Adress">

        </div>

        <div class="form-group">
          <label for="Mobile">Mobile: </label>
          <input type="text" class="form-control-file" name="mobile" placeholder="Enter your Mobile">

        </div>


        <div>
          
           <input type="file" name="myimage">
          
        </div><br>

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </div>
      </div>
      

</div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>












