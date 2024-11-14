<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add product </title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="admin_products.php"><h4>Products</h4></a>
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
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <h3>إضافة منتج</h3>
                <img src="https://gadgets-africa.com/wp-content/uploads/2022/10/Best-Online-Shopping-Sites-In-Kenya-.png"
                alt="لوجو الموقع" width="450">
                <br>
                <input type="text" name="name" placeholder="اسم المنتج"> <br> <br>
                <input type="text" name="price" placeholder="سعر المنتج"> <br> <br>
                <input type="file" name="image" id="file" style="display:none"> 
                <label for="file">اختيار صورة للمنتج</label>
                <button name="upload">رفع المنتج </button> <br><br>
                <a href="admin_products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <br>
        <h5>Developed by Mohamed Eid</h5>
    </center>
</body>
</html>
