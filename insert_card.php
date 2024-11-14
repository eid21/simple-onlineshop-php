<?php
session_start(); 
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

$conn= mysqli_connect("localhost","root","","online_shop");
$sql= "CREATE TABLE IF NOT EXISTS add_card(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `price` VARCHAR(20) NOT NULL
)";
mysqli_query($conn,$sql);

if(isset($_POST['add']))
{
    $name= $_POST['name'];
    $price= $_POST['price'];
    $sql= " INSERT INTO `add_card`(`name` , `price` , `user_id`) VALUES('$name' , '$price' , '$user_id') ";
    mysqli_query($conn,$sql);

    header("location: card.php");
}













?>