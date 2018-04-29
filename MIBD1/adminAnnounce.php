<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        /*CSS for the body*/
        #hugeCon {
            display: flex;
        }
        #announceText{
            padding-top : 30px;
            width : 80%;
            height : 80%;
        }
        #txtField{
            width : 90%;
            height :600px;
            padding-top : 10px;
        }
        #titForm{
           width : 90%;
           height : 20%;
        }
        #titDate{
            margin-bottom : 5px;
            width : 18.2%;
            height : 20%;
        }
        #titAuth{
            margin-top : 4px;
            margin-bottom: 5px;
        }
    </style>
    <meta charset="utf-8" />
    <title>Insert Annoucment</title>
</head>
<body>
    <!--Top NavBar-->
    <?php include("Layout/header.php"); ?>
    <div id="hugeCon">
        <!--Insert Annoucment section-->
            <form id="announceText"  method="get" action="controller/InsertAnnouncment.php">
                <fieldset>
                 <legend>Write Announcment here </legend><br />
                  <input id="titForm" placeholder="Enter Title Here" type="text" name="annTitle" />
                    <input id="titAuth" placeholder="Author Name Here" type="text" name="annAuth"/>
                    <input id="titDate" type="date" name="annDate" value="<?php echo date('Y-m-d') ?>" /> 
                  <textarea  name="annText" id="txtField"> </textarea><br />
                  <input type="submit" name="annButt" id="annButt" value="Publish"/>
                </fieldset>
            </form>
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>