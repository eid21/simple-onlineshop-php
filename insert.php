<?php
$conn= mysqli_connect("localhost","root","","online_shop");

if(isset($_POST['upload']))
{
    $name= $_POST['name'];
    $price= $_POST['price'];
    $image_name= $_FILES['image']['name']; // اسم الصورة مع الامتداد
    $image_up= "images/".$image_name;
    // رفع الصور الى الفايل
    move_uploaded_file($_FILES['image']['tmp_name'],$image_up);
    // رفع الداتا كلها الى الداتا بيز
    $sql= "INSERT INTO product (name,price,image) VALUES('$name','$price','$image_up')";
    mysqli_query($conn,$sql);

    header("location: index.php");

}

?>