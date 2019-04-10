<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peasoup - How to Play</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon">How to Play</h1>
            <table>
                <tr>
                    <td><a href="roulette.php"><img class="games_icon" src="images/roulette_icon.png"></a></td>
                    <td>
                        <h1 class="games_icon">Roulette</h1>
                        <p>Bet on a number and/or a colour and spin the wheel! Win if it lands on your pick! </p>
                    </td>
                </tr>
                <tr>
                    <td><a href="blackjack.php"><img class="games_icon" src="images/blackjack_icon.png"></a></td>
                    <td>
                        <h1 class="games_icon">Blackjack</h1>
                        <p>Can you hit 21? Go head to head against an NPC Dealer! Deal as many cards as possible until the sum equals 21. Aces can count as a 1 or an 11.  </p>
                    </td>
                </tr>
                <tr>
                    <td><a href="slots.php"><img class="games_icon" src="images/slots_icon.png"></a></td>
                    <td>
                        <h1 class="games_icon">Slots</h1>
                        <p>Pull that level and hope for triple 7s! </p>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    
</html>