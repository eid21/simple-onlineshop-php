<?php
$conn= mysqli_connect("localhost","root","","online_shop");

if(isset($_POST['update']))
{
    $id= $_GET['id'];
    $name= $_POST['name'];
    $price= $_POST['price'];
    $image_name= $_FILES['image']['name']; // اسم الصورة مع الامتداد
    $image_up= "images/".$image_name;
    // رفع الصور الى الفايل
    move_uploaded_file($_FILES['image']['tmp_name'],$image_up);
    // تحديث الداتا الموجودة داخل الداتا بيز
    $sql= "UPDATE product SET name='$name', price='$price', image='$image_up' WHERE id='$id' ";
    mysqli_query($conn,$sql);

    header("location: admin_products.php");

}

?>