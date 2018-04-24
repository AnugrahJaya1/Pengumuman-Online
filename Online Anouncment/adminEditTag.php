<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        /*CSS for the body*/
        #hugeCon {
            display: flex;
        }
        #editSec {
            margin-top: 4px;
            background-color: lightgrey;
            width : 90%;
        }
        #fieldS{
            margin-top : 40px;
            width:80%;
        }
        #fromCon{
            margin-top : 5px;
            margin-left : 20%;
        }
       #npmTxt{
           width : 100%;
       }
       #passTxt{
           width : 100%;
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
    <title>Edit Mahasiswa</title>
</head>
<body>
    <!--Top NavBar-->
    <?php include("Layout/header.php"); ?>
    <div id="hugeCon">


        
        <!--Mahasiswa edit section-->
            <div id="editSec">
                <table>
                    <tr>
                        <th>Nama Tag</th>
                    </tr>
                <?php
                    include("controller/getTagAdm.php");
                ?>

                </table>

                <form id="fromCon" method="get" action="controller/editTag.php">
                 <fieldset id="fieldS">
                      
                        Old Name    
                        <br />
                        <input type="text" name="oldName" placeholder="insert Old Name" id="npmTxt"/>
                        <br />
                         New Name
                        <br />
                        <input type="text" name="newName" placeholder="Insert New Name" id="passTxt" />
                        <br />
                         <input type="submit" id="searButt" name="subButt" value="Change Name" />        
                 </fieldset>
               </form>
            </div>
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>