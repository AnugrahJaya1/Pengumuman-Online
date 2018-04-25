<?php
    include("../connection/connectionAdm.php");

    if(isset($_POST['add'])){
        $judul=$_POST['judul'];

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

        $sql="SELECT DISTINCT * FROM pengumuman WHERE Judul='$judul'";
        $res=$mysqli->query($sql);
        $row=$res->fetch_array();

        $idP=$row['IdPengumuman'];
        $author=$row['Author'];
        $des=$row['Deskripsi'];
        $tgl=$row['Tanggal'];
        
        //echo sizeof($arr)/2;

        for($i=0,$j=1;$i<sizeof($arr);$i+=2,$j+=2){
            $nama=$arr[$i];
            $id=$arr[$j];
            // echo $nama." ";
            // echo $id." ";
            $sql="INSERT INTO tagpengumuman (IdPengumuman,IdTag,Judul,Author,Deskripsi,Tanggal,NamaTag) VALUES ('$idP','$id','$judul','$author','$des','$tgl','$nama')";
            $mysqli->query($sql);
        }
        

    }
    header("Location: ../tagAnn.php");


?>