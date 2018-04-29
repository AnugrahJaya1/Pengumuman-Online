<?php
	include("connection/connectionMhs.php");

	
	//query untuk mengambil pengumuman yang relevan dengan mahasiswa
	$sql="SELECT DISTINCT * FROM pengumuman ";


	$start=0;
	$show=8;
	$pageCount=$mysqli->query($sql)->num_rows / $show;
	
	if(isset($_GET['start'])){
		$start=$_GET['start'];
	}

	$sql .=" LIMIT $start,$show";

	//looping untuk menampilkan pengumuman
	if($res=$mysqli->query($sql)){
		while($row=$res->fetch_array()){
			$Judul=$row["Judul"];
			$des=$row["Deskripsi"];
			$tgl=$row["Tanggal"];
            $author=$row["Author"];
        
			echo "<tr>";
			echo "<td>".$Judul."</td>";
			echo "<td>".$author."</td>";
			echo "<td>".$tgl."</td>";
			echo "</tr>";
		}
	}

	echo "<br>";

	//paganition
		if($pageCount>1){
			for($i=0,$j=1;$i<$pageCount;$i++,$j++){
				$str=($i)*$show;
				$start=$str;
				echo "<a href=UserPage.php?start=$str>$j</a>";
			}
		}

?>