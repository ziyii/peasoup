<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peasoup - Sign Up</title>

        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include "include/header.php" ?>
        
        <div class="main">
            <h1 class="games_icon">Sign Up</h1>

            <p>&nbsp;</p>
            <form action="signup-check.php">
                <label for="uname">Username</label>
                <input type="text" id="uname" name="uname">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd">
                <label for="cpwd">Confirm Password</label>
                <input type="password" id="cpwd" name="cpwd">

                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
    
</html>