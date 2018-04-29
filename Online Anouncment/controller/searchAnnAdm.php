<?php
    include("../connection/connectionAdm.php");

    

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        /*CSS for the body*/
        #hugeCon {
            display: flex;
        }

        #announceText {
            padding-top: 30px;
            width: 80%;
            height: 80%;
        }

        #txtField {
            width: 90%;
            height: 600px;
            padding-top: 10px;
        }

        #titForm {
            width: 90%;
            height: 20%;
        }

        #titDate {
            margin-bottom: 5px;
            width: 18.2%;
            height: 20%;
        }

        #titAuth {
            margin-top: 4px;
            margin-bottom: 5px;
        }
    </style>
    <meta charset="utf-8" />
    <title>Insert Annoucment</title>
</head>
<body>
    <!--Top NavBar-->
   <?php include("../Layout/header.php"); ?>
    <div id="hugeCon">
        <!--Insert Annoucment section-->
        <?php
        if(isset($_GET['searchButt'])){
            $judul=$_GET['searchAnn'];

            if(isset($judul) && $judul!=""){
                $sql="SELECT * FROM pengumuman WHERE Judul='$judul'";
                $res=$mysqli->query($sql);
                $row=$res->fetch_array();
                $judul=$row['Judul'];
                $author=$row['Author'];
                $date=$row['Tanggal'];
                $des=$row['Deskripsi'];
                
                echo "
            <form id='announceText' method='get' action='controller/editAnnounce.php'>
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

        
       <!--Profile Section-->
      <?php include("../Layout/adminProfIn.php");?>
    </div>
</body>
</html>