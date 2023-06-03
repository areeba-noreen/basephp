<?php
include 'config/dbconnection.php';
$id = $_GET['id'];
if(!empty($_GET['id'])){

    $sql = "delete from tbl_student where id=$id";

     //print_r($sql);
     $result = $conn->query($sql);
     if (!empty($result)) {
         header('Location: http://localhost/basephp/dashboard.php');
         exit;
    }

}

?>