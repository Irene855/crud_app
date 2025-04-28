<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

    <div class="row">
        <div class="col">
        <h1>List of  Employees</h1>
        </div>
        <div class="col">
            <a href="create.php" class="btn btn-danger">+ Create new Employee</a>
        </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Names</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cruddb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {


        
?>

    <tr>
      <th scope="row"><?php echo $row["id"] ?></th>
      <td><?php echo $row["names"] ?></td>
      <td><?php echo $row["email"] ?></td>
      <td><?php echo $row["salary"]."$" ?></td>
      <td><?php echo $row["created_at"] ?></td>
      <td><a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">Update</a> <a class="btn btn-sm btn-success" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>

<?php

}
?>
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>

<?php


} else {
echo "0 results";
}

mysqli_close($conn);
?>