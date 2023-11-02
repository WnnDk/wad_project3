<?php
$conn = mysqli_connect("localhost",'root','','wad_projecct3');
$result = mysqli_query($conn,"SELECT * FROM student");

// $data=mysqli_fetch_object($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>NIM</th>
          <th>ADDRESS</th>
        </tr>
<?php while ($data=mysqli_fetch_object($result)){
  ?>
        <tr>
          <td><?php echo $data->id?></td>
          <td><?php echo $data->name?></td>
          <td><?php echo $data->nim?></td>
          <td><?php echo $data->address?></td>
        </tr>
<?php
}
?>
</table>
</body>
</html>