<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        /*CSS for the body*/
       
        #hugeCon{
            display :flex;
        }
        #profileSec {
            padding-top: 20px;
            padding-left: 30px;
        }
        #profIcon{
            width : 200px;
            height :200px;
        }
        #userId{
            padding-left : 20%;
            text-align :center
        }
        #tagSection {
            width: 200px;
            background-color: lightgrey;
            
        }
        /* a {
			text-decoration: none;
			border: 2px solid teal;
			//background: black;
			color: teal;
			padding: 6px;
			margin-left: 8px;
		}
		a:hover{
			color: white;
			//background: teal;
		} */
    </style>
    <meta charset="utf-8" />
    <title>User Home</title>
</head>
<body>
    <!--Top NavBar-->
    <?php include("Layout/userHeader.php"); ?>
    <div id="hugeCon">
        <!--Bulletin For the Annoucment-->
		<?php include("Layout/bulletin.php"); ?>
        <!--Profile Section-->
        <div id="profileSec">
            <img id="profIcon" src="images/icon3.png" />
            <br />
            <label ><b id="userId" style="font-size : 15px;"><?php  echo $user ?></b></label>
            <div id="tagSection">
                <ul style="list-style:none;">
                    <!-- <li>
                        <a href="" target="_self" style="text-decoration : none;">Fakultas</a>
                        <label>(quantity here)</label>
                    </li>
                    <li>
                        <a href="" target="_self" style="text-decoration : none;">Jurusan</a>
                        <label>(quantity here)</label>
                    </li>
                    <li>
                        <a href="" target="_self" style="text-decoration : none;">Mata Kuliah</a>
                        <label>(quantity here)</label>
                    </li>
                    <li>
                        <a href="" target="_self" style="text-decoration : none;">Angkatan</a>
                        <label>(quantity here)</label>
                    </li> -->
                    <?php
                        include("controller/getNameTagAndQuality.php");
                    ?>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>