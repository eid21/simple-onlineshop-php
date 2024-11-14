<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit </title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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


<?php 
$conn= mysqli_connect("localhost","root","","online_shop");
$id= $_GET['id'];
$sql= "SELECT * FROM product where id=$id";
$result= mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
?>
    <center>
        <div class="main">
            <form action="updateEdit.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                <h1>تعديل المنتجات</h1>
                <br>
                <input type="text" name="name" value="<?php echo $row['name']; ?>"> <br> <br>
                <input type="text" name="price" value="<?php echo $row['price']; ?>"> <br> <br>
                <input type="file" name="image" id="file" style="display:none"> 
                <label for="file">تحديث صورة المنتج</label>
                <button name="update">تعديل المنتج </button> <br><br>
                <a href="admin_products.php">عرض كل المنتجات</a>
            </form>
        </div>
    </center>
</body>
</html>
