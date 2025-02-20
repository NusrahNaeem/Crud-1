<?php
include 'conn.php';
if (isset($_POST['update'])) {
   $id= $_POST['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];

    $sql = "UPDATE student SET
    name = '$name',
   city='$city'
   WHERE id = '$id'";


    $query = mysqli_query($conn,$sql);

    header("Location: http://localhost:8080/Crud1/selectdata.php");
}


?>