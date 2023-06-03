<?php
include 'config/dbconnection.php';

$username = "";
if(!empty($_GET['username'])){
    $username= $_GET['username'];
}

$sql = "select * from tbl_student";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header class="dashboard-head">
        <div class="menu-wrapper">
            <h3 class="user-heading"><?php echo $username; ?></h3>
            <a class="logout btn"  href="index.html">Logout</a>
        </div>
    </header>
    <div class="container">
        <div class="wrapper">
            <div class="field-group">
                <table>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['roll_num']; ?>
                            </td>
                            <td>
                                <?php echo $row['first_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['last_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['fee']; ?>
                            </td>
                            <td>
                                <a class="btn" href="http://localhost/basephp/edit.php?id=<?php echo $row['id']; ?>">Edit</a>

                            </td>
                            <td>
                                <a class="btn-delete btn" href="http://localhost/basephp/delete.php?id=<?php echo $row['id']; ?>">Delete</a>

                            </td>
                        </tr>

                        <?php

                    }
                }
                ?>
            </table>
            <br>
            <a class="btn" href="add.php?add=1">Add New</a>
            </div>
        </div>   
    </div>
</body>
</html>