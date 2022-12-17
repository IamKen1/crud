<?php
require("database.php");

if(isset($_GET['editBtn'])) {
    $editId = $_GET['editId'];
    $editUsername = $_GET['editUsername'];
    $editPassword = $_GET['editPassword'];
}

if(isset($_GET['updateBtn'])){
    $updateId = $_GET['updateId'];
    $updateUsername = $_GET['updateUsername'];
    $updatePassword = $_GET['updatePassword'];

    $queryUpdate = "UPDATE accounts SET username = '$updateUsername', password = '$updatePassword' WHERE id = '$updateId' ";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo "<script> window.location.href = 'index.php' </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
    <h3>UPDATE</h3>
    <form action="update.php" method="get">
        <input type="text" name="updateUsername" placeholder="username" value = "<?php  echo $editUsername ?>">
        <input type="password" name="updatePassword" placeholder="password" value = "<?php  echo $editUsername ?>">
        <input type="hidden" name="updateId" value = "<?php  echo $editId ?>">
        <input type="submit" name="updateBtn" value="save">
    </form>
   
   </div> 
</body>
</html>
  