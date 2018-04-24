<?php
	include("connection/connectionMhs.php");
	//include("../connection/connectionMhs.php");
	//$mysqli=new mysqli("localhost","mahasiswa","","pengumuman online");
	session_start();
	$user=$_SESSION["user"];
	
	//query untuk mengambil pengumuman yang relevan dengan mahasiswa
	$sql="SELECT DISTINCT * 
		FROM pengumuman 
		INNER JOIN tagpengumuman ON pengumuman.IdPengumuman=tagpengumuman.IdPengumuman 
		INNER JOIN pengumumanmahasiswa ON tagpengumuman.IdTag=pengumumanmahasiswa.IdTag 
		WHERE pengumumanmahasiswa.EmailMahasiswa='".$user."'";


	//buat search
	if(isset($_GET['iSubmit'])){
		$name=$_GET['iName'];
		if(isset($name) && $name!=""){
			$query .=" WHERE name LIKE '%$name%'";
		}
	}


	$start=0;
	$show=1;
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
			echo "
			<li class='bulletin'>
				<h1>
					$Judul
				</h1> 
				<p> Date : $tgl Author : $author </p>
				<p> $des </p>
				
			</li> 
			";
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