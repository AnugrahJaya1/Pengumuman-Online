<?php
	$mysqli=new mysqli("localhost","root","","pengumuman online");
	$user=$_COOKIE["user"];
	//echo $user;

	$sql="SELECT * FROM pengumuman inner join tagpengumuman on 
	pengumuman.IdPengumuman=tagpengumuman.IdPengumuman inner join pengumumanmahasiswa on tagpengumuman.IdTag=pengumumanmahasiswa.IdTag WHERE pengumumanmahasiswa.EmailMahasiswa='$user'";

	$res=$mysqli->query($sql);
	$row=$res->fetch_array();

	echo $row["Judul"] . " ". $row["Author"] . " "  . $row["Tanggal"] . " "  . $row["Deskripsi"];

	// for($i=0;$i<sizeof($row);$i++){
	// 	echo $row["Judul"];
	// }

?>