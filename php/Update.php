<?php

$id = $_POST['id'];
$shrine_name = $_POST['shrine_name'];
$shrine_name_japan = $_POST['shrine_name_japan'];
$islands = $_POST['islands'];
$shrine_description = $_POST['shrine_description'];
$shrine_image = $_FILES['shrine_image']['name'];
$shrine_image_tmp = $_FILES['shrine_image']['tmp_name'];

$folder = "../images";

if($shrine_image == ""){
    $query = "UPDATE shrine SET 
        shrine_name='$shrine_name',
        shrine_name_japan='$shrine_name_japan',
        islands='$islands',
        shrine_description='$shrine_description'
        WHERE id=$id";

}else{
    $s = move_uploaded_file($shrine_image_tmp, "$folder/$shrine_image");
    $query = "UPDATE shrine SET 
        shrine_name='$shrine_name',
        shrine_name_japan='$shrine_name_japan',
        islands='$islands',
        shrine_description='$shrine_description',
        shrine_image='$shrine_image'
        WHERE id=$id";
}
if(mysqli_query($conn, $query)){
    header("location:../index.php");
}else{
    echo $conn->error;
}
