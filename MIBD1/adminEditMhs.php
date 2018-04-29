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
                <form id="fromCon" method="post" action="controller/editMhs.php">
                 <fieldset id="fieldS">
                      
                        NPM   
                        <br />
                        <input type="text" name="npmCon" placeholder="insert NPM" id="npmTxt"/>
                        <br />
                         Pass
                        <br />
                        <input type="password" name="passCon" placeholder="Insert new Password" id="passTxt" />
                        <br />
                         <input type="submit" id="searButt" name="iUp" value="Update" />    
                         <input type="submit" id="searButt" name="iDel" value="Delete" />     
                 </fieldset>
               </form>
            </div>
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>