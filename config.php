<?php

$host="localhost";
$user="root";
$password="";
$database="shrine";

$conn = mysqli_connect($host, $user, $password, $database);

if(mysqli_error($conn)){
    echo $conn->error;
}