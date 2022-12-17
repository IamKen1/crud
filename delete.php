<?php
require('database.php');

if(isset($_GET['deleteBtn'])){
    $id = $_GET['deleteId'];

    $queryDelete = "DELETE FROM accounts WHERE ('$id' = id) ";
    $sqlDelete = mysqli_query($connection,$queryDelete);

    echo "<script>window.location.href = 'index.php' </script>";
}
?>