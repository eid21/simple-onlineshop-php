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
    <title> منتجاتى </title>
    <link rel="stylesheet" href="admin_products.css">
    <style>
      main{
        width: 40%;
        margin-top: 30px;
        font-weight: bold;
      }
      table{
        box-shadow: 1px 1px 10px silver;
      }
      thead{
        background-color: #3498DB;
        text-align: center;
        color: white;
      }
      tr{
        text-align: center;
      }
    </style>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="shop.php"><h4>Products</h4></a>
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

  <br>
  <center>
    <h4>منتجاتك المحجوزة</h4>
  </center>

  <?php 
      $conn= mysqli_connect("localhost","root","","online_shop");
      $sql= "SELECT * FROM add_card WHERE user_id= $user_id ";
      $result= mysqli_query($conn,$sql);
      while($row= mysqli_fetch_assoc($result)){
  echo "
  <center>
            <main>
              <table class='table'>
                <thead>
                  <tr>
                    <th>product name</th>
                    <th>product price</th>
                    <th>Delete product</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>$row[name]</td>
                    <td> $row[price]</td>
                    <td><a href='del_card.php?id=$row[id]' class='btn btn-danger'>حذف</a></td>
                    
                  </tr>
                </tbody>

              </table>
            </main>
          </center> ";
      }
  ?>
  <br>
    <center>
      <a href="shop.php">الرجوع لصفحة المنتجات  </a>
    </center>


</body>
</html>