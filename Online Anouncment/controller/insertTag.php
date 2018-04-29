<?php
    include("../connection/connectionAdm.php");

    if(isset($_POST['tagSub'])){
        $tag=$_POST['tagText'];
        if(isset($tag) && $tag!=""){
            $sql="INSERT INTO tag (NamaTag) VALUES ('$tag')";
            $mysqli->query($sql);
        }
    }
    header("Location: ../adminTag.php");
?>