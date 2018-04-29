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
			
			$temp=substr($email, 8,3);
			echo $temp;

			if($temp=="mhs"){
				//setcookie("user", $email,time() + (86400*300)); 
				$_SESSION["user"]=$email;
				include("../connection/connectionMhs.php");//akses database dengan akun mahasiswa(hanya bisa select)
				$sql="SELECT * FROM users WHERE Email='$email'";
				//echo $_COOKIE["user"];
			}else if($temp=="adm"){
				//setcookie("admin", $email,time() + (86400*300)); 
				$_SESSION["admin"]=$email;
				include("../connection/connectionAdm.php");;//akses databes dengan akun admin(bisa edit semua data di database)
				$sql="SELECT * FROM admin WHERE Email='$email'";
			}


			$res=$mysqli->query($sql);

			if($res && $res->num_rows >0){
				$row=$res->fetch_array();
				if($row['Password']==$password && $temp=="adm"){
					header('Location: ../adminPage.php');//redirect ke UserPage
				}else if($row['Password']==$password && $temp=="mhs"){
					header('Location: ../userPage.php');//redirect ke index(admin page)
				}else{
					header('Location: ../index.php');
				}
			}else{
				//echo"Error : Email $email does exist";
				header('Location: ../index.php');
				
			}


			// //echo $email." ".$password;

			// // include("../connection/connectionAdm.php");
			// $sql="SELECT * FROM admin WHERE Email='$email'";
			// //cari apakah admin atau bukan
			// $result=$mysqli->query($sql);
			// if($result && $result->num_rows >0){
			// 	$row=$result->fetch_array();
			// 	if($row['Password']==$password){
			// 		$_SESSION["admin"]=$email;
			// 		$_SESSION["user"]=$email;
			// 		header('Location: ../adminPage.php');
			// 	}else{
			// 		//header('Location: ../index.php');
			// 		//jalanin js buat visibility
			// 	}
			// }else{
			// 	$sql="SELECT * FROM users WHERE Email='$email'";
			// 	$result=$mysqli->query($sql);
			// 	//cari users atau bukan
			// 	if($result && $result->num_rows >0){
			// 		$row=$result->fetch_array();
			// 		if($row['Password']==$password){
			// 			$_SESSION["admin"]=$email;
			// 			$_SESSION["user"]=$email;
			// 			header('Location: ../userPage.php');
			// 		}else{
			// 			//header('Location: ../index.php');
			// 			//jalanin js buat visibility
			// 		}
			// 	}
				
			// }
			
		}
	}

?>