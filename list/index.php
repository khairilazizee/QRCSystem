<?php
require('../praktisqr2/db.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>QRC System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="../index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="praktisqr2/index.php">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="list/index.php">List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="qrcodecam/index.php">Cam Scanner</a>
    </li>
  </ul>
</nav>

<meta charset="utf-8">
<title>View Records</title>
<style>
img
    </style>
</head>
<body>
<div class="form">
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>No Matrik</strong></th>
<th><strong>Name</strong></th>
<th><strong>Department</strong></th>
<th><strong>Level</strong></th>
<th><strong>branch</strong></th>
<th><strong>QR Codes</strong></th>
<th><strong>Action</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sql = "SELECT * FROM details_members ORDER BY id_matrik DESC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["id_matrik"]; ?></td>
<td align="center"><?php echo $row["fullname"]; ?></td>
<td align="center"><?php echo $row["department"]; ?></td>
<td align="center"><?php echo $row["level"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo "<img src='../praktisqr2/imageqr/".$row['imageqr']."' height='100' width='100'>"; ?></td>
<!--<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>-->
<td align="center">
<a href="delete.php?id=<?php echo $row["id_matrik"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>