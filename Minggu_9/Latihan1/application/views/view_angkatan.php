<!DOCTYPE html>
<html>
<head>
    <title>Tabel Parsing</title>
</head>
<body>

    <table border="1">
    	<tr><th>No</th><th>Tahun</th>


        <?php 
            	$no=1;
                foreach ($Angkatan as $rows =>$row) 
            	{
            		echo "<tr>";
                    echo "<td>".$no++."</td>";
            		foreach ($row as $col => $cell)
            		echo "<td>".$cell."</td>";
            	}
            	echo "</tr>";
         ?>
    </table>

</body>
</html>