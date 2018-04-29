<?php
	include("connection/connectionMhs.php");
	
	//query untuk mengambil pengumuman yang relevan dengan mahasiswa
	$sql="SELECT DISTINCT * FROM tag";

	if($res=$mysqli->query($sql)){
		while($row=$res->fetch_array()){
			$namaTag=$row['NamaTag'];
			//echo $namaTag;
			echo "<tr>";
			echo "<td>".$namaTag."</td>";
			echo "</tr>";
		}
	}

	echo "<br>";


?>