<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "phpCrudTutorial";

$connection = mysqli_connect($host,$user,$pass,$database);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
}else{
    echo "database connected";
}
?>