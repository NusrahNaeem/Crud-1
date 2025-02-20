
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<?php
include 'conn.php';
$upd_id = $_GET['updid'];

$sql = "SELECT * FROM student WHERE id = $upd_id";

$query = mysqli_query($conn,$sql);

if (mysqli_num_rows($query)>0) {
    while ($row = mysqli_fetch_assoc($query)) {
   
?>
    <div class="container">

    <form class="mt-5" method="POST" action="updcode.php">
    <input type="hidden" class="form-control" name="id" value="<?= $row['id']?>">
  <div class="mb-3">
    
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?= $row['name']?>">

  </div>
  <div class="mb-3">
    <label>Select city</label>
<?php
$sql1 = "SELECT * FROM city";
$query1 = mysqli_query($conn,$sql1);
echo "<select class='form-select' name='city'>";
while ($row1 = mysqli_fetch_assoc($query1)) {
        //$row student table and $row1 city table
    if ($row['city']==$row1['cityid']) {
        
    $select = "selected";
    }
    else {
        $select = "";
      }

 echo"<option {$select} value='{$row1['cityid']}'>{$row1['cityname']}</option>";
 
  }
echo "</select>";
?>
</div>
  <button type="submit" name="update" class="btn btn-success">Update form</button>
</form>
</div>
<?php
}
}

?>