<?php
include 'conn.php';

?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="container">

    <form class="mt-5" method="POST" action="insertcode.php">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  
  </div>
  <div class="mb-3">
    <label>Select city</label>
  <select class="form-select" name="city">
  <option selected>select city</option>
<?php
// city table data
$sql="SELECT * FROM city";

$query = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($query)) {
    

?>

  <option value="<?= $row['cityid']?>"><?= $row['cityname']?></option>
 
  <?php
  }
  ?>
</select>
</div>
  <button type="submit" name="insert" class="btn btn-primary">Submit</button>
</form>
</div>