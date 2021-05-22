<?php

include("../config.php");

$shrine_name = $_POST['shrine_name'];
$shrine_name_japan = $_POST['shrine_name_japan'];
$islands = $_POST['islands'];
$shrine_description = $_POST['shrine_description'];
$shrine_image = $_FILES['shrine_image']['name'];
$shrine_image_tmp = $_FILES['shrine_image']['tmp_name'];

$folder = "../images";

$s = move_uploaded_file($shrine_image_tmp, "$folder/$shrine_image");
$query = "INSERT INTO shrine VALUES ('','$shrine_name', '$shrine_name_japan', '$islands', '$shrine_image', '$shrine_description')";
if(mysqli_query($conn, $query)){
    header("location:../index.php");
}else{
    echo $conn->error;
}
