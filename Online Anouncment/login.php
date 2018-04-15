<?php
	$email;
	$password;
	$success=false;


	$mysqli;
	
	if(isset($_POST['login'])){
		if(empty($_POST['Username']) || empty($_POST['Password'])){
			$success=false;
		}else{
			$email=$_POST['Username'];
			$password=$_POST['Password'];
		}
	}


?>