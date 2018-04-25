<?php
   include("../connection/connectionAdm.php");

   if(isset($_POST['iUp'])){
       $npm=$_POST['npmCon'];
       $password=md5($_POST['passCon']);
       if(isset($npm) && isset($password) && $npm!="" && $password!=""){
            $sql="UPDATE pengumumanmahasiswa SET PasswordMahasiswa='$password' WHERE NPM='$npm'";
            $mysqli->query($sql);

            $sql="UPDATE mahasiswa SET PasswordMahasiswa='$password' WHERE NPM='$npm'";
            $mysqli->query($sql);
            
            
       }
   }else if(isset($_POST['iDel'])){
        $npm=$_POST['npmCon'];
        if(isset($npm) && $npm!=""){
            $sql="DELETE FROM pengumumanmahasiswa WHERE NPM='$npm'";
            $mysqli->query($sql);

            $sql="DELETE FROM mahasiswa WHERE NPM='$npm'";
            $mysqli->query($sql);
            
        }
   }
   header("Location: ../adminEditMhs.php");
?>