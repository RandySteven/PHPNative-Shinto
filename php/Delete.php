<?php
include("../config.php");
$id = $_GET['id'];
$show = "SELECT * FROM shrine WHERE id=$id";
$folder = '../images';

while($data = mysqli_fetch_assoc(mysqli_query($conn, $show))){
    $image = $data['shrine_image'];
    unlink("$folder/$image");
}

$query = "DELETE FROM shrine WHERE id=$id";
if(mysqli_query($conn, $query)){
    header("location:../index.php");
}