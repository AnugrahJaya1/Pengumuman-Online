<?php
    include("../connection/connectionAdm.php");

    if(isset($_GET['searchButt'])){
        $judul=$_GET['searchAnn'];
        
        if(isset($judul) && $judul!=""){
            $sql="SELECT DISTINCT * FROM pengumuman WHERE Judul='$judul'";
            $res=$mysqli->query($sql);
            $row=$res->fetch_array();
            $judul=$row['Judul'];
            $author=$row['Author'];
            $date=$row['Tanggal'];
            $des=$row['Deskripsi'];
            include("../Layout/header.php");
            echo "
            <form id='announceText' method='get' action='editAnnounce.php'>
                <fieldset>
                    <legend>Write Announcment here </legend>
                    <br />
                    <input id='titForm'  type='text' name='annTitle' value='$judul' />
                    <input id='titAuth'  type='text' name='annAuth' value='$author' />
                    <input id='titDate' type='date' name='annDate' value='$date' />
                    <textarea name='annText' id='txtField' >$des</textarea>
                    <br />
                    <input type='submit' name='iUp' id='annButt' value='Update' />
                    <input type='submit' name='iDel' id='annButt' value='Delete' />
                </fieldset>
            </form>";
            

            //header("Location: ../adminEditAnn.php");
            // echo"<input id='titForm' type='text' value='$judul'>";
            // echo"<input id='titForm' type='text' value='$author'>";
            // echo"<input id='titForm' type='date' value='$date'>";
            // echo"<input id='titForm' type='txtfield' value='$des'>";
            
        }else{
            header("Location: ../adminEditAnn.php");
        }
    }

?>