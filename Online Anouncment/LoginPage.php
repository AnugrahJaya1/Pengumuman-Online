<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <style>
        input[type=text], input[type=password] {
            width : 100%;
            height : 25px;
            display: inline-block;
        }
        div{
            padding-top : 4%;
            padding-left : 20%;
            padding-right : 20%;
        }
        button{
            height: 25px;
            width : 100%;
            background-color : midnightblue;
            color : white;
        }
        #footer {
            background-color: #f1f1f1;
            opacity: 0.9;
            margin-top : 10px;
            padding-bottom : 20px;
        }
        #icon{
            margin-left : 17%;
        }
    </style>
</head>
<body>
    <div id="container">
        <form method="post" action="controller/login.php">
            <div id="icon">
                <img src="images/icon2.jpg" />
            </div>
            <!--<?php //include("errors.php"); ?>-->
            <label> <b>Username</b></label>
            <br />
            <input type="text" placeholder="Enter Username" name="email"/>
            <br />
            <br />
            <label><b>Password</b></label>
            <br />
            <input type="password" placeholder="Enter Password" name="password" />
            <br />
            <br />
            <input id="LoginButt" type="submit" value="Login" name="login">
        </form>
    </div>
    <div id="footer">
        <a href="" target="_blank">Forgot Password?</a>
    </div>
    
</body>
</html>