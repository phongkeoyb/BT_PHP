<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "applogin";
$connection = mysqli_connect($host,$user,$password,$database);

if($connection == false){
    die("không thể kết nối đến cơ sở dữ liệu" . mysqli_connect_error());
}

