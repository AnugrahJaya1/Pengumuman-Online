

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
            width : 90%;
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
        p{
            text-align: center;
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
                    <td name="mhsNum" >
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
                        $sql="SELECT count(IdPengumuman) FROM pengumuman"; 
                        $res=$mysqli->query($sql); 
                        $row=$res->fetch_array();
                        echo "<p> $row[0] </p>";
                        ?>
                    </td>
                </tr>
            </table>

            <!--Chart Section-->
            <select>
                <option value="mahasiswa" >Mahasiswa</option>
                <option value="tag" onclick="show()">Tag</option>
            </select>

            <!--PIE CHART TEST-->
            <div id="piechartTag" style="display:none;"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', { 'packages': ['corechart'] });
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Tag Name', 'Usage'],
                        ['ta1 ', 8],
                        ['ta2', 2],
                        ['ta3', 4],
                        ['ta4', 2],
                        ['ta5', 8]
                    ]);

                    // Optional; add a title and set the width and height of the chart

                    var options = { 'title': 'Tags That are Used', 'width': 700, 'height': 500 };

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechartTag'));
                    chart.draw(data, options);
                }

                function show() {
                    var x = document.getElementById("piechartTag");
                     if (x.style.display === "none") {
                         x.style.display = "block";
                      } else {
                          x.style.display = "none";
                      }
} 
            </script>
        </div>
        <!--Profile Section-->
        <?php include("Layout/adminProf.php");?>
    </div>

</body>
</html>