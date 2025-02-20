

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <div class="container mt-5">
    <table class="table table-success table-striped">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>City</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

  <?php
  include 'conn.php';
  $sql = "SELECT * FROM student JOIN city WHERE student.city=city.cityid ";
  
  $query = mysqli_query($conn,$sql);

  if (mysqli_num_rows($query)>0) {
    while($row = mysqli_fetch_assoc($query)){
 
  ?>

  <tr>

<td><?= $row['id']?></td>
<td><?= $row['name']?></td>
<td><?= $row['cityname']?></td>
<td><a href="updform.php?updid=<?= $row['id']?>" class="btn btn-success">Edit</a></td>
<td><a href="delcode.php?delid=<?= $row['id']?>" class="btn btn-danger">Delete</a></td>
  </tr>
  <?php
  
}
  
}
  ?>
</table>
    </div>