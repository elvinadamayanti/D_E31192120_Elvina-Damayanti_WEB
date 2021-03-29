<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
	<?php 
		foreach ($Mahasiswa as $row ) 
		{
			echo "Nama :".$row['nama'];
			echo "<br/>";
			echo "Prodi :".$row['prodi'];
			echo "<hr/>";
		}

	 ?>
</body>
</html>