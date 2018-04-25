<?php
    include("../connection/connectionAdm.php");

   

    if(isset($_GET['iUp'])){
        $newName=$_GET['newName'];
        $oldName=$_GET['oldName'];
        if(isset($newName) && $newName!="" && isset($oldName) && $oldName!="" ){
            $sql="UPDATE tagpengumuman SET NamaTag='$newName' WHERE NamaTag='$oldName'";
            $mysqli->query($sql);

            $sql="UPDATE pengumumanmahasiswa SET NamaTag='$newName' WHERE NamaTag='$oldName'";
            $mysqli->query($sql);


            $sql="UPDATE tag SET NamaTag='$newName' WHERE NamaTag='$oldName'";
            $mysqli->query($sql);

           

            
        }
    }else if(isset($_GET['iDel'])){
        $name=$_GET['oldName'];
        if(isset($name) && $name!=""){
            $sql="DELETE FROM tagpengumuman WHERE NamaTag='$name'";
            $mysqli->query($sql);

            $sql="DELETE FROM pengumumanmahasiswa WHERE NamaTag='$name'";
            $mysqli->query($sql);


            $sql="DELETE FROM tag WHERE NamaTag='$name'";
            $mysqli->query($sql);

            
        }
    }

    header("Location: ../adminEditTag.php");
?>