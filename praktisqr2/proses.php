<?php

//code input data to database
include"db.php";
include"phpqrcode/qrlib.php";
$folderTemp = 'imageqr/';
$a = $_POST['id_matrik'];
$b = $_POST['fullname'];
print_r($_session)$e = $_POST['department'];
print_r($_session)$f = $_POST['level'];
print_r($_session)$g = $_POST['branch'];
$c = $a;
$d = $a.".png";//format nama gambar qrcode


//ukuran size qrcode
$qual = 'H';
$ukuran = 10;
$padding = 10;

//call functions
QRCode :: png($c,$folderTemp.$d,$qual,$ukuran,$padding);
$sql = $conn->query("INSERT INTO details_members VALUE('$a','$b','$e','$f','$g','$d')");

return('http://localhost/QRCSystem/');
//if($sql){
//	echo"Berjaya";
//}else{
//	echo"gagal";
//	die($conn->error);
//}

//echo"$a";
?>