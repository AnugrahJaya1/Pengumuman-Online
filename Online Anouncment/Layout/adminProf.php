<style>
    #profileSec {
        border : inset;
        border-radius : 6px;
        padding-top: 20px;
        padding-left: 30px;
    }

    #profIcon {
        width: 200px;
        height: 200px;
    }

    #userId {
        padding-left: 20%;
        text-align: center
    }


    #tagSection {
        border-radius: 6px;
        width: 200px;
        background-color: lightgrey;
    }
    
    .dropbtn {
        height: 90px;
        width:117px;
        background-color: dodgerblue;
        border-radius : 6px;
        color: white;
        padding: 30px;
        font-size: 16px;
        border: solid;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        width : 200px;
    }

    .dropdown-content {
        border-radius : 3px;
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

            .dropdown-content a:hover {
                background-color: #ddd
            }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: deepskyblue;
    }
</style>

<div id="profileSec">
    <img id="profIcon" src="images/icon3.png" />
    <br />
    <label>
        <b id="userId" style="font-size : 30px;">Username</b>
    </label>
   
    <div id="tagSection">
        <div class="dropdown">
            <button class="dropbtn">Edit</button>
            <div class="dropdown-content">
                <a href="adminEdit.php" target="_self" style="text-decoration : none;">Mahasiswa</a>
                <a href="adminEdit.php" target="_self" style="text-decoration : none;">Pengumuman</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Insert</button>
            <div class="dropdown-content">
                <a href="adminEdit.php" target="_self" style="text-decoration : none;">Mahasiswa</a>
                <a href="adminEdit.php" target="_self" style="text-decoration : none;">Pengumuman</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Update</button>
            <div class="dropdown-content">
                <a href="adminEdit.php" target="_self" style="text-decoration : none;">Mahasiswa</a>
                <a href="adminEdit.php" target="_self" style="text-decoration : none;">Pengumuman</a>
            </div>
        </div>

    </div>
</div>