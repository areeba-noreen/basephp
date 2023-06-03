<?php
include 'config/dbconnection.php';

$username = "";
if(!empty($_GET['username'])){
    $username= $_GET['username'];
}

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
            <a class="logout btn"  href="login.php">Logout</a>
        </div>
        
    </header>
</body>
</html>