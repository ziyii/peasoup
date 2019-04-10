<?php
//include 'token-management.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peasoup - Blackjack</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script type = "text/javascript" src="js/card-api.js"></script>
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->

    </head>
    <body onload="newBlackjack()">
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon" style="margin-left: 20px;">Blackjack </h1>
            <div class="blackjack" id="blackjack_game">
                <p>&nbsp;</p>
                <h1 style="color:#ffb600;" class="blackjack">Dealer's Hand</h1>
                <p>&nbsp;</p>
                
                <div class="card_hand" id="dealer">
                    <img class="card" src="images/blackjack_back.png">
                </div>
                
                    <p class="blackjack">Dealer's hand's Value: </p>
                    <p class="blackjack" id="dealerValue" >0</p>
                <p>&nbsp;</p>
                
                <p style="color:#ffb600;" class="blackjack" id="label">Loading...</p>
                
                <p>&nbsp;</p>
                
                <div class="card_hand" id="player">
                    <img class="card" src="images/blackjack_back.png">
                
                </div>
                    <p class="blackjack">Your hand's Value: </p>
                    <p class="blackjack" id="playerValue" >0</p>
                
                <p>&nbsp;</p>
                <h1 style="color:#ffb600;" class="blackjack">Your Hand</h1>
                <p>&nbsp;</p>
                
                <div class="game_menu">
                    <p class="blackjack">Tokens to start new game: 50</p>
                    <button type="button" class="bigger" onclick="newDeck();" onclick="" id="new_game">New Game</button>
                    <button type="button" class="bigger" onclick="hit()" id="hit">Hit</button>
                    <button type="button" class="bigger" onclick="stand()" id="stand">Stand</button>
                    <p>&nbsp;</p>
                    <div style="display:inline">
                        <?php
                            if(isset($_SESSION['tokens'])){
                                echo "<p class='blackjack' id='token_live_label'>Your tokens: </p><p class='blackjack' id='token_live'>". $_SESSION['tokens'] . "</p>";
                            }else{
                                echo "<p class='blackjack' id='token_live_label'>You are not logged in. Play for fun! Log in to play with tokens.</p><p class='blackjack' id='token_live'> </p>";
                            }
                        
                        ?>
                    </div>

                    
                    <p id="deckID" hidden></p>
                    <p id="cardDrawD" hidden>0</p>
                    <p id="cardDrawP" hidden>0</p>
                    <p id="aceCountD" hidden>0</p>
                    <p id="aceCountP" hidden>0</p>
                    <p id="who_won" hidden>0</p>
                    <p id="tokenCount" hidden>count</p>
                    
                </div>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                
            </div>
            <div class="games_icon">
                    <a class="games_icon" href="roulette.php"><img class="games_icon2" src="images/roulette_icon.png"><h1>Roulette</h1></a>
                    <a class="games_icon" href="slots.php"><img class="games_icon2" src="images/slots_icon.png"><h1>Slots</h1></a>
            </div>
        </div>
        
        
    </body>
    
</html>