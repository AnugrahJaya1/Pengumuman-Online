<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<style>
    body {
        background-color: lightslategrey;
    }

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
            <form method="post" style="padding-left : 10px;">
                NPM :
                <input name="npm" type="text"/> <br /> <br />
                Nama : 
                <input name="namaMhs" type="text"/> <br /> <br />
                Email :
                <input name="emailMhs" type="email"/><br /> <br />
                Password :
                <input name="passMhs" type="text"/>

                <input type="submit" value="Add" />
            </form>
        </div>
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>