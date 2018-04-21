<?php
    include("../connection/connectionAdm.php");

    if(isset($_POST['add'])){
        if(empty($_POST['add']) || empty($_POST['emailMhs']) || empty($_POST['passMhs'])){
            header("Location: ../adminInsert.php");
        }else{
            $npm = $_POST['npm'];
            $email = $_POST['emailMhs'];
            $pass = md5($_POST['passMhs']);

            $sql = "INSERT INTO mahasiswa (NPM, EmailMahasiswa, PasswordMahasiswa) VALUES ('$npm','$email','$pass')";

            $mysqli -> query($sql);
        }
    }
    
    header("Location: ../adminInsert.php");
?>