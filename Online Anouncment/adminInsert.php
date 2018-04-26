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
        width : 97%;
        margin-left : 2%;
    }
    
</style>
<head>
   
    <meta charset="utf-8" />
    <title>Insert Mahasiswa</title>
</head>
<body>
    <!--NavBar--><?php include("Layout/header.php");?>
    <div id="hugeCon">
        <!--Edit Section-->
        <div id="admnIns">
            <form id="fomrIns" method="post" action="controller/InsertMhs.php" style="padding-left : 10px;">
                NPM :<br />
                <input class="forms" name="npm" type="text" /> <br /> <br />
                Email :<br />
                <input class="forms" name="emailMhs" type="email" /><br /> <br />
                Password :
                <input class="forms" name="passMhs" type="password" />
                <br />
                <br />
                <fieldset>
                    <legend>Tags</legend>
                    <div data-role="controlgroup">
                        <?php  ////////////////////////////////////////
                              /// INVOKE CHECK BOX HERE //////////////
                             ////////////////////////////////////////
                        ?>
                        <label for="red">Red</label>
                        <input type="checkbox" name="favcolor" id="red" value="red" />
                        <label for="green">Green</label>
                        <input type="checkbox" name="favcolor" id="green" value="green" />
                        <label for="blue">Blue</label>
                        <input type="checkbox" name="favcolor" id="blue" value="blue" />
                    </div>
                </fieldset>
                <input type="submit" value="Add" name="add" />
            </form>

        </div>
        <!--Profile Section--><?php include("Layout/adminProf.php");?>
    </div>

    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}
    </script>
</body>
</html>
