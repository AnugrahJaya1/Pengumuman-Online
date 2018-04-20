<?php
	$email="";
	$password="";
	$success=false;
	$serverName="localhost";
	$error= array();

	$mysqli;
	$sql;

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
			//echo $temp;

			//cek yang login mahasiswa atau admin
			if($temp=="mhs"){
				setcookie("user", $email,time() - 3600); 
				$mysqli=new mysqli($serverName,"mahasiswa","","pengumuman online");//akses database dengan akun mahasiswa(hanya bisa select)
				$sql="SELECT * FROM mahasiswa WHERE EmailMahasiswa='$email'";
				//echo $_COOKIE["user"];
			}else if($temp=="adm"){
				setcookie("admin", $email,time() - 3600); 
				$mysqli=new mysqli($serverName,"admin","","pengumuman online");//akses databes dengan akun admin(bisa edit semua data di database)
				$sql="SELECT * FROM admin WHERE EmailAdmin='$email'";
			}


			
			$res=$mysqli->query($sql);

			if($res && $res->num_rows >0){
				$row=$res->fetch_array();
				if($row['PasswordMahasiswa']==$password ){
					header('Location: ../UserPage.php');//redirect ke UserPage
				}else if($row['PasswordAdmin']==$password)){
					header('Location: ../index.php');//redirect ke index(admin page)
				}else{
					header('Location: ../LoginPage.php');
				}
			}else{
				//echo"Error : Email $email does exist";
				header('Location: ../LoginPage.php');
				
			}
		}
	}

?>