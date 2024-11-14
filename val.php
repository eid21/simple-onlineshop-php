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
    <title> تأكيد شراء المنتج </title>
    <link rel="stylesheet" href="admin_products.css">
    <style>
      input{
        display: none;
      }
      .main{
        width:30%;
        padding: 20px;
        box-shadow: 1px 1px 10px silver;
        margin-top: 50px;
      }
    </style>
</head>
<body>

<?php     
    $conn= mysqli_connect("localhost","root","","online_shop");
    $id= $_GET['id'];
    $sql= "SELECT * FROM product where id= $id";
    $result= mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($result);
?>

<center>
    <div class="main">
        <form action="insert_card.php" method="POST">
          <h3>هل تود شراء المنتج ؟</h3>
          <br>
          <input type="text" name="id" value='<?php echo $row['id'] ?>' >
          <input type="text" name="name" value='<?php echo $row['name'] ?>' >
          <input type="text" name="price" value='<?php echo $row['price'] ?>' >
          <button name="add" type="submit" class="btn btn-warning"><h5>تأكيد إضافة المنتج للعربة</h5> </button><br>
          <br>
          <a href="shop.php">الرجوع لصفحة المنتجات</a>
        </form>
    </div>
  </center>

</body>
</html>