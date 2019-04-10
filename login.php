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
        <title>Peasoup - Login</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon">Log in to play!</h1>

            <p>&nbsp;</p>
            <form action="login-check.php">
                <label for="uname">Username</label>
                <input type="text" id="uname" name="uname">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd">

                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
    
</html>