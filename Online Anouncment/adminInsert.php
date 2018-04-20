<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<style>


    #hugeCon {
        padding-top : 20px;
        display: flex;
    }

    #admnIns {
        padding-top : 20px;
        background-color: lightgrey;
        flex: 1;
        opacity: 0.8;
        display: block;
        width: 60%;
    }

    #fomrIns{
        margin-left : 10%;
    }
    .forms{
        width : 90%;
        margin-left : 2%;
    }
    
</style>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <!--NavBar-->
    <?php include("Layout/header.php");?>
    <div id="hugeCon">
        <!--Edit Section-->
        <div id="admnIns">
            <form id="fomrIns" action="controller/insertMhs.php" method="get" style="padding-left : 10px;">
                NPM :
                <input class="forms" name="npm" type="text"/> <br /> <br />
                Nama : 
                <input class="forms" name="namaMhs" type="text" /> <br /> <br />
                Email :
                <input class="forms" name="emailMhs" type="email" /><br /> <br />
                Password :
                <input class="forms" name="passMhs" type="text" />
                <br />
                <br />
                <input type="submit" value="Add" />
            </form>
        </div>
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>