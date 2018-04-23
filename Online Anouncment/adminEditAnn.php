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
    </style>
    <meta charset="utf-8" />
    <title>Edit Annoucment</title>
</head>
<body>
    <!--Top NavBar-->
    <?php include("Layout/header.php"); ?>
    <div id="hugeCon">
        <div id="formCon" >
            <!-- Annoucment Search section-->
            <form id="annSearch" method="get" action="">
                Search Article <br />
                <input type="text" id="search" name="searchAnn" placeholder="Announcement Title" />
                <br />
                <input type="button" id="searchButt" name="searchButt" value="Search" />
            </form>
            <form id="announceText" method="get" action="controller/InsertAnnouncment.php">
                <fieldset>
                    <legend>Write Announcment here </legend>
                    <br />
                    <input id="titForm"  type="text" name="annTitle" />
                    <input id="titAuth"  type="text" name="annAuth" />
                    <input id="titDate" type="date" name="annDate" value="" />
                    <textarea name="annText" id="txtField"></textarea>
                    <br />
                    <input type="submit" name="annButt" id="annButt" value="Edit" />
                </fieldset>
            </form>
        </div>
        
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>