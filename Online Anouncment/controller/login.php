<?php
	$email="";
	$password="";
	$success=false;
	$serverName="localhost";
		

	if(isset($_POST['login'])){
		if(empty($_POST['email']) || empty($_POST['password'])){
			echo "Email atau Password harus diisi";
			header("Location : LoginPage.php");
		}else{
			$email=$_POST['email'];
			$password=md5($_POST['password']);

			$mysqli=new mysqli($serverName,"root","","pengumuman online");

			$sql="SELECT * FROM mahasiswa WHERE EmailMahasiswa='$email'";
			$res=$mysqli->query($sql);

			if($res && $res->num_rows >0){
				$row=$res->fetch_array();
				if($row['PasswordMahasiswa']==$password){
					echo "Login succes";
				}else{
					echo"SALAH PASSWORD";
				}
			}else{
				echo"Error : Email $email does exist";
			}
		}
	}

?>
