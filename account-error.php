<?php
include 'functions.php';
session_start();
$db = getDB();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peasoup - Account Error</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon">Uh oh... </h1>

            <p>&nbsp;</p>
            <p>There seems to be a problem. </p>
            <?php
                $code = array("The wrong password was entered.","The Confirm Password does not match.","This account already exists.");
                if(isset($_GET["code"])){
                    echo $code[$_GET["code"]];
                    
                }
            
            ?>
        </div>
    </body>
    
</html>