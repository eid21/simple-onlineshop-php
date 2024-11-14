<?php

$conn= mysqli_connect("localhost","root","","online_shop");
$id= $_GET['id'];
$sql= "DELETE FROM add_card where id=$id";
mysqli_query($conn,$sql);

header("location: card.php");

?>