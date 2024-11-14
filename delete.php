<?php

$conn= mysqli_connect("localhost","root","","online_shop");
$id= $_GET['id'];
$sql= "DELETE FROM product where id=$id";
mysqli_query($conn,$sql);

header("location: admin_products.php");

?>