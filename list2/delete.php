<?php
require('../praktisqr2/db.php');
$id_matrik=$_REQUEST['id_matrik'];
$sql = "DELETE FROM `details_members` WHERE `id_matrik`=$id_matrik"; 
$result = mysqli_query($conn, $sql) or die ( mysqli_error());
header("Location:index.php"); 
?>