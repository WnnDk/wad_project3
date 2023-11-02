<?php
$conn = mysqli_connect("localhost",'root','','wad_projecct3');
$result = mysqli_query($conn,"SELECT * FROM student");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

  echo "<br>";
  
  $sql = "SELECT id, name, nim, address FROM student";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["nim"]." ".$row["address"]. "<br>";
    }
  } else {
    echo "0 results";
  }

var_dump(mysqli_fetch_object($result));
?>