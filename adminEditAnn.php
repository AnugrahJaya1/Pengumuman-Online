<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        /*CSS for the body*/
        #hugeCon {
            display: flex;
        }
        #annSearch{
            margin-left : 4px;
            margin-top : 20px;
            border-bottom : solid 2px black;
            height : 8%;
        }
        #search{
            width : 40%;
        }
        #searchButt{
            margin-top : 4px;
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

        table {
            border: 1px solid teal;
            border-collapse: collapse;
        }

        td, tr{
            border: 1px solid teal;
            padding: 4px;
        }	
            
        th {
            padding: 4px;
            border: 1px solid teal;
            text-align: center;
            background: teal;
            color: white;
        }
    </style>
    <meta charset="utf-8" />
    <title>Edit Annoucment</title>
</head>
<body>
    <!--Top NavBar-->
    <?php include("Layout/header.php"); ?>
    <div id="hugeCon">
        <div id="formCon" >

         <table>
                <tr>
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Tanggal</th>
                </tr>
                <?php
                    include("controller/getAnnounceAdm.php");
                ?>

            </table>
            <br>
            <!-- Annoucment Search section-->
            <form id="annSearch" method="get" action="controller/searchAnnAdm.php">
                Search Article <br />
                <input type="text" id="search" name="searchAnn" placeholder="Announcement Title" />
                <br />
                <input type="submit" id="searchButt" name="searchButt" value="Search" />
            </form>
            <br>
           

            <!-- <form id="announceText" method="get" action="controller/editAnnounce.php">
                <fieldset>
                    <legend>Write Announcment here </legend>
                    <br />
                    <input id="titForm"  type="text" name="annTitle" >" />
                    <input id="titAuth"  type="text" name="annAuth" />
                    <input id="titDate" type="date" name="annDate" value="" />
                    <textarea name="annText" id="txtField"></textarea>
                    <br />
                    <input type="submit" name="annButt" id="annButt" value="Edit" />
                </fieldset>
            </form> -->
        </div>
        
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>