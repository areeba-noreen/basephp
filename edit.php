<?php

include 'config/dbconnection.php';
$id= $_GET['id'];
if(!empty($_GET['rollnumber'])){
    $first_name= $_GET['first_name'];
    $last_name= $_GET['last_name'];
    $fee= $_GET['fee'];

    $sql = "update tbl_student SET first_name='" . $first_name . "', last_name='" . $last_name . "', fee='" . $fee . "' where id=" . $id;
    //print_r($sql);
    $result = $conn->query($sql);
    if (!empty($_GET['edit']) && $result) {
        echo "Updated Succesfully";
    }
}

if (!empty($_GET['id'])){

    $sql = "select * from tbl_student where id=" . $id;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
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
            <h3 class="user-heading"><?php //echo $first_name; ?></h3>
            <a class="logout btn"  href="index.html">Logout</a>
        </div>
    </header>

        <div class="content">

            <form>
                <div class="field-group">
                    <lable>Roll Number</label>
                        <input type="text" name="rollnumber" value="<?php echo $row['roll_num']; ?>" />
                </div>

                <div class="field-group">
                    <lable>First Name</label>
                        <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" />
                </div>

                <div class="field-group">
                    <lable>Last Name</label>
                        <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" />
                </div>
                <div class="field-group">
                    <lable>Fee</label>
                        <input type="text" name="fee" value="<?php echo $row['fee']; ?>" />
                </div>

                <br><br><br>

                <div class="field-group ib">
                    <?php
                    if (!empty($_GET['id'])) {
                        ?>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                        <input type="hidden" name="edit" value="1" />
                        <input type="submit" value="Update">
                        <?php
                    } else {
                        ?>

                        <input type="hidden" name="add" value="1">
                        <input type="submit" value="Add">

                        <?php
                    }

                    ?>
                </div>

                <div>
                    <a class="btn" href="dashboard.php">Goto Dashboard</a>
                </div>

            </form>

        </div>


    </div>
</body>

</html>
