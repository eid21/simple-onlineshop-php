<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="admin_products.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h4>Add product</h4></a>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-outline-danger" href="home/home.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<center>
    <br>
    <h2> لوحة تحكم الأدمن </h2>
    <br>
</center>

<?php     
    $conn= mysqli_connect("localhost","root","","online_shop");
    $sql= "SELECT * FROM product";
    $result= mysqli_query($conn,$sql);
    while($row= mysqli_fetch_assoc($result)){
    echo " 
    <center>
        <main>
            <div class='card' style='width: 15rem'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='delete.php?id=$row[id]' class='btn btn-danger' >حذف</a>
                    <a href='update.php?id=$row[id]' class='btn btn-primary'>تعديل</a>
                </div>
            </div>
        </main>
    </center> ";
    };
    
    ?>

</body>
</html>
