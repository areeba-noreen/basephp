<?php
include 'config/dbconnection.php';
    $roll_number= $_GET['rollnumber'];
    $first_name= $_GET['first_name'];
    $last_name= $_GET['last_name'];
    $fee= $_GET['fee'];
if(!empty($_GET['rollnumber'])){
    $sql = "insert into tbl_student (roll_num, first_name, last_name, fee) Values ('" . $roll_number . "','" . $first_name . "','" . $last_name . "','" . $fee . "')"; 
    //print_r($sql);  
    $result = $conn->query($sql);
   if (!empty($result)) {
        echo "Added Succesfully!";
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
            <a class="logout"  href="index.html">Logout</a>
        </div>
    </header>
    <div class="container">
        <div class="wrapper">
            <div class="field-group">
            <form>
                <div>
                    <lable class="form-label">Roll Number</label>
                        <input class="form-input" type="text" name="rollnumber" value="" />
                </div>

                <div>
                    <lable class="form-label">First Name</label>
                        <input class="form-input" type="text" name="first_name" value="" />
                </div>

                <div>
                    <lable class="form-label">Last Name</label>
                        <input class="form-input" type="text" name="last_name" value="" />
                </div>
                <div>
                    <lable class="form-label">Fee</label>
                        <input class="form-input" type="text" name="fee" value="" />
                </div>

                <br><br><br>

                <div>
                        <input type="hidden" name="add" value="1">
                        <input class="btn" type="submit" value="Add Record">
                        <a class="btn"  href="dashboard.php">Goto Dashboard</a>
                </div>

                <div>
                    
                </div>

            </form>

        </div>


    </div>
</body>

</html>
