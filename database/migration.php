<?php

$conn= mysqli_connect("localhost","root","");
$sql= "CREATE DATABASE IF NOT EXISTS online_shop ";
mysqli_query($conn,$sql);
mysqli_close($conn);

$conn= mysqli_connect("localhost","root","","online_shop");
$sql= "CREATE TABLE IF NOT EXISTS product(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `price` VARCHAR(20) NOT NULL,
    `image` VARCHAR(20) NOT NULL
)";
mysqli_query($conn,$sql);
mysqli_close($conn);

$conn= mysqli_connect("localhost","root","","online_shop");
$sql= "CREATE TABLE IF NOT EXISTS users(
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL
  )";
mysqli_query($conn,$sql);
mysqli_close($conn);

$conn= mysqli_connect("localhost","root","","online_shop");
$sql= "CREATE TABLE IF NOT EXISTS add_card(
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `user_id` INT,
   FOREIGN KEY (user_id) REFERENCES users(id)   
  )";
mysqli_query($conn,$sql);

// $sql= "ALTER TABLE add_card
// ADD FOREIGN KEY (user_id) REFERENCES users(id)";   

// mysqli_query($conn,$sql);
mysqli_close($conn);

?>