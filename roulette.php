<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peasoup - Roulette</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon" style="margin-left: 20px;">Roulette </h1>
            <div style="border-style: solid;border-width: 1px;padding:200px;">
                <p>Coming Soon.... </p>
                <p>In the meantime, try Blackjack or Slots!</p>
            </div>
            <div class="games_icon">
                    <a class="games_icon" href="blackjack.php"><img class="games_icon2" src="images/blackjack_icon.png"><h1>Blackjack</h1></a>
                    <a class="games_icon" href="slots.php"><img class="games_icon2" src="images/slots_icon.png"><h1>Slots</h1></a>
            </div>
        </div>
    </body>
    
</html>