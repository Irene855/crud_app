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


if (isset($_POST['submit'])) {

    $names = $_POST['names'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    $id = $_POST['id'];

    $sql = "UPDATE employee SET names='$names',email='$email',salary = '$salary' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "New record UPDATED successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}



mysqli_close($conn);
?>
