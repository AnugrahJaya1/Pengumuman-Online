<?php
	$email="";
	$password="";
	$success=false;
	$serverName="localhost";
		
	$mysqli;

	$mysqli=new mysqli($serverName,"root","","pengumuman online");

	if ($mysqli->connect_error) {
    	die("Connection failed: " . $mysqli->connect_error);
	} else{
		echo "Connected successfully";

		if(isset($_GET['login'])){
			if(empty($_GET['email']) || empty($_GET['password'])){
				$success=false;
			}else{
				$email=$_GET['email'];
				$password=$_GET['password'];
				
				$password=md5("$password");

				$sql="SELECT * FROM mahasiswa WHERE EmailMahasiswa='$email' ";
				$res=$mysqli->query($sql);

				if($res && $res->num_rows >0){
					$row=$res->fetch_array();
					if($row['PasswordMahasiswa']==$password){
						echo "Login succes";
					}else{
						echo"Error";
					}
				}else{
					echo"Error : Email $email does exist";
				}
			}
		}

	}
?>