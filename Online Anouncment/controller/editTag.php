<?php
    include("../connection/connectionAdm.php");

   

    if(isset($_GET['subButt'])){
        $newName=$_GET['newName'];
        $oldName=$_GET['oldName'];
        if(isset($newName) && $newName!="" && isset($oldName) && $oldName!="" ){
            $sql="UPDATE tag SET NamaTag='$newName' WHERE NamaTag='$oldName'";
            $mysqli->query($sql);

            $sql="UPDATE tagpengumuman SET NamaTag='$newName' WHERE NamaTag='$oldName'";
            $mysqli->query($sql);

            $sql="UPDATE pengumumanmahasiswa SET NamaTag='$newName' WHERE NamaTag='$oldName'";
            $mysqli->query($sql);

            header("Location: ../adminEditTag.php");
        }
    }
?>