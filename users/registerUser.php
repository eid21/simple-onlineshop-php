<?php
if(isset($_POST['submit']))
{
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $conn= mysqli_connect("localhost","root","","online_shop");
    $sql= "INSERT INTO users(`name`, `email`, `password`) VALUES('$name','$email','$password')";
    mysqli_query($conn,$sql);

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Online shop</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a href="../home/home.php" class="nav-link"><h4>Home</h4></a>
      </li>
    </ul>
  </div>
</nav>
<br><br><br><br>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto my-2">

                <center>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                        <div style=" transform: translateX(120px); position: relative; ">
                            <h2 class="border p-2 text-center" style="transform: translateX(1px);">Register</h2>
                        </div>
                    </div>
                </center>
                <form action="registerUser.php" method="Post" class="col-sm-6 mx-auto my-1 border p-2">
                    <div class="form-group p-2 my-1">
                        <label for="name">User name</label>
                        <input type="text" name="name" class="form-control" id="email">
                    </div>

                    <div class="form-group p-2 my-1">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>


                    <div class="form-group p-2 my-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="form-group p-2 my-1">
                        <label for="password">Confirm password</label>
                        <input type="password" name="confirm_password" class="form-control" id="password">
                    </div>


                    <div class="form-group p-2 my-1">
                        <input type="submit" value="تسجيل حساب" name="submit" class="form-control btn btn-success">
                    </div>
                    <center><p>هل لديك حساب؟ <a href="loginUser.php"> تسجيل دخول</a></p></center>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
