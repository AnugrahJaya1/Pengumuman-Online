<?php
$mysqli = new mysqli("localhost", "root", "", "pengumuman online");

$npm = $_GET['npm'];
$email = $_GET['emailMhs'];
$pass = $_GET['passMhs'];

$sql = "INSERT INTO mahasiswa (NPM, EmailMahasiswa, PasswordMahasiswa) VALUES ('$npm','$email','$pass')";
$mysqli -> query($sql);
header('Location : ../adminInsert.php');
?>