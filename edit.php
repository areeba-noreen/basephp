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
    if (!empty($result)) {
        echo "Updated Succesfully!";
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
            <a class="logout btn"  href="index.html">Logout</a>
        </div>
    </header>
    <div class="container">
        <div class="wrapper">
            <div class="field-group">
            <form>
                <div>
                    <lable class="form-label">Roll Number</label>
                        <input class="form-input" type="text" name="rollnumber" value="<?php echo $row['roll_num']; ?>" />
                </div>

                <div>
                    <lable class="form-label">First Name</label>
                        <input class="form-input" type="text" name="first_name" value="<?php echo $row['first_name']; ?>" />
                </div>

                <div>
                    <lable class="form-label">Last Name</label>
                        <input class="form-input" type="text" name="last_name" value="<?php echo $row['last_name']; ?>" />
                </div>
                <div>
                    <lable class="form-label">Fee</label>
                        <input class="form-input" type="text" name="fee" value="<?php echo $row['fee']; ?>" />
                </div>

                <br><br><br>

                <div>
                    <?php
                    if (!empty($_GET['id'])) {
                        ?>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                        <div>
                        <input class="btn" type="submit" value="Update">
                        <?php
                    } else {
                        ?>
                        <?php
                    }

                    ?>
                    <a class="btn"  href="dashboard.php">Goto Dashboard</a>
                </div>

                <div>
                    
                </div>

            </form>

        </div>


    </div>
</body>

</html>
