<?php
    $mysqli=new mysqli("localhost","admin","","pengumuman online");

    if($mysqli->connect_errno){
        echo "Failed to connect";
    }
?>