<?php
    $mysqli=new mysqli("localhost","mahasiswa","","pengumuman online");

    if($mysqli->connect_errno){
        echo "Failed to connect";
    }
?>