<style>
            #navBar {
            background-color: deepskyblue;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .nav{
            float : left;
            border-right: 1px solid #000000;
        }
        .nav a{
            display : block;
            text-align :center;
            text-decoration : none;
            color :  white;
            padding : 14px 30px;
        }
        li a:hover {
            background-color : dodgerblue;
        }
</style>

<ul id="navBar">
    <li class="nav"><a href="../adminPage.php">Home</a></li>
    <li class="nav" id="last" style="float:right; border-left: 1px solid #000000; border-right:none;"><a href="../MIBD1/index.php">Log Out</a></li>
</ul>
