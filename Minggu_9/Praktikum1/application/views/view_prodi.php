<!DOCTYPE html>
<html>
<head>
    <title>Tabel Parsing</title>
</head>
<body>

    <table border="1">
    	<tr><th>No</th><th>Prodi</th><th>Keterangan</th></tr>


        <?php 
                $no=1;
            	foreach ($Prodi as $rows =>$row) 
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

