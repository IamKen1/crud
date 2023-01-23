<?php
require("read.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
   <div class="container">

    <h3>CRUD</h3>
    <form action="create.php" method="get">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="createBtn" value="save">
    </form>

        <table>

            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>action</th>
            </tr>
            <?php
                while ($results = mysqli_fetch_array($sqlAccounts)) {
            ?>
            <tr>
                <td><?php echo $results['id'] ?></td>
                <td><?php echo $results['username'] ?></td>
                <td><?php echo $results['password'] ?></td>
                <td>
                    <form action="update.php" method="get">
                         <input type="submit" name="editBtn" value="edit" />
                         <input type="hidden" name="editId" value="<?php echo $results['id'] ?>" />
                        <input type="hidden" name="editUsername" value="<?php echo $results['username'] ?>"/>
                        <input type="hidden" name="editPassword" value="<?php echo $results['password'] ?>"/>
                    </form>

                    <form action="delete.php" method="get">
                        <input type="submit" name="deleteBtn" value="delete" />
                        <input type="hidden" name="deleteId" value="<?php echo $results['id'] ?>" />
                    </form>
                </td>
            </tr>
            <?php 
               }   
            ?>     
        </table>
  
   </div> 
</body>
</html>
  