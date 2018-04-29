<?php
	include("connection/connectionMhs.php");
	//include("../connection/connectionMhs.php");
	//$mysqli=new mysqli("localhost","mahasiswa","","pengumuman online");
	session_start();
	$user=$_SESSION["user"];
	
	//query untuk mengambil pengumuman yang relevan dengan mahasiswa
	$sql="SELECT DISTINCT * 
		FROM tag_pengumuman 
		INNER JOIN tag_mahasiswa ON tag_pengumuman.IdTag=tag_mahasiswa.IdTag 
		WHERE tag_mahasiswa.Email='".$user."'";


	$start=0;
	$show=1;
	$pageCount=$mysqli->query($sql)->num_rows / $show;
	


	if(isset($_GET['start'])){
		$start=$_GET['start'];
	}

	$sql .=" LIMIT $start,$show";

	//looping untuk menampilkan pengumuman
	$temp="";

	if($res=$mysqli->query($sql)){
		while($row=$res->fetch_array()){
			if($temp!=$row["Judul"] || $temp=""){
				$Judul=$row["Judul"];
				$des=$row["Deskripsi"];
				$tgl=$row["Tanggal"];
				$author=$row["Author"];
				echo "
				<li class='bulletin'>
					<h1>
						$Judul
					</h1> 
					<p> Date : $tgl Author : $author </p>
					<p> $des </p>
						
				</li> 
				";
				$temp=$row['Judul'];
			}	
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