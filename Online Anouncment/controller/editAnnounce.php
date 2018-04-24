<?php
   include("../connection/connectionAdm.php");

   

   if(isset($_GET['iUp'])){
       $judul=$_GET['annTitle'];
       $author=$_GET['annAuth'];
       $tanggal=$_GET['annDate'];
       $des=$_GET['annText'];

       if(isset($judul) && isset($author) && isset($tanggal) && isset($des) 
                && $judul!="" && $author!="" && $tanggal!="" && $des!=""){
           $sql="UPDATE pengumuman SET Judul='$judul',Author='$author',Tanggal='$tanggal',Deskripsi='$des' WHERE Judul='$judul'";
           $mysqli->query($sql);
           $sql="UPDATE tagpengumuman SET Judul='$judul',Author='$author',Tanggal='$tanggal',Deskripsi='$des' WHERE Judul=$judul";
           $mysqli->query($sql);
       }
   }else if(isset($_GET['iDel'])){
        $judul=$_GET['annTitle'];
        $author=$_GET['annAuth'];
        $tanggal=$_GET['annDate'];
        $des=$_GET['annText'];

        if(isset($judul) && isset($author) && isset($tanggal) && isset($des) 
             && $judul!="" && $author!="" && $tanggal!="" && $des!=""){


            $sql="DELETE FROM pengumuman WHERE Judul='$judul";
            $mysqli->query($sql);

            $sql="DELETE FROM tagpengumuman WHERE Judul='$Judul'";
            $mysqli->query($sql);
        }

   }

   header("Location: ../adminEditAnn.php");
    
?>