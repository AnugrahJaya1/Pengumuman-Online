<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>

        /*CSS for the body*/
        #hugeCon {
            display: flex;
        }
        #overStats{
            display : block;
            width : 80%;
        }
        #statsTable {
            margin-top : 5px;
            border: outset 1px;
            border-radius : 4px;
            width: 97%;
        }
        
        th{
            border : solid 2px ;
            border-color : deepskyblue;
            
        }
        td {
            border: solid 2px;
            border-color : deepskyblue;
        }

      
    </style>
    <meta charset="utf-8" />
    <title>Homes</title>
</head>
<body>
    <!--Top NavBar-->
    <?php include("Layout/header.php"); ?>
    <div id="hugeCon">
        <!--Statistics section-->
        <div id="overStats">
            <table id="statsTable">
                <tr>
                    <th>
                        Mahasiswa
                    </th>
                    <th>
                        Tag
                    </th>
                    <th>
                        Pengumuman
                    </th>
                </tr>
                <tr>
                    <td name="mhsNum" ><?php $mysqli = new mysqli("localhost","root","","pengumuman online"); $sql="SELECT count(NPM) FROM mahasiswa"; $mysqli->query($sql); ?></td>
                    <td name="tagNum"><?php $mysqli = new mysqli("localhost","root","","pengumuman online"); $sql="SELECT count(idTag) FROM tag"; $mysqli->query($sql); ?> </td>
                    <td name="annNum"><?php $mysqli = new mysqli("localhost","root","","pengumuman online"); $sql="SELECT count(idPengumuman) FROM pengumuman"; $mysqli->query($sql); ?></td>
                </tr>
            </table>
        </div>
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>

</body>
</html>