<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        body{
            background-color : ghostwhite;
            opacity : 0.8;
        }
        #navBar {
            background-color: deepskyblue;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .nav {
            float: left;
            border-right: 1px solid #000000;
        }

            .nav a {
                display: block;
                text-align: center;
                text-decoration: none;
                color: white;
                padding: 14px 30px;
            }

        li a:hover {
            background-color: dodgerblue;
        }
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
      
    </style>
    <meta charset="utf-8" />
    <title>User Home</title>
</head>
<body>
    <!--Top NavBar-->
    <ul id="navBar">
        <li class="nav"><a href="#home">Home</a></li>
        <li class="nav" id="last" style="float:right; border-left: 1px solid #000000; border-right:none;"><a href="LoginPage.php">Log out</a></li>
    </ul>
    <div id="hugeCon">
        <!--Bulletin For the Annoucment-->
		<?php include("Layout/bulletin.php"); ?>
        <!--Profile Section-->
        <div id="profileSec">
            <img id="profIcon" src="images/icon2.jpg" />
            <br />
            <label ><b id="userId" style="font-size : 30px;">Username</b></label>
            <div id="tagSection">
                <ul style="list-style:none;">
                    <li>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>