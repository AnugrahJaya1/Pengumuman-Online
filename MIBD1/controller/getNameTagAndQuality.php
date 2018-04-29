<?php
    include("connection/connectionMhs.php");
    //session_start();
    $user=$_SESSION["user"];

    $sql="SELECT NamaTag,COUNT(NamaTag)
        FROM tag_mahasiswa 
        WHERE Email='".$user."'
        GROUP BY NamaTag";

    if($result=$mysqli->query($sql)){
        while($row=$result->fetch_array()){
            $nama=$row[0];
            $quality=$row[1];

            echo "<li>";
            echo "<p'>".$nama." ".$quality."</p>";
            //echo "<label>". $quality ."</label>";
            echo "</li>";
        }
    }

?>