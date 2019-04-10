<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peasoup - Games</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon">Games</h1>

            <p>&nbsp;</p>
            <?php include "include/games-bank.php" ?>
        </div>
    </body>
    
</html>