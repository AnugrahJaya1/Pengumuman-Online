<?php
    include("connection/connectionAdm.php");

    $sql="SELECT DISTINCT NamaTag FROM tag";

    if($result=$mysqli->query($sql)){
        while($row=$result->fetch_array()){
            $name=$row['NamaTag'];
            //echo $name." ";
            echo "<label for='$name'>".$name."</label>";
            echo "<input type='checkbox' name='$name' value='$name' />";
        }
    }

?>