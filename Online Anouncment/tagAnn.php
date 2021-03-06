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

    table {
        border: 1px solid deepskyblue;
        border-collapse: collapse;
    }

    td, tr {
        border: 1px solid deepskyblue;
        padding: 4px;
    }

    th {
        padding: 4px;
        border: 1px solid deepskyblue;
        text-align: center;
        background: deepskyblue;
        color: white;
    }

</style>
<head>

    <meta charset="utf-8" />
    <title>Alokasi Tag Pengumuman</title>
</head>
<body>
    <!--NavBar--><?php include("Layout/header.php");?>
    <div id="hugeCon">
        <!--Edit Section-->
        <div id="admnIns">
            <form id="fomrIns" method="post" action="controller/alokasiTagPengumuman.php" style="padding-left : 10px;">
                Judul :
                <br />
                <input class="forms" name="judul" type="text" />
                <br />
                <br />
                <fieldset>
                    <legend>Tags</legend>
                    <div data-role="controlgroup">
                        <!-- <label for="red">Red</label>
                        <input type="checkbox" name="favcolor" id="red" value="red" />
                        <label for="green">Green</label>
                        <input type="checkbox" name="favcolor" id="green" value="green" />
                        <label for="blue">Blue</label>
                        <input type="checkbox" name="favcolor" id="blue" value="blue" /> -->
                        <?php
                            include("controller/getTag.php")
                        ?>
                    </div>
                </fieldset>
                <input type="submit" value="submit" name="add" />
            </form>
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
        </div>
        <!--Profile Section--><?php include("Layout/adminProf.php");?>
    </div>
</body>
</html>