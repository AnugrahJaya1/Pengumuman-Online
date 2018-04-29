<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<style>
    #hugeCon {
        padding-top: 20px;
        display: flex;
    }
    #admnIns {
        padding-top: 20px;
        background-color: lightgrey;
        flex: 1;
        opacity: 0.8;
        display: block;
        width: 60%;
    }
    #fomrIns {
        margin-left: 10%;
    }
    .forms {
        width: 90%;
        margin-left: 2%;
    }
    #field{
        width : 80%;
    }
    #insButt{
        margin-top : 4px;
    }
</style>
<head>
    <meta charset="utf-8" />
    <title>Insert Tag</title>
</head>
<body>
    <!--NavBar-->
    <?php include("Layout/header.php");?>
    <div id="hugeCon">
        <!--Edit Section-->
        <div id="admnIns">
            <form id="fomrIns" method="post" action="controller/insertTag.php" style="padding-left : 10px;">
                <fieldset id="field">
                    <legend>Insert Tag</legend>
                    <input type="text" class="forms" name="tagText" />
                    <br />
                    <input type="submit" id="insButt" name="tagSub" value="Insert"/>
                </fieldset>
            </form>
        </div>
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>