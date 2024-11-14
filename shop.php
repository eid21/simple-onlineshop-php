<?php 
session_start(); 
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

if(!isset($user_id)){
  header('location: ../users/loginUser.php');
};

if(isset($_POST['logout'])){ 
  
  unset($user_id);
  session_destroy();
};

?>
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
    <title> Products | المنتجات </title>
    <link rel="stylesheet" href="admin_products.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .user-name-container {
            border: 3px solid black; /* لون الإطار */
            padding: 10px; /* هامش داخلي */
            border-radius: 10px; /* نصف القطر للزوايا */
            color: #ffffff; /* لون النص */
            background-color: #bd1010; /* لون الخلفية */
            margin-bottom: 20px; /* هامش أسفل */
            font-weight: bold; /* سمك الخط */
            display: inline-block; /* عرض كعنصر متداخل */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a href="card.php" class="nav-link"><h4>Mycard | عربتى</h4></a>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-outline-danger" href="home/home.php" name="Logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <center>
    <br>
    <div class="user-name-container"> Welcome , <?php echo $user_name; ?> </div>

        <br><br>
        <h2> جميع المنتجات المتوفرة </h2>
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
                    <a href='val.php?id=$row[id]' class='btn btn-success'>إضافة لعربة التسوق</a>
                </div>
            </div>
        </main>
    </center> ";
    };
    
    ?>

</body>
</html>
