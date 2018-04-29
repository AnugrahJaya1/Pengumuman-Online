<?php
	$email="";
	$password="";
	$success=false;
	$sql="";

	$mysqli=new mysqli("localhost","root","","pengumuman online");

	session_start();
	if(isset($_POST['login'])){

		if(empty($_POST['email'])) {
			// array_push($error, "Email Doesn't Exist");
			// header('Location: ../index.php');
			//ngejalanin js?
		} else if( empty($_POST['password'])){
			// array_push($error, "Wrong password ");
			// header('Location: ../index.php');
			//ngejalanin js?
		}else{
			$email=$_POST['email'];
			$password=md5($_POST['password']);
			
			//echo $email." ".$password;

			// include("../connection/connectionAdm.php");
			$sql="SELECT * FROM admin WHERE Email='$email'";
			//cari apakah admin atau bukan
			$result=$mysqli->query($sql);
			if($result && $result->num_rows >0){
				$row=$result->fetch_array();
				if($row['Password']==$password){
					$_SESSION["admin"]=$email;
					$_SESSION["user"]=$email;
					header('Location: ../adminPage.php');
				}else{
					//header('Location: ../index.php');
					//jalanin js buat visibility
				}
			}else{
				$sql="SELECT * FROM users WHERE Email='$email'";
				$result=$mysqli->query($sql);
				//cari users atau bukan
				if($result && $result->num_rows >0){
					$row=$result->fetch_array();
					if($row['Password']==$password){
						$_SESSION["admin"]=$email;
						$_SESSION["user"]=$email;
						header('Location: ../userPage.php');
					}else{
						//header('Location: ../index.php');
						//jalanin js buat visibility
					}
				}
				
			}
			
		}
	}

?>