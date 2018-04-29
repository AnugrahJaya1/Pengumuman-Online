<?php
	include("../connection/connectionAdm.php");

	if(isset($_GET['annButt'])){
		$title = $_GET['annTitle'];
		$auth = $_GET['annAuth'];
		$date = $_GET['annDate'];
		$announce = $_GET['annText'];

		if($title!="" && $auth!="" && $date!="" && $announce!=""){
			$sql = "INSERT INTO pengumuman (Judul, Author, Deskripsi, Tanggal) VALUES ('$title', '$auth', '$announce', '$date') ";
		
			$mysqli->query($sql);
		}
	}
	header("Location: ../adminAnnounce.php");
?>