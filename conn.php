<?php
$conn = mysqli_connect('localhost', 'root', '', 'minet_policy');




// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (fname, username, password)
VALUES ('John', 'Doe', 'password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
