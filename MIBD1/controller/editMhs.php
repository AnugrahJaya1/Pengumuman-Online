<?php
   include("../connection/connectionAdm.php");

   if(isset($_POST['iUp'])){
       $npm=$_POST['npmCon'];
       $password=md5($_POST['passCon']);
       if(isset($npm) && isset($password) && $npm!="" && $password!=""){
            $sql="UPDATE tag_mahasiswa SET Password='$password' WHERE NPM='$npm'";
            $mysqli->query($sql);

            $sql="UPDATE users SET Password='$password' WHERE NPM='$npm'";
            $mysqli->query($sql);
            
            
       }
   }else if(isset($_POST['iDel'])){
        $npm=$_POST['npmCon'];
        if(isset($npm) && $npm!=""){
            $sql="DELETE FROM tag_mahasiswa WHERE NPM='$npm'";
            $mysqli->query($sql);

            $sql="DELETE FROM users WHERE NPM='$npm'";
            $mysqli->query($sql);
            
        }
   }
   header("Location: ../adminEditMhs.php");
?>