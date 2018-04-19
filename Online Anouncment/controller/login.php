<?php
	$email="";
	$password="";
	$success=false;
	$serverName="localhost";
	$error= array();

	if(isset($_POST['login'])){

		if(empty($_POST['email'])) {
			array_push($error, "Email Doesn't Exist");
			header('Location: ../LoginPage.php');
		} else if( empty($_POST['password'])){
			array_push($error, "Wrong password ");
			header('Location: ../LoginPage.php');
		}else{
			$email=$_POST['email'];
			$password=md5($_POST['password']);

			$temp=substr($email, 8,3);
			if($temp==="mhs"){
				setcookie("user", $email,time() - 3600); 
				$mysqli=new mysqli($serverName,"mahasiswa","","pengumuman online");
				//echo $_COOKIE["user"];
			}else{
				setcookie("admin", $email,time() - 3600); 
				$mysqli=new mysqli($serverName,"admin","","pengumuman online");
			}

			$mysqli=new mysqli($serverName,"mahasiswa","","pengumuman online");

			$sql="SELECT * FROM mahasiswa WHERE EmailMahasiswa='$email'";
			$res=$mysqli->query($sql);

			if($res && $res->num_rows >0){
				$row=$res->fetch_array();
				if($row['PasswordMahasiswa']==$password){
					header('Location: ../UserPage.php');
				}else{
					header('Location: ../LoginPage.php');
				}
			}else{
				echo"Error : Email $email does exist";
			}
		}
	}

?>