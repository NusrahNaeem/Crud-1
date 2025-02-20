
<?php

include 'conn.php';

$del_id = $_GET['delid'];

// echo $del_id;

$sql = "DELETE FROM student WHERE id = '$del_id'";

$query = mysqli_query($conn,$sql);


header("Location: http://localhost:8080/Crud1/selectdata.php");





?>