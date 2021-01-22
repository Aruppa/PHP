<!DOCTYPE html>
<html>
<body>
<div class="row">
          <div class="col-md-6 login-form-1">
<?php
echo "The time is " . date("H:i:sa") ."<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l");
?>
</div>
</div>
</body>
</html>





<!DOCTYPE html>
<html>
<head>
  <title>FromLogin</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link type="css" href="style.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="/style.css">
</head>
<body>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login for Entry</h3>
                    <form action="login.php" method="POST"> 
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                              
                
                    </form>
                </div>
            </div>
        </div>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>




