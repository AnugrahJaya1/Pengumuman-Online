<?php
	include("connection/connectionMhs.php");
	//include("../connection/connectionMhs.php");
	//$mysqli=new mysqli("localhost","mahasiswa","","pengumuman online");
	session_start();
	$user=$_SESSION["user"];
	

	$sql="SELECT DISTINCT * 
		FROM pengumuman 
		INNER JOIN tagpengumuman ON pengumuman.IdPengumuman=tagpengumuman.IdPengumuman 
		INNER JOIN pengumumanmahasiswa ON tagpengumuman.IdTag=pengumumanmahasiswa.IdTag 
		WHERE pengumumanmahasiswa.EmailMahasiswa='".$user."'";

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
?>