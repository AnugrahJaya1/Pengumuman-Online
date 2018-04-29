<style>
    .bulletin {
        list-style: none;
        padding: 5% 5%;
        background-color: lightgrey;
        border-bottom: groove 4px lightslategrey;
        border-radius : 3px;
    }
        .bulletin:hover {
            border: outset 4px lightslategrey;
            border-radius : 3px;
        }
    #bullCon {
        flex : 1;
        opacity: 0.8;
        display: block;
        width: 60%;
        margin-right : 4px;
    }
    li{
        margin-bottom : 4px;
    }
</style>

<div id="bullCon">
    <ul id="annoucmentBull" style="text-decoration:none;">
        <!--<li class="bulletin">
            <article>
                1. Annoucment Goes Here
            </article>
        </li>
        <li class="bulletin">
            <article>
                2. Annoucment Goes Here
            </article>
        </li>
        <li class="bulletin">
            <article>
                3. Annoucment Goes Here
            </article>
        </li>-->
        <?php
            include("controller/getAnnounceMhs.php");
        ?>

    </ul>
</div>