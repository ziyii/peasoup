<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peasoup - Slots</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon" style="margin-left: 20px;">Slots </h1>
            <div class="blackjack">
                <iframe src="http://www.slotsmamma.com/pirate-gold/pirates-gold.php" frameborder="0" style="border:none;" width="680" height="480" scrolling="no"></iframe>
<!--                game from Webmaster http://www.slotsmamma.com/use_slots.php-->
            </div>
<!--
            <div style="border-style: solid;border-width: 1px;padding:200px;">
                <p>Coming Soon.... </p>
                <p>In the meantime, try Blackjack!</p>
            </div>
-->
            <div class="games_icon">
                    <a class="games_icon" href="roulette.php"><img class="games_icon2" src="images/roulette_icon.png"><h1>Roulette</h1></a>
                    <a class="games_icon" href="blackjack.php"><img class="games_icon2" src="images/blackjack_icon.png"><h1>Blackjack</h1></a>
            </div>
        </div>
    </body>
    
</html>