<?php
    session_start(); 
    include 'functions.php';
    $db = getDB();

//logout
//unset session user and tokens
unset($_SESSION["loginID"]);
unset($_SESSION["tokens"]);
header("Location: home.php");

?>
