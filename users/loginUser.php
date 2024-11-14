<?php
session_start();

if(isset($_POST['submitLogin']))
{
    $emailLogin= $_POST['emailLogin'];
    $passwordLogin= $_POST['passwordLogin'];
    $conn= mysqli_connect("localhost","root","","online_shop");
    $sql= "SELECT * FROM users WHERE email='$emailLogin' AND password= '$passwordLogin' ";
    $result= mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['name'];

    header('location: ../shop.php');
    }
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
                        <div style=" transform: translateX(140px); position: relative; ">
                            <h2 class="border p-2 text-center" style="transform: translateX(1px);">Login</h2>
                        </div>
                    </div>
                </center>
                <form action="loginUser.php" method="Post" class="col-sm-6 mx-auto my-1 border p-2">

                    <div class="form-group p-2 my-1">
                        <label for="email">Email</label>
                        <input type="email" name="emailLogin" class="form-control" id="email">
                    </div>

                    <div class="form-group p-2 my-1">
                        <label for="password">Password</label>
                        <input type="password" name="passwordLogin" class="form-control" id="password">
                    </div>

                    <div class="form-group p-2 my-1">
                        <input type="submit" value="submit" name="submitLogin" class="form-control btn btn-success">
                    </div>
                    <center><p>هل تملك حساب بالفعل؟ <a href="registerUser.php"> حساب جديد</a></p></center>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
