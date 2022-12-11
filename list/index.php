<!DOCTYPE html>
<html>
	<head>
	<title>QRC System</title>
		<style>
			table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }

		button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

		
		</style>
	</head>
	<body>
	
		
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "qr_convo";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//echo "Connected successfully";
		
		
		if(isset($_GET["tambahdata"])){
			
			?>

			<h1>Tambah Data</h1>
			<form method="post">
				<label>ID Matrik</label>
				<input name="id_matrik">
				<label>Nama</label>
				<input name="fullname" type="text">
				<label>department</label>
				<input name="department" type="text">
				<label>level</label>
				<input name="level" type="text">
				<label>Branch</label>
				<input name="branch" type="text">
				<input type="submit" value="Tambah Data">
			</form>
			<?php
		
			if(isset($_POST["nama"])){
				
				$id_matrik = mysqli_real_escape_string($conn, $_POST["id_matrik"]);
				$fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
				$department = mysqli_real_escape_string($conn, $_POST["department"]);
				$level = mysqli_real_escape_string($conn, $_POST["level"]);
				$branch = mysqli_real_escape_string($conn, $_POST["branch"]);
				
				echo "Nama adalah = " . $nama;
				
				mysqli_query($conn, "INSERT INTO details_members (id_matrik,fullname,department,level,branch) VALUES ('id_matrik','fullname','department','level','branch')");
				require_once('phpqrcode/qrlib.php'); 
				$qrvalue = $nomor;
				$tempDir = "qr/"; 
				$codeContents = "http://localhost/OmPuter/belajarqrcodephp/index.php?cek=" . $qrvalue; 
				$fileName = $qrvalue . '.png'; 
				$pngAbsoluteFilePath = $tempDir.$fileName; 
				$urlRelativeFilePath = $tempDir.$fileName; 
				if (!file_exists($pngAbsoluteFilePath)) { 
					QRcode::png($codeContents, $pngAbsoluteFilePath); 
				}
				
			}
			
		}
		
		
		
		if(isset($_GET["cek"])){
			
			$nomor = mysqli_real_escape_string($conn, $_GET["cek"]);
			
			$sql = "SELECT * FROM details_members WHERE id_matrik = $id_matrik";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			
			?>
			<h1>Detail Data</h1>
			<p>ID_Matrik = <?php echo $row["id_matrik"] ?></p>
			<p>Nama = <?php echo $row["fullname"] ?></p>
			<p>Nomor = <?php echo $row["department"] ?></p>
			<p>ID = <?php echo $row["level"] ?></p>
			<p>Nama = <?php echo $row["branch"] ?></p>
			<?php
			
		}else{
			
			?>
			<h1>Details members</h1></br>
			<div>
			<centre>
		<a href="http://localhost/QRCSystem/">Back </a>
	</centre>
	</div>
			<?php
			
			$sql = "SELECT * FROM details_members ORDER BY id_matrik DESC";
			$result = mysqli_query($conn, $sql);

			$datasaya = "<table><tr><th>ID Matrik</th><th>Nama</th><th>Department</th><th>Level</th><th>Branch</th><th>QRcode</th></tr>";
			
			
			while($row = mysqli_fetch_assoc($result)){
				
				$datasaya .= "<tr><td>" . $row["id_matrik"] . "</td><td>" . $row["fullname"] . "</td><td>" .$row["department"]. "</td><td>" .$row["level"]. "</td><td>" .$row["branch"]. "</td><td><img src='../praktisqr2/imageqr/" .$row["id_matrik"]. ".png' width='100px'></td></tr>";

			}
			
			
			$datasaya .= "</table>";
			
			echo $datasaya;

		}

		
		?>
	</body>
</html>

