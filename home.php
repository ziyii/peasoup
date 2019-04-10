<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peasoup Casino</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon" style="margin-left: 20px;">Welcome to Peasoup Casino! </h1>
            <p style="text-align:justify;margin-left: 20px;margin-right: 20px;">Play to your heart's content for absolutely FREE! That's right. FREE! There is not real money required. Addicted to gambling? No problem! Here at Peasoup Casino, there is nothing to lose! Need an out to your gambling addiction? No problem! Peasoup Casino is a great place to gamble with no regrets! Want to try gambling? No problem! Peasoup Casino is for all ages (18 and up)! We encourage you to play your heart out in these three prime casino games. </p>
            
            <?php include "include/games-bank.php" ?>
        </div>
    </body>
    
</html>