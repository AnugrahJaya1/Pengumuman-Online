<?php
    include("../connection/connectionAdm.php");

    if(isset($_POST['add'])){
        $npm=$_POST['npm'];

        $sql="SELECT DISTINCT * FROM tag";

        $arr=array();

        if($result=$mysqli->query($sql)){
            while($row=$result->fetch_array()){
                $name=$row['NamaTag'];
                $idTag=$row['IdTag'];
                
                // echo $name." ";
                // echo $idTag." ";

                if(isset($_POST[$name])){
                    array_push($arr,$name,$idTag);
                    //array_push($arr,$idTag);
                }
            }
        }

        //echo sizeof($arr);

        $sql="SELECT DISTINCT * FROM mahasiswa WHERE NPM='$npm'";
        $res=$mysqli->query($sql);
        $row=$res->fetch_array();

        $email=$row['EmailMahasiswa'];
        $pass=$row['PasswordMahasiswa'];
        
        //echo sizeof($arr)/2;

        for($i=0,$j=1;$i<sizeof($arr);$i+=2,$j+=2){
            $nama=$arr[$i];
            $id=$arr[$j];
            // echo $nama." ";
            // echo $id." ";
            $sql="INSERT INTO pengumumanmahasiswa (NPM,IdTag,EmailMahasiswa,PasswordMahasiswa,NamaTag) VALUES ('$npm','$id','$email','$pass','$nama')";
            $mysqli->query($sql);
        }
        

    }
    header("Location: ../tagMhs.php");


?>