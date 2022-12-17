<?php
require("database.php");

if(isset($_GET['createBtn'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $queryCreate = "INSERT INTO accounts VALUES(null,'$username','$password')";
    $sqlCreate = mysqli_query($connection,$queryCreate);

    echo "<script>window.location.href = 'index.php' </script>";
}
?>