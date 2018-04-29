<?php
    include("connection/connectionAdm.php");
    $sql = "SELECT NamaTag, COUNT(NamaTag) AS 'jumlah' FROM tag_pengumuman GROUP BY NamaTag";
    $result = $mysqli -> query($sql);
    $table = array();
    $table['cols'] = array(
            array('label' => 'Nama Tag', 'type' => 'string'),
            array('label' => 'Jumlah', 'type' => 'number'));
    $row = array();
    foreach($result as $r){
        $temp = array();
        //code to slice the pie chart
        $temp[] = array('v' => (string) $r['NamaTag']);
        //values for each slices
        $temp[] = array('v' => (int) $r['jumlah']);
        $row[] = array('c' => $temp);
    }
    $table['rows'] = $row;
    $jsonTable = json_encode($table);
//echo $jsonTable;
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        /*CSS for the body*/
        #hugeCon {
            display: flex;
        }
        #overStats {
            display: block;
            width: 90%;
        }
        #statsTable {
            margin-top: 5px;
            border: outset 1px;
            border-radius: 4px;
            width: 97%;
        }
        #piechartTag {
            margin-left: 20%;
        }
        th {
            border: solid 2px;
            border-color: deepskyblue;
        }
        td {
            border: solid 2px;
            border-color: deepskyblue;
        }
        p {
            text-align: center;
        }
    </style>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        // Load the Visualization API and the piechart package.
        google.charts.load('current', { 'packages': ['corechart'] });
        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            //var jsonData = $.ajax({
            //    url: "controller/getData.php",
            //   dataType: "json",
            //    async: done
            //}).responseText;
            // Create our data table out of JSON data loaded from server.
             var data = new google.visualization.DataTable(<?=$jsonTable?>);
            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('piechartTag'));
            chart.draw(data, { title:'Used Tag', width: 500, height: 400 });
        }
    </script>
    <meta charset="utf-8" />

    <title>Homes</title>
</head>
<body>
    <!--Top NavBar--><?php include("Layout/header.php"); ?>
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
                    <td name="mhsNum">                        
                        <?php include("connection/connectionAdm.php");
                            $sql="SELECT count(NPM) FROM users";
                            $res=$mysqli->query($sql);
                            $row=$res->fetch_array();
                            echo "<p> $row[0] </p>";
                        ?>
                    </td>
                    <td name="tagNum">                        
                        <?php include("connection/connectionAdm.php");
                            $sql="SELECT count(idTag) FROM tag";
                            $res=$mysqli->query($sql);
                            $row=$res->fetch_array();
                            echo "<p> $row[0] </p>";
                        ?>
                    </td>
                    <td name="annNum">                        
                        <?php include("connection/connectionAdm.php");
                            $sql="SELECT count(idPengumuman) FROM pengumuman";
                            $res=$mysqli->query($sql);
                            $row=$res->fetch_array();
                            echo "<p> $row[0] </p>";
                        ?>
                    </td>
                </tr>
            </table>
            <!--Chart Section-->
            <select>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="tag">Tag</option>
            </select>

            <!--PIE CHART TEST-->

            <div id="piechartTag" ></div>

        </div>
        <!--Profile Section--><?php include("Layout/adminProf.php");?>
    </div>

</body>
</html>