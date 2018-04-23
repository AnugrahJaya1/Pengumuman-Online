<?php
   include("../connection/connectionAdm.php");

   if(isset($_POST['subButt'])){
       $npm=$_POST['npmCon'];
       $password=md5($_POST['passCon']);
       if(isset($npm) && isset($password) && $npm!="" && $password!=""){
            $sql="UPDATE mahasiswa SET PasswordMahasiswa='$password' WHERE NPM='$npm'";
            $mysqli->query($sql);
            $sql="UPDATE pengumumanmahasiswa SET PasswordMahasiswa='$password' WHERE NPM='$npm'";
            $mysqli->query($sql);
            header("../adminEditMhs.php");
       }
   }
    
?>