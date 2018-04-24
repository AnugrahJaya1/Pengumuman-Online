<?php
   include("connection/connectionAdm.php");

   

   if(isset$_GET['annButt']){
       $judul=$_GET['annTitle'];
       $author=$_GET['annAuth'];
       $tanggal=$_GET['annDate'];
       $des=$_GET['annText'];

       if(isset($judul) && isset($author) && isset($tanggal) && isset($des) 
                    && $judul!="" && $author!="" && $tanggal!="" && $des!=""){
           $sql="UPDATE pengumuman SET Judul='$judul',Author='$author',Tanggal='$tanggal',Deskripsi='$des'";
           $mysqli->query($sql);
           $sql="UPDATE tagpengumuman SET Judul='$judul',Author='$author',Tanggal='$tanggal',Deskripsi='$des'"
           $mysqli->query($sql);

           //belum beres
       }
   }
    
?>