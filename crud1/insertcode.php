<?php
include 'conn.php';
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];

    $sql = "INSERT INTO student (name,city) VALUES('$name','$city')";

    $query= mysqli_query($conn,$sql);

    header("Location: http://localhost:8080/Crud1/selectdata.php");
}



?>