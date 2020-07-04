<?php require "./include/selectArticol.inc.php"?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="./dist/spectre.css">
    <link rel="stylesheet" href="./dist/spectre-icons.css">
    <title>M&E | Blog</title>
    </head>
<body>

        <?php require "./navbar.inc.php" ?>
        
        <div class="columns col-9 col-lg-12" id="main">
                <div class="breton"  id="breton">
                    <span id="iconita" style="font-size:30px; cursor:pointer; margin-top: 1px;" onclick="openNav()">&#9776;</span>
                    <h1>"Noutati"</h1>
                </div>
            <?php
            foreach ($array as $item) {
            ?>
            <div class="columns col-12">
                <div class="columns col-8 col-lg-12">
                    <img class="img" src="./img/creativity.jpg">
                    <div class="articolContinut p-absolute">
                        <h1 style="font-size: 32px"><?php echo mb_strimwidth($item["titlul_articolului"],0,30,"..."); ?></h1>
                        <p><?php echo mb_strimwidth($item["continut_articol"],0,132,"...");?></p>
                        <p class="more"><a href="#">Citeste mai mult</a></p>
                    </div>
                </div>
                <div id="cercAutor" class="columns col-4" style="padding: 50px;">
                    <img  class="imgcerc " src="./img/creativity.jpg">
                    <p class="autorDescriere">Mihai, inca un incepator in ale scrisului dar pasionat sa invete mai multe, mare adept al filozofiei
                        si imbratisarilor fara motiv este si asa se duce la padure.
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<script src="./js/sidebar.js"></script>
</body>
</html> 