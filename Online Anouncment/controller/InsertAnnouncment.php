<?php
$mysqli = new mysqli("localhost","root","","pengumuman online");

$title = $_GET['annTitle'];
$auth = $_GET['annAuth'];
$date = $_GET['annDate'];
$announce = $_GET['annText'];

$sql = "INSERT INTO pengumuman (Judul, Author, Deskripsi, Tanggal) VALUES ('$title', '$auth', '$announce', '$date') ";

$mysqli->query($sql);
?>