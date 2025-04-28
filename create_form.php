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
    $sql = "INSERT INTO employee (names, email, salary)
    VALUES ('$names', '$email', '$salary')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}



mysqli_close($conn);
?>

