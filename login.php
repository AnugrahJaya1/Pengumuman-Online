<?php
	$email="";
	$password="";
	$success=false;
	$sql="";
	session_start();
	if(isset($_POST['login'])){

		if(empty($_POST['email'])) {
			array_push($error, "Email Doesn't Exist");
			header('Location: ../index.php');
		} else if( empty($_POST['password'])){
			array_push($error, "Wrong password ");
			header('Location: ../index.php');
		}else{
			$email=$_POST['email'];
			$password=md5($_POST['password']);

			$temp=substr($email, 8,3);
			//echo $temp;

			//cek yang login mahasiswa atau admin
			if($temp=="mhs"){
				//setcookie("user", $email,time() + (86400*300)); 
				$_SESSION["user"]=$email;
				include("../connection/connectionMhs.php");//akses database dengan akun mahasiswa(hanya bisa select)
				$sql="SELECT * FROM mahasiswa WHERE EmailMahasiswa='$email'";
				//echo $_COOKIE["user"];
			}else if($temp=="adm"){
				//setcookie("admin", $email,time() + (86400*300)); 
				$_SESSION["admin"]=$email;
				include("../connection/connectionAdm.php");;//akses databes dengan akun admin(bisa edit semua data di database)
				$sql="SELECT * FROM admin WHERE EmailAdmin='$email'";
			}


			
			$res=$mysqli->query($sql);

			if($res && $res->num_rows >0){
				$row=$res->fetch_array();
				if($row['PasswordMahasiswa']==$password ){
					header('Location: ../UserPage.php');//redirect ke UserPage
				}else if($row['PasswordAdmin']==$password){
					header('Location: ../adminPAge.php');//redirect ke index(admin page)
				}else{
					header('Location: ../index.php');
				}
			}else{
				//echo"Error : Email $email does exist";
				header('Location: ../index.php');
				
			}
		}
	}

?>